<?php 

class Newsletters extends Controller {

    public function index() {
        // Get newsletters from JSON file
        $newslettersFile = $this->basePath . '/application/data/newsletters.json';
        $allNewsletters = [];
        
        if(file_exists($newslettersFile)){
            $allNewsletters = json_decode(file_get_contents($newslettersFile), true) ?? [];
        }
        
        // Filter out hidden newsletters (only show visible newsletters on public page)
        $allNewsletters = array_filter($allNewsletters, function($newsletter) {
            return !isset($newsletter['visible']) || $newsletter['visible'] !== false;
        });
        
        // Sort newsletters by date (newest first)
        usort($allNewsletters, function($a, $b) {
            return strtotime($b['date'] ?? '1970-01-01') - strtotime($a['date'] ?? '1970-01-01');
        });
        
        // Get the latest newsletter for display
        $latestNewsletter = !empty($allNewsletters) ? $allNewsletters[0] : null;
        
        // Get previous newsletters (all except the latest)
        $previousNewsletters = array_slice($allNewsletters, 1);
        
        $data = [
            'title' => 'Newsletters - Devon Global Immigration Services',
            'latestNewsletter' => $latestNewsletter,
            'previousNewsletters' => $previousNewsletters,
            'seo' => [
                'title' => 'Monthly Immigration Newsletter | DGIS Newsletters | Devon Global Immigration Services',
                'description' => 'Stay updated with our monthly immigration newsletter. Get the latest immigration news, policy changes, visa updates, legal advice, and success stories. Sign up for our monthly newsletter.',
                'keywords' => 'immigration newsletter, monthly newsletter, immigration news, visa updates, immigration policy, Canadian immigration news, immigration resources, Devon Global Immigration Services, DGIS',
                'url' => Base_URL . '/newsletters',
                'image' => Base_URL . '/images/og-image.jpg'
            ],
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => Base_URL],
                ['name' => 'Newsletters', 'url' => Base_URL . '/newsletters']
            ]
        ];
        $this->view("newsletters", $data);
    }

    // Handle newsletter file downloads via __call magic method
    // This is called when URL is like: newsletters/filename.pdf
    public function __call($method, $args) {
        // If method is empty or 'index', it means we're accessing /newsletters/ (with trailing slash)
        // Redirect to index method
        if(empty($method) || $method === 'index'){
            $this->index();
            return;
        }
        // The method name will be the filename (e.g., "1763438327_70a7015c41e1ca43_January2024.pdf")
        // URL might be: newsletters/1763438327_70a7015c41e1ca43_January2024.pdf
        // The routing system splits by "/", so the filename might be in method or args
        
        // Try to get filename from method name first
        $filename = $method;
        
        // If method name looks like a filename (contains dot), use it
        // Otherwise, check args
        if(strpos($filename, '.') === false && !empty($args) && !empty($args[0])){
            $filename = $args[0];
        }
        
        // Decode URL-encoded filename
        $filename = urldecode($filename);
        
        // Sanitize filename to prevent directory traversal
        $filename = basename($filename);
        // Allow alphanumeric, dots, underscores, and hyphens
        $filename = preg_replace('/[^a-zA-Z0-9._-]/', '', $filename);
        
        // If filename is empty after sanitization, return 404
        if(empty($filename)){
            header('HTTP/1.0 404 Not Found');
            header('Content-Type: text/plain');
            echo 'Invalid filename.';
            exit;
        }
        
        // Path to newsletter file
        $filePath = $this->basePath . '/public/newsletters/' . $filename;
        
        // Debug: Log the file path (remove in production)
        // error_log("Newsletter file path: " . $filePath);
        
        // Check if file exists
        if(!file_exists($filePath) || !is_file($filePath)){
            header('HTTP/1.0 404 Not Found');
            header('Content-Type: text/plain');
            echo 'Newsletter file not found: ' . htmlspecialchars($filename);
            exit;
        }
        
        // Check if file is readable
        if(!is_readable($filePath)){
            header('HTTP/1.0 403 Forbidden');
            header('Content-Type: text/plain');
            echo 'Newsletter file is not readable.';
            exit;
        }
        
        // Get file extension to determine content type
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        // Set appropriate content type
        $contentTypes = [
            'pdf' => 'application/pdf',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'webp' => 'image/webp',
            'avif' => 'image/avif'
        ];
        
        $contentType = $contentTypes[$extension] ?? 'application/octet-stream';
        
        // Set headers
        header('Content-Type: ' . $contentType);
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($filePath));
        header('Cache-Control: public, max-age=3600');
        
        // Output file
        readfile($filePath);
        exit;
    }
}

?>

