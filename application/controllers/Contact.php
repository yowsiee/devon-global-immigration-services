<?php 

class Contact extends Controller {

	public function index(){
		$data = [
			'title' => 'Contact Us - Devon Global Immigration Services',
			'page' => 'contact',
			'seo' => [
				'title' => 'Contact Us - Devon Global Immigration Services | Free Consultation | DGIS',
				'description' => 'Contact Devon Global Immigration Services for expert immigration assistance. Get a free consultation for Canadian and US immigration services. Licensed RCIC consultants ready to help with your immigration journey.',
				'keywords' => 'contact immigration consultant, free immigration consultation, Canadian immigration help, immigration services Toronto, contact RCIC consultant, immigration questions, Devon Global Immigration Services, DGIS',
				'url' => Base_URL . '/contact',
				'image' => Base_URL . '/images/og-image.jpg'
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
			
			// Get form data
			$first_name = $this->post('first_name');
			$last_name = $this->post('last_name');
			$email = $this->post('email');
			$phone = $this->post('phone');
			$nationality = $this->post('nationality');
			$message = $this->post('message');
			
			// Basic validation
			if(empty($email) || empty($message)){
				throw new Exception("Please fill in all required fields (Email and Message are required).");
			}
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				throw new Exception("Please provide a valid email address.");
			}
			
			$subject = "Contact Form Submission - " . ($first_name ? $first_name . ' ' : '') . ($last_name ? $last_name : '');
			
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
				'title' => 'Contact Us - Devon Global Immigration Services',
				'page' => 'contact',
				'seo' => [
					'title' => 'Contact Us - Devon Global Immigration Services | Free Consultation | DGIS',
					'description' => 'Contact Devon Global Immigration Services for expert immigration assistance. Get a free consultation for Canadian and US immigration services.',
					'keywords' => 'contact immigration consultant, free immigration consultation, Canadian immigration help, immigration services Toronto, contact RCIC consultant, Devon Global Immigration Services, DGIS',
					'url' => Base_URL . '/contact',
					'image' => Base_URL . '/images/og-image.jpg'
				],
				'breadcrumbs' => [
					['name' => 'Home', 'url' => Base_URL],
					['name' => 'Contact', 'url' => Base_URL . '/contact']
				],
				'success' => true,
				'error' => null,
				'submitted_name' => ($first_name ? $first_name . ' ' : '') . ($last_name ? $last_name : 'Visitor')
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
				'title' => 'Contact Us - Devon Global Immigration Services',
				'page' => 'contact',
				'seo' => [
					'title' => 'Contact Us - Devon Global Immigration Services | Free Consultation | DGIS',
					'description' => 'Contact Devon Global Immigration Services for expert immigration assistance. Get a free consultation for Canadian and US immigration services.',
					'keywords' => 'contact immigration consultant, free immigration consultation, Canadian immigration help, immigration services Toronto, contact RCIC consultant, Devon Global Immigration Services, DGIS',
					'url' => Base_URL . '/contact',
					'image' => Base_URL . '/images/og-image.jpg'
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

