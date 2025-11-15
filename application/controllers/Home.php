<?php 

class Home extends Lightweight {

	public function index(){
		// Get visible services for homepage display
		$servicesFile = $this->basePath . '/application/data/services.json';
		$allServices = [];
		
		if(file_exists($servicesFile)){
			$allServices = json_decode(file_get_contents($servicesFile), true) ?? [];
		}

		// Get services visibility settings
		$visibilityFile = $this->basePath . '/application/data/services_visibility.json';
		$visibility = [];
		
		if(file_exists($visibilityFile)){
			$visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
		}

		// Filter only visible services and limit to 6 for homepage
		$visibleServices = [];
		$count = 0;
		foreach($allServices as $key => $service) {
			$isVisible = isset($visibility[$key]) ? (bool)$visibility[$key] : (isset($service['visible']) ? (bool)$service['visible'] : true);
			if($isVisible && $count < 6) {
				$visibleServices[] = $service;
				$count++;
			}
		}

		$data = [
			'title' => 'Home - IT Services',
			'page' => 'home',
			'seo' => [
				'title' => 'Dev\'s Domain - Professional Web Development & IT Solutions | Trinidad & Tobago',
				'description' => 'Leading IT solutions provider in Trinidad & Tobago. Expert web development, mobile apps, API integrations, and business automation services. Transform your business with cutting-edge technology solutions.',
				'keywords' => 'web development Trinidad, mobile app development, IT services Trinidad and Tobago, API integration, business automation, PowerApps, LogicApps, custom software development, web design, e-commerce development',
				'url' => Base_URL,
				'image' => Base_URL . '/images/og-home.jpg'
			],
			'breadcrumbs' => [
				['name' => 'Home', 'url' => Base_URL]
			],
			'services' => $visibleServices
		];
        $this->view("home", $data);
	}
}

?>

