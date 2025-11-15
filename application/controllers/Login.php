<?php 

class Login extends Lightweight {

	public function index(){
		// If already logged in, redirect to dashboard
		$user_id = $this->get_session('user_id');
		if(!empty($user_id)){
			header('Location: ' . Base_URL . '/dashboard');
			exit;
		}
		
		$data = [
			'title' => 'Login - Dev\'s Domain',
			'page' => 'login',
			'error' => null
		];
        $this->view("login", $data);
	}

	public function authenticate(){
		try {
			$this->validateCsrf();
			
			$email = $this->post('email');
			$password = $this->post('password');
			
			if(empty($email) || empty($password)){
				throw new Exception("Please fill in all fields.");
			}
			
			// Check credentials (for demo, using simple check)
			// In production, verify against database
			if($email === 'admin@devsdomain.com' && $password === 'admin123'){
				$this->set_session('user_id', 1);
				$this->set_session('user_name', 'admin');
				$this->set_session('user_email', $email);
				$this->set_session('user_role', 'admin');
				
				header('Location: ' . Base_URL . '/dashboard');
				exit;
			} else {
				throw new Exception("Invalid email or password.");
			}
			
		} catch (Exception $e) {
			$data = [
				'title' => 'Login - Dev\'s Domain',
				'page' => 'login',
				'error' => $e->getMessage()
			];
			$this->view("login", $data);
		}
	}

	public function logout(){
		session_destroy();
		header('Location: ' . Base_URL . '/login');
		exit;
	}
}

?>

