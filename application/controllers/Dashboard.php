<?php 

class Dashboard extends Lightweight {

	public function index(){
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			header('Location: ' . Base_URL . '/login');
			exit;
		}
		
		// Get actual counts from data files
		$eventsFile = $this->basePath . '/application/data/events.json';
		$events = [];
		if(file_exists($eventsFile)){
			$events = json_decode(file_get_contents($eventsFile), true) ?? [];
		}
		
		$newslettersFile = $this->basePath . '/application/data/newsletters.json';
		$newsletters = [];
		if(file_exists($newslettersFile)){
			$newsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
		}
		
		$data = [
			'title' => 'Dashboard - Devon Global Immigration Services',
			'page' => 'dashboard',
			'user_name' => $this->get_session('user_name') ?? 'Admin User',
			'stats' => [
				'total_events' => count($events),
				'upcoming_events' => count(array_filter($events, function($e) {
					return isset($e['startDate']) && strtotime($e['startDate']) >= time();
				})),
				'total_newsletters' => count($newsletters),
				'visible_newsletters' => count(array_filter($newsletters, function($n) {
					return !isset($n['visible']) || $n['visible'] !== false;
				}))
			],
			'recent_activity' => [
				['type' => 'event', 'message' => 'New event added', 'time' => '2 hours ago'],
				['type' => 'newsletter', 'message' => 'Newsletter published', 'time' => '5 hours ago'],
				['type' => 'event', 'message' => 'Event published', 'time' => '1 day ago'],
				['type' => 'newsletter', 'message' => 'Newsletter updated', 'time' => '2 days ago']
			]
		];
        $this->view("dashboard", $data);
	}

	public function newsletters(){
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			header('Location: ' . Base_URL . '/login');
			exit;
		}

		// Get newsletters from JSON file
		$newslettersFile = $this->basePath . '/application/data/newsletters.json';
		$allNewsletters = [];
		
		if(file_exists($newslettersFile)){
			$allNewsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
		}

		// Sort newsletters by date (newest first)
		usort($allNewsletters, function($a, $b) {
			return strtotime($b['date'] ?? '1970-01-01') - strtotime($a['date'] ?? '1970-01-01');
		});

		$data = [
			'title' => 'Newsletters Management - Dashboard',
			'page' => 'dashboard_newsletters',
			'user_name' => $this->get_session('user_name') ?? 'Admin User',
			'newsletters' => $allNewsletters
		];
		$this->view("dashboard/newsletters", $data);
	}

	public function services(){
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			header('Location: ' . Base_URL . '/login');
			exit;
		}

		// Get services from JSON file
		$servicesFile = $this->basePath . '/application/data/services.json';
		$allServices = [];
		
		if(file_exists($servicesFile)){
			$allServices = json_decode(file_get_contents($servicesFile), true) ?? [];
		}

		// Get visibility settings
		$visibilityFile = $this->basePath . '/application/data/services_visibility.json';
		$visibility = [];
		if(file_exists($visibilityFile)){
			$visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
		}

		// Merge visibility settings with services
		foreach($allServices as $key => &$service) {
			$service['visible'] = isset($visibility[$key]) ? (bool)$visibility[$key] : (isset($service['visible']) ? (bool)$service['visible'] : true);
		}
		unset($service);

		$data = [
			'title' => 'Services Management - Dashboard',
			'page' => 'dashboard_services',
			'user_name' => $this->get_session('user_name') ?? 'Admin User',
			'services' => $allServices
		];
        $this->view("dashboard/services", $data);
	}

	public function addService(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$title = $this->post('title');
			$description = $this->post('description');
			$icon = $this->post('icon');
			$iconColor = $this->post('iconColor');
			$gradient = $this->post('gradient');
			$buttonColor = $this->post('buttonColor');
			$tags = $this->post('tags');
			$visible = $this->post('visible') === '1' || $this->post('visible') === 'true';

			// Validation
			if(empty($title) || empty($description) || empty($icon)){
				throw new Exception("Title, description, and icon are required.");
			}

			// Generate service key from title
			$serviceKey = strtolower(trim($title));
			$serviceKey = preg_replace('/[^a-z0-9]+/', '_', $serviceKey);
			$serviceKey = trim($serviceKey, '_');

			// Ensure unique key
			$servicesFile = $this->basePath . '/application/data/services.json';
			$allServices = [];
			if(file_exists($servicesFile)){
				$allServices = json_decode(file_get_contents($servicesFile), true) ?? [];
			}

			$originalKey = $serviceKey;
			$counter = 1;
			while(isset($allServices[$serviceKey])){
				$serviceKey = $originalKey . '_' . $counter;
				$counter++;
			}

			// Parse tags
			$tagsArray = [];
			if(!empty($tags)){
				$tagsArray = array_map('trim', explode(',', $tags));
				$tagsArray = array_filter($tagsArray);
			}

			// Create new service
			$newService = [
				'key' => $serviceKey,
				'icon' => $icon,
				'iconColor' => $iconColor ?: 'icon-purple',
				'title' => $title,
				'description' => $description,
				'gradient' => $gradient ?: 'gradient-purple',
				'tags' => array_values($tagsArray),
				'buttonColor' => $buttonColor ?: 'btn-purple',
				'visible' => $visible,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			];

			$allServices[$serviceKey] = $newService;

			// Save services
			if(file_put_contents($servicesFile, json_encode($allServices, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to save service.");
			}

			// Update visibility
			$visibilityFile = $this->basePath . '/application/data/services_visibility.json';
			$visibility = [];
			if(file_exists($visibilityFile)){
				$visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
			}
			$visibility[$serviceKey] = $visible;
			file_put_contents($visibilityFile, json_encode($visibility, JSON_PRETTY_PRINT));

			echo json_encode(['success' => true, 'message' => 'Service added successfully.', 'service' => $newService]);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function toggleService(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$serviceKey = $this->post('service_key');
			$visible = $this->post('visible') === 'true' || $this->post('visible') === '1';

			if(empty($serviceKey)){
				throw new Exception("Service key required.");
			}

			// Check if service exists
			$servicesFile = $this->basePath . '/application/data/services.json';
			$allServices = [];
			if(file_exists($servicesFile)){
				$allServices = json_decode(file_get_contents($servicesFile), true) ?? [];
			}

			if(!isset($allServices[$serviceKey])){
				throw new Exception("Service not found.");
			}

			// Get or create data directory
			$dataDir = $this->basePath . '/application/data';
			if(!is_dir($dataDir)){
				mkdir($dataDir, 0755, true);
			}

			$visibilityFile = $dataDir . '/services_visibility.json';
			$visibility = [];
			
			if(file_exists($visibilityFile)){
				$visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
			}

			$visibility[$serviceKey] = $visible;

			file_put_contents($visibilityFile, json_encode($visibility, JSON_PRETTY_PRINT));

			header('Content-Type: application/json');
			echo json_encode(['success' => true, 'visible' => $visible]);
			exit;

		} catch (Exception $e) {
			http_response_code(400);
			header('Content-Type: application/json');
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
			exit;
		}
	}

	public function events(){
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			header('Location: ' . Base_URL . '/login');
			exit;
		}

		// Get events from JSON file
		$eventsFile = $this->basePath . '/application/data/events.json';
		$allEvents = [];
		
		if(file_exists($eventsFile)){
			$allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
		}

		// Sort events by date (newest first)
		usort($allEvents, function($a, $b) {
			return strtotime($b['startDate'] ?? '1970-01-01') - strtotime($a['startDate'] ?? '1970-01-01');
		});

		$data = [
			'title' => 'Events Management - Dashboard',
			'page' => 'dashboard_events',
			'user_name' => $this->get_session('user_name') ?? 'Admin User',
			'events' => $allEvents
		];
        $this->view("dashboard/events", $data);
	}

	public function addEvent(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$title = $this->post('title');
			$description = $this->post('description');
			$date = $this->post('date');
			$time = $this->post('time');
			$location = $this->post('location');
			$image = $this->post('image');
			$startDate = $this->post('startDate');
			$endDate = $this->post('endDate');

			// Validation
			if(empty($title) || empty($description) || empty($date) || empty($location)){
				throw new Exception("Title, description, date, and location are required.");
			}

			// Generate event slug from title
			$slug = strtolower(trim($title));
			$slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
			$slug = trim($slug, '-');

			// Ensure unique slug
			$eventsFile = $this->basePath . '/application/data/events.json';
			$allEvents = [];
			if(file_exists($eventsFile)){
				$allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
			}

			$originalSlug = $slug;
			$counter = 1;
			while(in_array($slug, array_column($allEvents, 'slug'))){
				$slug = $originalSlug . '-' . $counter;
				$counter++;
			}

			// Create new event
			$newEvent = [
				'slug' => $slug,
				'title' => $title,
				'description' => $description,
				'date' => $date,
				'time' => $time ?? '',
				'location' => $location,
				'image' => $image ?? 'event-application-form.png',
				'startDate' => $startDate ?? date('Y-m-d\TH:i:s', strtotime($date . ' ' . ($time ?? '19:30:00'))),
				'endDate' => $endDate ?? date('Y-m-d\TH:i:s', strtotime($date . ' ' . ($time ?? '21:00:00'))),
				'visible' => true,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			];

			$allEvents[] = $newEvent;

			// Ensure data directory exists
			$dataDir = $this->basePath . '/application/data';
			if(!is_dir($dataDir)){
				mkdir($dataDir, 0755, true);
			}

			// Save events
			if(file_put_contents($eventsFile, json_encode($allEvents, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to save event.");
			}

			echo json_encode(['success' => true, 'message' => 'Event added successfully.', 'event' => $newEvent]);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function updateEvent(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$slug = $this->post('slug');
			$title = $this->post('title');
			$description = $this->post('description');
			$date = $this->post('date');
			$time = $this->post('time');
			$location = $this->post('location');
			$image = $this->post('image');
			$startDate = $this->post('startDate');
			$endDate = $this->post('endDate');

			if(empty($slug)){
				throw new Exception("Event slug required.");
			}

			// Validation
			if(empty($title) || empty($description) || empty($date) || empty($location)){
				throw new Exception("Title, description, date, and location are required.");
			}

			// Get events
			$eventsFile = $this->basePath . '/application/data/events.json';
			$allEvents = [];
			if(file_exists($eventsFile)){
				$allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
			}

			// Find and update event
			$eventFound = false;
			foreach($allEvents as &$event) {
				if($event['slug'] === $slug) {
					$event['title'] = $title;
					$event['description'] = $description;
					$event['date'] = $date;
					$event['time'] = $time ?? '';
					$event['location'] = $location;
					$event['image'] = $image ?? $event['image'] ?? 'event-application-form.png';
					$event['startDate'] = $startDate ?? date('Y-m-d\TH:i:s', strtotime($date . ' ' . ($time ?? '19:30:00')));
					$event['endDate'] = $endDate ?? date('Y-m-d\TH:i:s', strtotime($date . ' ' . ($time ?? '21:00:00')));
					$event['updated_at'] = date('Y-m-d H:i:s');
					$eventFound = true;
					break;
				}
			}
			unset($event);

			if(!$eventFound){
				throw new Exception("Event not found.");
			}

			// Save events
			if(file_put_contents($eventsFile, json_encode($allEvents, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to update event.");
			}

			echo json_encode(['success' => true, 'message' => 'Event updated successfully.']);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function deleteEvent(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$slug = $this->post('slug');

			if(empty($slug)){
				throw new Exception("Event slug required.");
			}

			// Get events
			$eventsFile = $this->basePath . '/application/data/events.json';
			$allEvents = [];
			if(file_exists($eventsFile)){
				$allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
			}

			// Remove event
			$allEvents = array_filter($allEvents, function($event) use ($slug) {
				return $event['slug'] !== $slug;
			});

			// Re-index array
			$allEvents = array_values($allEvents);

			// Save events
			if(file_put_contents($eventsFile, json_encode($allEvents, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to delete event.");
			}

			echo json_encode(['success' => true, 'message' => 'Event deleted successfully.']);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function toggleEventVisibility(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$slug = $this->post('slug');
			$visible = $this->post('visible') === 'true' || $this->post('visible') === true;

			if(empty($slug)){
				throw new Exception("Event slug required.");
			}

			// Get events
			$eventsFile = $this->basePath . '/application/data/events.json';
			$allEvents = [];
			if(file_exists($eventsFile)){
				$allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
			}

			// Find and update event visibility
			$eventFound = false;
			foreach($allEvents as &$event) {
				if($event['slug'] === $slug) {
					$event['visible'] = $visible;
					$event['updated_at'] = date('Y-m-d H:i:s');
					$eventFound = true;
					break;
				}
			}
			unset($event);

			if(!$eventFound){
				throw new Exception("Event not found.");
			}

			// Save events
			if(file_put_contents($eventsFile, json_encode($allEvents, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to update event visibility.");
			}

			echo json_encode(['success' => true, 'visible' => $visible, 'message' => $visible ? 'Event is now visible.' : 'Event is now hidden.']);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function uploadImage(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			// Check if file was uploaded
			if(!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK){
				throw new Exception("No file uploaded or upload error occurred.");
			}

			$file = $_FILES['image'];
			
			// Validate file size (5MB max)
			$maxSize = 5242880; // 5MB
			if($file['size'] > $maxSize){
				throw new Exception("File size exceeds maximum allowed (5MB).");
			}

			// Validate file type
			$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/avif'];
			$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'];
			
			// Get file extension
			$fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
			
			if(!in_array($fileExtension, $allowedExtensions)){
				throw new Exception("Invalid file type. Allowed: JPG, PNG, GIF, WebP, AVIF");
			}

			// Validate MIME type
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mimeType = finfo_file($finfo, $file['tmp_name']);
			finfo_close($finfo);
			
			if(!in_array($mimeType, $allowedTypes)){
				throw new Exception("Invalid file type detected.");
			}

			// Configure upload path
			$uploadPath = $this->basePath . '/public/images/';
			
			// Ensure upload directory exists
			if(!is_dir($uploadPath)){
				if(!mkdir($uploadPath, 0755, true)){
					throw new Exception("Failed to create upload directory.");
				}
			}

			// Validate upload path is within allowed directory
			$realBasePath = realpath($this->basePath . '/public');
			$realUploadPath = realpath($uploadPath);
			
			if($realBasePath === false || $realUploadPath === false){
				throw new Exception("Invalid upload path.");
			}
			
			// Check if upload path is within base path
			if(strpos($realUploadPath, $realBasePath) !== 0){
				throw new Exception("Upload path outside allowed directory.");
			}

			// Sanitize filename
			$originalName = pathinfo($file['name'], PATHINFO_FILENAME);
			$sanitizedName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $originalName);
			$sanitizedName = preg_replace("/\s+/", "_", $sanitizedName);
			
			// Generate unique filename with timestamp and random string
			$randomString = bin2hex(random_bytes(8));
			$filename = time() . '_' . $randomString . '_' . $sanitizedName . '.' . $fileExtension;
			
			// Full path to save file
			$fullPath = $uploadPath . $filename;
			
			// Move uploaded file
			if(!move_uploaded_file($file['tmp_name'], $fullPath)){
				throw new Exception("Failed to move uploaded file.");
			}

			// Set proper permissions
			chmod($fullPath, 0644);

			echo json_encode([
				'success' => true, 
				'message' => 'Image uploaded successfully.',
				'filename' => $filename,
				'url' => Base_URL . '/images/' . $filename
			]);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function addNewsletter(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$title = $this->post('title');
			$date = $this->post('date');
			$file = $this->post('file');
			$visible = $this->post('visible') === 'true' || $this->post('visible') === true;

			// Validation
			if(empty($title) || empty($date) || empty($file)){
				throw new Exception("Title, date, and file are required.");
			}

			// Get newsletters
			$newslettersFile = $this->basePath . '/application/data/newsletters.json';
			$allNewsletters = [];
			if(file_exists($newslettersFile)){
				$allNewsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
			}

			// Create new newsletter
			$newNewsletter = [
				'id' => uniqid('newsletter_'),
				'title' => $title,
				'date' => $date,
				'file' => $file,
				'visible' => $visible,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			];

			$allNewsletters[] = $newNewsletter;

			// Ensure data directory exists
			$dataDir = $this->basePath . '/application/data';
			if(!is_dir($dataDir)){
				mkdir($dataDir, 0755, true);
			}

			// Save newsletters
			if(file_put_contents($newslettersFile, json_encode($allNewsletters, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to save newsletter.");
			}

			echo json_encode(['success' => true, 'message' => 'Newsletter added successfully.', 'newsletter' => $newNewsletter]);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function updateNewsletter(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$id = $this->post('id');
			$title = $this->post('title');
			$date = $this->post('date');
			$file = $this->post('file');
			$visible = $this->post('visible') === 'true' || $this->post('visible') === true;

			if(empty($id)){
				throw new Exception("Newsletter ID required.");
			}

			// Validation
			if(empty($title) || empty($date) || empty($file)){
				throw new Exception("Title, date, and file are required.");
			}

			// Get newsletters
			$newslettersFile = $this->basePath . '/application/data/newsletters.json';
			$allNewsletters = [];
			if(file_exists($newslettersFile)){
				$allNewsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
			}

			// Find and update newsletter
			$newsletterFound = false;
			foreach($allNewsletters as &$newsletter) {
				if($newsletter['id'] === $id) {
					$newsletter['title'] = $title;
					$newsletter['date'] = $date;
					$newsletter['file'] = $file;
					$newsletter['visible'] = $visible;
					$newsletter['updated_at'] = date('Y-m-d H:i:s');
					$newsletterFound = true;
					break;
				}
			}
			unset($newsletter);

			if(!$newsletterFound){
				throw new Exception("Newsletter not found.");
			}

			// Save newsletters
			if(file_put_contents($newslettersFile, json_encode($allNewsletters, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to update newsletter.");
			}

			echo json_encode(['success' => true, 'message' => 'Newsletter updated successfully.']);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function deleteNewsletter(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$id = $this->post('id');

			if(empty($id)){
				throw new Exception("Newsletter ID required.");
			}

			// Get newsletters
			$newslettersFile = $this->basePath . '/application/data/newsletters.json';
			$allNewsletters = [];
			if(file_exists($newslettersFile)){
				$allNewsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
			}

			// Remove newsletter
			$allNewsletters = array_filter($allNewsletters, function($newsletter) use ($id) {
				return $newsletter['id'] !== $id;
			});

			// Re-index array
			$allNewsletters = array_values($allNewsletters);

			// Save newsletters
			if(file_put_contents($newslettersFile, json_encode($allNewsletters, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to delete newsletter.");
			}

			echo json_encode(['success' => true, 'message' => 'Newsletter deleted successfully.']);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function uploadNewsletter(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			// Check if file was uploaded
			if(!isset($_FILES['newsletter']) || $_FILES['newsletter']['error'] !== UPLOAD_ERR_OK){
				throw new Exception("No file uploaded or upload error occurred.");
			}

			$file = $_FILES['newsletter'];
			
			// Validate file size (10MB max for PDFs)
			$maxSize = 10485760; // 10MB
			if($file['size'] > $maxSize){
				throw new Exception("File size exceeds maximum allowed (10MB).");
			}

			// Validate file type (PDF and images)
			$allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/avif'];
			$allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'];
			
			// Get file extension
			$fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
			
			if(!in_array($fileExtension, $allowedExtensions)){
				throw new Exception("Invalid file type. Allowed: PDF, JPG, PNG, GIF, WebP, AVIF");
			}

			// Validate MIME type
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mimeType = finfo_file($finfo, $file['tmp_name']);
			finfo_close($finfo);
			
			if(!in_array($mimeType, $allowedTypes)){
				throw new Exception("Invalid file type detected.");
			}

			// Configure upload path
			$uploadPath = $this->basePath . '/public/newsletters/';
			
			// Ensure upload directory exists
			if(!is_dir($uploadPath)){
				if(!mkdir($uploadPath, 0755, true)){
					throw new Exception("Failed to create upload directory.");
				}
			}

			// Validate upload path is within allowed directory
			$realBasePath = realpath($this->basePath . '/public');
			$realUploadPath = realpath($uploadPath);
			
			if($realBasePath === false || $realUploadPath === false){
				throw new Exception("Invalid upload path.");
			}
			
			// Check if upload path is within base path
			if(strpos($realUploadPath, $realBasePath) !== 0){
				throw new Exception("Upload path outside allowed directory.");
			}

			// Sanitize filename
			$originalName = pathinfo($file['name'], PATHINFO_FILENAME);
			$sanitizedName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $originalName);
			$sanitizedName = preg_replace("/\s+/", "_", $sanitizedName);
			
			// Generate unique filename with timestamp and random string
			$randomString = bin2hex(random_bytes(8));
			$filename = time() . '_' . $randomString . '_' . $sanitizedName . '.' . $fileExtension;
			
			// Full path to save file
			$fullPath = $uploadPath . $filename;
			
			// Move uploaded file
			if(!move_uploaded_file($file['tmp_name'], $fullPath)){
				throw new Exception("Failed to move uploaded file.");
			}

			// Set proper permissions
			chmod($fullPath, 0644);

			echo json_encode([
				'success' => true, 
				'message' => 'Newsletter file uploaded successfully.',
				'filename' => $filename,
				'url' => Base_URL . '/newsletters/' . $filename
			]);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}

	public function toggleNewsletterVisibility(){
		header('Content-Type: application/json');
		
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			echo json_encode(['success' => false, 'message' => 'Unauthorized']);
			exit;
		}

		try {
			$this->validateCsrf();
			
			$id = $this->post('id');
			$visible = $this->post('visible') === 'true' || $this->post('visible') === true;

			if(empty($id)){
				throw new Exception("Newsletter ID required.");
			}

			// Get newsletters
			$newslettersFile = $this->basePath . '/application/data/newsletters.json';
			$allNewsletters = [];
			if(file_exists($newslettersFile)){
				$allNewsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
			}

			// Find and update newsletter visibility
			$newsletterFound = false;
			foreach($allNewsletters as &$newsletter) {
				if($newsletter['id'] === $id) {
					$newsletter['visible'] = $visible;
					$newsletter['updated_at'] = date('Y-m-d H:i:s');
					$newsletterFound = true;
					break;
				}
			}
			unset($newsletter);

			if(!$newsletterFound){
				throw new Exception("Newsletter not found.");
			}

			// Save newsletters
			if(file_put_contents($newslettersFile, json_encode($allNewsletters, JSON_PRETTY_PRINT)) === false){
				throw new Exception("Failed to update newsletter visibility.");
			}

			echo json_encode(['success' => true, 'visible' => $visible, 'message' => $visible ? 'Newsletter is now visible.' : 'Newsletter is now hidden.']);

		} catch (Exception $e) {
			http_response_code(400);
			echo json_encode(['success' => false, 'message' => $e->getMessage()]);
		}
		exit;
	}
}

?>
