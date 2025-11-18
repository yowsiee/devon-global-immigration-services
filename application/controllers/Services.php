<?php 

class Services extends Lightweight {

	public function index(){
		$data = [
			'title' => 'Services - Devon Global Immigration Services',
			'page' => 'services',
			'seo' => [
				'title' => 'Immigration & Recruitment Services | Canadian Immigration | Global Services | DGIS',
				'description' => 'Comprehensive immigration and recruitment services including Canadian immigration, global temporary resident services, citizenship by investment, job opportunities, and global recruitment. Licensed RCIC consultants in Toronto.',
				'keywords' => 'Canadian immigration, global temporary resident services, citizenship by investment, job opportunities, global recruitment, immigration consultant Toronto, RCIC consultant, work permits, study permits, visa services, Devon Global Immigration Services, DGIS',
				'url' => Base_URL . '/services',
				'image' => Base_URL . '/images/og-image.jpg'
			],
			'breadcrumbs' => [
				['name' => 'Home', 'url' => Base_URL],
				['name' => 'Services', 'url' => Base_URL . '/services']
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
		
		if($slug === 'citizenship-by-investment' || $method === 'citizenshipByInvestment' || $method === 'citizenship-by-investment'){
			$this->showServiceDetail('citizenship-by-investment');
			return;
		}
		
		if($slug === 'global-temporary-resident' || $slug === 'global-temporary-resident-services' || $method === 'globalTemporaryResident' || $method === 'globalTemporaryResidentServices'){
			$this->showServiceDetail('global-temporary-resident');
			return;
		}
		
		if($slug === 'job-opportunities' || $slug === 'job-opportunity' || $method === 'jobOpportunities' || $method === 'jobOpportunity'){
			$this->showServiceDetail('job-opportunities');
			return;
		}
		
		if($slug === 'canadian-immigration' || $slug === 'canadian-immigration-services' || $method === 'canadianImmigration' || $method === 'canadianImmigrationServices'){
			$this->showServiceDetail('canadian-immigration');
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
		
		if($serviceSlug === 'citizenship-by-investment'){
			$data = [
				'title' => 'Citizenship by Investment - Devon Global Immigration Services',
				'page' => 'services',
				'seo' => [
					'title' => 'Citizenship by Investment Programs | Caribbean Citizenship | DGIS',
					'description' => 'Expert guidance on citizenship-by-investment programs in Antigua and Barbuda, Dominica, Grenada, St. Kitts and Nevis, and St. Lucia. Investment pathways starting from $100,000 USD with visa-free access to 144-157 countries.',
					'keywords' => 'citizenship by investment, economic citizenship, Caribbean citizenship, Antigua and Barbuda citizenship, Dominica citizenship, Grenada citizenship, St. Kitts and Nevis citizenship, St. Lucia citizenship, investment immigration, second passport, visa-free travel, Devon Global Immigration Services',
					'url' => Base_URL . '/services/citizenship-by-investment',
					'image' => Base_URL . '/images/og-image.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Services', 'url' => Base_URL . '/services'],
					['name' => 'Citizenship by Investment', 'url' => Base_URL . '/services/citizenship-by-investment']
				]
			];
			$this->view("service-citizenship-by-investment", $data);
			return;
		}
		
		if($serviceSlug === 'global-temporary-resident'){
			$data = [
				'title' => 'Global Temporary Resident Services - Devon Global Immigration Services',
				'page' => 'services',
				'seo' => [
					'title' => 'Global Temporary Visa Services | Tourist & Business Visas | DGIS',
					'description' => 'Expert assistance with temporary resident visas, tourist visas, business visas, and Electronic Travel Authorization documents for countries around the world. Professional guidance for all your temporary travel needs.',
					'keywords' => 'temporary visa services, tourist visa, business visa, Electronic Travel Authorization, ETA, temporary resident visa, travel documents, visa application, global visa services, immigration consultant, Devon Global Immigration Services',
					'url' => Base_URL . '/services/global-temporary-resident',
					'image' => Base_URL . '/images/og-image.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Services', 'url' => Base_URL . '/services'],
					['name' => 'Global Temporary Resident Services', 'url' => Base_URL . '/services/global-temporary-resident']
				]
			];
			$this->view("service-global-temporary-resident", $data);
			return;
		}
		
		if($serviceSlug === 'job-opportunities'){
			$data = [
				'title' => 'Job Opportunities - Devon Global Immigration Services',
				'page' => 'services',
				'seo' => [
					'title' => 'Job Opportunities | US J1 Visa Program | Work in America | DGIS',
					'description' => 'Explore J1 visa opportunities in the United States including Culinary Arts, Food and Beverage, Rooms Division, and Teaching positions. Apply for exciting work opportunities in America through the J1 exchange visitor program.',
					'keywords' => 'job opportunities, J1 visa, J1 opportunities, US work visa, J1 program, exchange visitor program, culinary arts jobs USA, hospitality jobs USA, teaching jobs USA, work in America, J1 visa application, Devon Global Immigration Services',
					'url' => Base_URL . '/services/job-opportunities',
					'image' => Base_URL . '/images/og-image.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Services', 'url' => Base_URL . '/services'],
					['name' => 'Job Opportunities', 'url' => Base_URL . '/services/job-opportunities']
				]
			];
			$this->view("service-job-opportunities", $data);
			return;
		}
		
		if($serviceSlug === 'canadian-immigration'){
			$data = [
				'title' => 'Canadian Immigration Services - Devon Global Immigration Services',
				'page' => 'services',
				'seo' => [
					'title' => 'Canadian Immigration Services | Work Permits | Express Entry | RCIC Consultants | DGIS',
					'description' => 'Comprehensive Canadian immigration services including work permits, express entry, family sponsorship, business immigration, permanent residence, and visa services. Licensed RCIC consultants in Toronto.',
					'keywords' => 'Canadian immigration, work permits, express entry, business immigration, family sponsorship, permanent residence, study permits, RCIC consultant, immigration services Toronto, Devon Global Immigration Services',
					'url' => Base_URL . '/services/canadian-immigration',
					'image' => Base_URL . '/images/og-image.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Services', 'url' => Base_URL . '/services'],
					['name' => 'Canadian Immigration', 'url' => Base_URL . '/services/canadian-immigration']
				]
			];
			$this->view("service-canadian-immigration", $data);
			return;
		}
		
		// If service not found, redirect to services page
		header('Location: ' . Base_URL . '/services');
		exit;
	}
}

?>