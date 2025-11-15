<?php 

class Dashboard extends Lightweight {

	public function index(){
		// Check if user is logged in
		$user_id = $this->get_session('user_id');
		if(empty($user_id)){
			header('Location: ' . Base_URL . '/login');
			exit;
		}
		
		$data = [
			'title' => 'Dashboard - Dev\'s Domain',
			'page' => 'dashboard',
			'user_name' => $this->get_session('user_name') ?? 'Admin User',
			'stats' => [
				'total_projects' => 7,
				'active_announcements' => 3,
				'active_services' => 3,
				'active_ads' => 4
			],
			'recent_activity' => [
				['type' => 'project', 'message' => 'New project created', 'time' => '2 hours ago'],
				['type' => 'announcement', 'message' => 'Announcement published', 'time' => '5 hours ago'],
				['type' => 'service', 'message' => 'Service updated', 'time' => '1 day ago'],
				['type' => 'ad', 'message' => 'New ad campaign', 'time' => '2 days ago']
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
}

?>
