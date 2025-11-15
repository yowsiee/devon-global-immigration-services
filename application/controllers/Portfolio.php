<?php 

class Portfolio extends Lightweight {

	public function index(){
		// Get portfolio items from JSON file
		$portfolioFile = $this->basePath . '/application/data/portfolio.json';
		$allPortfolio = [];
		
		if(file_exists($portfolioFile)){
			$allPortfolio = json_decode(file_get_contents($portfolioFile), true) ?? [];
		}

		// Get visibility settings
		$visibilityFile = $this->basePath . '/application/data/portfolio_visibility.json';
		$visibility = [];
		if(file_exists($visibilityFile)){
			$visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
		}

		// Get section visibility settings
		$settingsFile = $this->basePath . '/application/data/section_settings.json';
		$sectionSettings = [
			'show_featured_categories' => true,
			'show_featured_projects' => true,
			'show_github_portfolio' => true
		];
		if(file_exists($settingsFile)){
			$loadedSettings = json_decode(file_get_contents($settingsFile), true) ?? [];
			$sectionSettings = array_merge($sectionSettings, $loadedSettings);
		}

		// Separate portfolio items by type and filter by visibility
		$categories = [];
		$featured_projects = [];
		$github_repos = [];

		foreach($allPortfolio as $key => $item) {
			$isVisible = isset($visibility[$key]) ? (bool)$visibility[$key] : (isset($item['visible']) ? (bool)$item['visible'] : true);
			
			if(!$isVisible) {
				continue; // Skip hidden items
			}

			$itemType = $item['type'] ?? 'unknown';
			
			if($itemType === 'category') {
				$categories[] = $item;
			} elseif($itemType === 'featured_project') {
				$featured_projects[] = $item;
			} elseif($itemType === 'github_repo') {
				$github_repos[] = $item;
			}
		}

		$data = [
			'title' => 'Portfolio - Dev\'s Domain',
			'page' => 'portfolio',
			'seo' => [
				'title' => 'Portfolio - Our Projects & Case Studies | Dev\'s Domain',
				'description' => 'Explore our portfolio of successful projects including website development, process automation, API integrations, and business intelligence solutions. See how we\'ve helped businesses transform digitally.',
				'keywords' => 'portfolio, web development projects, case studies, IT solutions portfolio, business automation projects, API integration examples',
				'url' => Base_URL . '/portfolio',
				'image' => Base_URL . '/images/og-portfolio.jpg'
			],
			'breadcrumbs' => [
				['name' => 'Home', 'url' => Base_URL],
				['name' => 'Portfolio', 'url' => Base_URL . '/portfolio']
			],
			'categories' => $categories,
			'featured_projects' => $featured_projects,
			'github_repos' => $github_repos,
			'section_settings' => $sectionSettings
		];
        $this->view("portfolio", $data);
	}
}

?>

