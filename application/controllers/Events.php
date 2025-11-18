<?php 

class Events extends Controller {

    public function index() {
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
            'title' => 'Upcoming Events - Devon Global Immigration Services',
            'events' => $allEvents,
            'seo' => [
                'title' => 'Upcoming Events | Immigration Seminars & Workshops | DGIS',
                'description' => 'Join our upcoming immigration events and workshops. Learn about Canadian Permanent Residency, Express Entry pathway, and other immigration programs. Free online seminars available.',
                'keywords' => 'immigration events, Canadian immigration seminars, Express Entry workshop, permanent residency events, immigration webinars, free immigration consultation events, Devon Global Immigration Services',
                'url' => Base_URL . '/events',
                'image' => Base_URL . '/images/og-image.jpg'
            ],
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => Base_URL],
                ['name' => 'Events', 'url' => Base_URL . '/events']
            ]
        ];
        $this->view("events", $data);
    }

    // Handle event detail pages via __call magic method for hyphenated URLs
    public function __call($method, $args) {
        // Convert camelCase to hyphenated slug
        $slug = strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $method));
        
        // Try to find event by slug
        $eventsFile = $this->basePath . '/application/data/events.json';
        $allEvents = [];
        
        if(file_exists($eventsFile)){
            $allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
        }
        
        // Check if slug exists in events
        foreach($allEvents as $event) {
            if(isset($event['slug']) && $event['slug'] === $slug) {
                $this->showEventDetail($slug);
                return;
            }
        }
        
        // If event not found, redirect to events page
        header('Location: ' . Base_URL . '/events');
        exit;
    }
    
    private function showEventDetail($eventSlug) {
        // Get events from JSON file
        $eventsFile = $this->basePath . '/application/data/events.json';
        $allEvents = [];
        
        if(file_exists($eventsFile)){
            $allEvents = json_decode(file_get_contents($eventsFile), true) ?? [];
        }
        
        // Find event by slug
        $event = null;
        foreach($allEvents as $e) {
            if(isset($e['slug']) && $e['slug'] === $eventSlug) {
                $event = $e;
                break;
            }
        }
        
        if(!$event) {
            header('Location: ' . Base_URL . '/events');
            exit;
        }
        
        // Format date for display - keep original date and time separate for template
        // The template will format it appropriately
        
        $data = [
            'title' => $event['title'] . ' - Devon Global Immigration Services',
            'event' => $event,
            'seo' => [
                'title' => $event['title'] . ' | Immigration Event | DGIS',
                'description' => $event['description'],
                'keywords' => 'Express Entry, Canadian Permanent Residency, immigration event, immigration seminar, Express Entry pathway, CRS score, immigration workshop, Devon Global Immigration Services',
                'url' => Base_URL . '/events/' . $event['slug'],
                'image' => Base_URL . '/images/og-image.jpg'
            ],
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => Base_URL],
                ['name' => 'Events', 'url' => Base_URL . '/events'],
                ['name' => $event['title'], 'url' => Base_URL . '/events/' . $event['slug']]
            ]
        ];
        $this->view("event-detail", $data);
    }
}

?>

