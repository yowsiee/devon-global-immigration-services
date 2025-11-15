<?php 

class Services extends Lightweight {

	public function index(){
		// Get services from JSON file
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

		// Convert to array format and apply visibility
		$servicesArray = [];
		foreach($allServices as $key => $service) {
			$service['key'] = $key;
			$service['visible'] = isset($visibility[$key]) ? (bool)$visibility[$key] : (isset($service['visible']) ? (bool)$service['visible'] : true);
			$servicesArray[] = $service;
		}

		// Filter only visible services
		$visibleServices = array_filter($servicesArray, function($service) {
			return $service['visible'] === true;
		});

		// Remove the 'visible' field but keep 'key' for service URLs
		$services = array_map(function($service) {
			unset($service['visible']);
			if(isset($service['created_at'])) unset($service['created_at']);
			if(isset($service['updated_at'])) unset($service['updated_at']);
			return $service;
		}, $visibleServices);

		$data = [
			'title' => 'Services - Dev\'s Domain',
			'page' => 'services',
			'seo' => [
				'title' => 'IT Services - Web Development, Mobile Apps & Business Automation | Dev\'s Domain',
				'description' => 'Professional IT services including custom web development, mobile app development, API integrations, and business process automation. Transform your business with our expert solutions.',
				'keywords' => 'web development services, mobile app development, API integration services, business process automation, PowerApps, LogicApps, custom software development',
				'url' => Base_URL . '/services',
				'image' => Base_URL . '/images/og-services.jpg'
			],
			'breadcrumbs' => [
				['name' => 'Home', 'url' => Base_URL],
				['name' => 'Services', 'url' => Base_URL . '/services']
			],
			'services' => array_values($services),
			'benefits' => [
				[
					'icon' => '🚀',
					'iconColor' => 'icon-purple',
					'title' => 'Fast Delivery',
					'description' => 'Quick turnaround times without compromising quality.'
				],
				[
					'icon' => '🔒',
					'iconColor' => 'icon-pink',
					'title' => 'Secure & Reliable',
					'description' => 'Enterprise-grade security and 99.9% uptime guarantee.'
				],
				[
					'icon' => '👥',
					'iconColor' => 'icon-blue',
					'title' => 'Expert Team',
					'description' => 'Experienced developers and consultants.'
				],
				[
					'icon' => '🎧',
					'iconColor' => 'icon-green',
					'title' => '24/7 Support',
					'description' => 'Ongoing support and maintenance services.'
				]
			]
		];
        $this->view("services", $data);
	}

	// Handle service detail pages via __call magic method for hyphenated URLs
	public function __call($method, $args){
		// Convert camelCase to hyphenated slug
		$slug = strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $method));
		
		// Handle known service slugs
		if($slug === 'web-development' || $method === 'webDevelopment' || $method === 'web-development'){
			$this->showServiceDetail('web-development');
			return;
		}
		
		if($slug === 'application-support-maintenance' || $method === 'applicationSupportMaintenance' || $method === 'application-support-maintenance'){
			$this->showServiceDetail('application-support-maintenance');
			return;
		}
		
		// If service not found, redirect to services page
		header('Location: ' . Base_URL . '/services');
		exit;
	}
	
	private function showServiceDetail($serviceSlug){
		// Handle service slug
		if($serviceSlug === 'web-development'){
			$data = [
				'title' => 'Web Development Services - Dev\'s Domain',
				'page' => 'services',
				'seo' => [
					'title' => 'Web Development Services - Custom Websites & Web Applications | Dev\'s Domain',
					'description' => 'Professional web development services including custom websites, web applications, e-commerce platforms, and corporate sites. Modern, responsive, and SEO-optimized solutions that drive growth.',
					'keywords' => 'web development, custom websites, web applications, e-commerce development, responsive design, SEO optimization, PHP development, React development',
					'url' => Base_URL . '/services/web-development',
					'image' => Base_URL . '/images/og-web-development.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Services', 'url' => Base_URL . '/services'],
					['name' => 'Web Development', 'url' => Base_URL . '/services/web-development']
				]
			];
			$this->view("service-web-development", $data);
			return;
		}
		
		if($serviceSlug === 'application-support-maintenance'){
			$data = [
				'title' => 'Application Support & Maintenance - Dev\'s Domain',
				'page' => 'services',
				'seo' => [
					'title' => 'Application Support & Maintenance Services | Dev\'s Domain',
					'description' => 'Comprehensive application support and maintenance services. Website care plans, ongoing support, managed web services, system administration, and DevOps maintenance. Keep your applications running smoothly.',
					'keywords' => 'application support, website maintenance, managed web services, system administration, DevOps, website care plans, ongoing support, Trinidad and Tobago',
					'url' => Base_URL . '/services/application-support-maintenance',
					'image' => Base_URL . '/images/og-support-maintenance.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Services', 'url' => Base_URL . '/services'],
					['name' => 'Application Support & Maintenance', 'url' => Base_URL . '/services/application-support-maintenance']
				]
			];
			$this->view("service-application-support-maintenance", $data);
			return;
		}
		
		// If service not found, redirect to services page
		header('Location: ' . Base_URL . '/services');
		exit;
	}
}

?>