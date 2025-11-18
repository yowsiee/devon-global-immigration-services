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
		
		$servicesFile = $this->basePath . '/application/data/services.json';
		$services = [];
		if(file_exists($servicesFile)){
			$services = json_decode(file_get_contents($servicesFile), true) ?? [];
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
				'active_services' => count($services),
				'total_services' => 5 // Main services: Canadian Immigration, Global Temporary Resident, Citizenship by Investment, Job Opportunities, Global Recruitment
			],
			'recent_activity' => [
				['type' => 'event', 'message' => 'New event added', 'time' => '2 hours ago'],
				['type' => 'service', 'message' => 'Service updated', 'time' => '5 hours ago'],
				['type' => 'event', 'message' => 'Event published', 'time' => '1 day ago'],
				['type' => 'service', 'message' => 'Service visibility changed', 'time' => '2 days ago']
			]
		];
        $this->view("dashboard", $data);
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
}

?>
