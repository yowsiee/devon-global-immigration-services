<?php 

class Sitemap extends Lightweight {

	public function index(){
		// Clear any previous output
		if (ob_get_level()) {
			ob_end_clean();
		}
		
		header('Content-Type: application/xml; charset=utf-8');
		
		$baseUrl = Base_URL;
		$currentDate = date('Y-m-d');
		
		// Get visible services
		$visibilityFile = $this->basePath . '/application/data/services_visibility.json';
		$visibility = [];
		if(file_exists($visibilityFile)){
			$visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
		}
		
		$servicesVisible = true;
		foreach(['web_development', 'app_development', 'api_development', 'business_automation'] as $key) {
			if(isset($visibility[$key]) && !$visibility[$key]) {
				$servicesVisible = false;
				break;
			}
		}
		
		$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
		$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
		$xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
		$xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
		$xml .= '        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";
		
		// Homepage
		$xml .= '  <url>' . "\n";
		$xml .= '    <loc>' . htmlspecialchars($baseUrl, ENT_XML1, 'UTF-8') . '</loc>' . "\n";
		$xml .= '    <lastmod>' . $currentDate . '</lastmod>' . "\n";
		$xml .= '    <changefreq>weekly</changefreq>' . "\n";
		$xml .= '    <priority>1.0</priority>' . "\n";
		$xml .= '  </url>' . "\n";
		
		// About page
		$xml .= '  <url>' . "\n";
		$xml .= '    <loc>' . htmlspecialchars($baseUrl . '/about', ENT_XML1, 'UTF-8') . '</loc>' . "\n";
		$xml .= '    <lastmod>' . $currentDate . '</lastmod>' . "\n";
		$xml .= '    <changefreq>monthly</changefreq>' . "\n";
		$xml .= '    <priority>0.8</priority>' . "\n";
		$xml .= '  </url>' . "\n";
		
		// Services page
		if($servicesVisible) {
			$xml .= '  <url>' . "\n";
			$xml .= '    <loc>' . htmlspecialchars($baseUrl . '/services', ENT_XML1, 'UTF-8') . '</loc>' . "\n";
			$xml .= '    <lastmod>' . $currentDate . '</lastmod>' . "\n";
			$xml .= '    <changefreq>weekly</changefreq>' . "\n";
			$xml .= '    <priority>0.9</priority>' . "\n";
			$xml .= '  </url>' . "\n";
		}
		
		// Portfolio page
		$xml .= '  <url>' . "\n";
		$xml .= '    <loc>' . htmlspecialchars($baseUrl . '/portfolio', ENT_XML1, 'UTF-8') . '</loc>' . "\n";
		$xml .= '    <lastmod>' . $currentDate . '</lastmod>' . "\n";
		$xml .= '    <changefreq>weekly</changefreq>' . "\n";
		$xml .= '    <priority>0.8</priority>' . "\n";
		$xml .= '  </url>' . "\n";
		
		// Contact page
		$xml .= '  <url>' . "\n";
		$xml .= '    <loc>' . htmlspecialchars($baseUrl . '/contact', ENT_XML1, 'UTF-8') . '</loc>' . "\n";
		$xml .= '    <lastmod>' . $currentDate . '</lastmod>' . "\n";
		$xml .= '    <changefreq>monthly</changefreq>' . "\n";
		$xml .= '    <priority>0.7</priority>' . "\n";
		$xml .= '  </url>' . "\n";
		
		$xml .= '</urlset>';
		
		echo $xml;
		exit;
	}
}

?>

