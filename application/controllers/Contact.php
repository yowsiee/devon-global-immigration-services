<?php 

class Contact extends Lightweight {

	public function index(){
		$data = [
			'title' => 'Contact - Get In Touch',
			'page' => 'contact',
			'seo' => [
				'title' => 'Contact Us - Get Free Quote | Dev\'s Domain',
				'description' => 'Contact Dev\'s Domain for professional IT solutions. Get a free quote for web development, mobile apps, API integrations, and business automation services. We respond within 24 hours.',
				'keywords' => 'contact Dev\'s Domain, IT services quote, web development consultation, Trinidad and Tobago IT services, get in touch',
				'url' => Base_URL . '/contact',
				'image' => Base_URL . '/images/og-contact.jpg'
			],
			'breadcrumbs' => [
				['name' => 'Home', 'url' => Base_URL],
				['name' => 'Contact', 'url' => Base_URL . '/contact']
			],
			'success' => false,
			'error' => null
		];
        $this->view("contact", $data);
	}

	public function submit(){
		// Check if it's an AJAX request (consultation modal)
		$isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
		$isAjax = $isAjax || (!empty($_POST['details'])); // Also check if details field exists (consultation form)
		
		try {
			// Validate CSRF token
			$this->validateCsrf();
			
			// Get form data (handle both regular contact form and consultation form)
			$first_name = $this->post('first_name');
			$last_name = $this->post('last_name');
			$email = $this->post('email');
			$phone = $this->post('phone');
			$company = $this->post('company');
			$website = $this->post('website');
			$subject = $this->post('subject');
			$message = $this->post('message');
			
			// Consultation form fields
			$service = $this->post('service');
			$budget = $this->post('budget');
			$timeline = $this->post('timeline');
			$details = $this->post('details');
			
			// If it's a consultation form, use details as message and build subject
			if(!empty($details)) {
				$message = $details;
				if(empty($subject)) {
					$subject = "Consultation Request";
					if(!empty($service)) {
						$subject .= " - " . $service;
					}
				}
				// Add consultation details to message
				$message = "Service Interest: " . ($service ?: 'Not specified') . "\n\n";
				$message .= "Project Budget: " . ($budget ?: 'Not specified') . "\n";
				$message .= "Project Timeline: " . ($timeline ?: 'Not specified') . "\n\n";
				$message .= "Project Details:\n" . $details;
			}
			
			// Basic validation
			if(empty($first_name) || empty($last_name) || empty($email) || empty($message)){
				throw new Exception("Please fill in all required fields.");
			}
			
			if(empty($subject)) {
				$subject = "Contact Form Submission";
			}
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				throw new Exception("Please provide a valid email address.");
			}
			
			// In a real application, you would:
			// 1. Save to database
			// 2. Send email notification
			// 3. Store in a log file
			
			// For now, we'll simulate success
			// You can add email functionality here using PHP's mail() or a library like PHPMailer
			
			// If AJAX request, return JSON
			if($isAjax) {
				header('Content-Type: application/json');
				echo json_encode([
					'success' => true,
					'message' => 'Thank you! Your consultation request has been submitted. We\'ll get back to you soon.',
					'submitted_name' => $first_name . ' ' . $last_name
				]);
				exit;
			}
			
			$data = [
				'title' => 'Contact - Get In Touch',
				'page' => 'contact',
				'seo' => [
					'title' => 'Contact Us - Get Free Quote | Dev\'s Domain',
					'description' => 'Contact Dev\'s Domain for professional IT solutions. Get a free quote for web development, mobile apps, API integrations, and business automation services.',
					'keywords' => 'contact Dev\'s Domain, IT services quote, web development consultation',
					'url' => Base_URL . '/contact',
					'image' => Base_URL . '/images/og-contact.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Contact', 'url' => Base_URL . '/contact']
				],
				'success' => true,
				'error' => null,
				'submitted_name' => $first_name . ' ' . $last_name
			];
			
			$this->view("contact", $data);
			
		} catch (Exception $e) {
			// If AJAX request, return JSON error
			if($isAjax) {
				header('Content-Type: application/json');
				http_response_code(400);
				echo json_encode([
					'success' => false,
					'message' => $e->getMessage()
				]);
				exit;
			}
			
			$data = [
				'title' => 'Contact - Get In Touch',
				'page' => 'contact',
				'seo' => [
					'title' => 'Contact Us - Get Free Quote | Dev\'s Domain',
					'description' => 'Contact Dev\'s Domain for professional IT solutions. Get a free quote for web development, mobile apps, API integrations, and business automation services.',
					'keywords' => 'contact Dev\'s Domain, IT services quote, web development consultation',
					'url' => Base_URL . '/contact',
					'image' => Base_URL . '/images/og-contact.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Contact', 'url' => Base_URL . '/contact']
				],
				'success' => false,
				'error' => $e->getMessage()
			];
			$this->view("contact", $data);
		}
	}
}

?>

