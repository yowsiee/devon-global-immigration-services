<?php 

class Login extends Lightweight {

	private $usersFile;
	private $maxAttempts = 5;
	private $lockoutTime = 900; // 15 minutes in seconds

	public function __construct(){
		parent::__construct();
		$this->usersFile = $this->basePath . '/application/data/users.json';
	}

	public function index(){
		// If already logged in, redirect to dashboard
		$user_id = $this->get_session('user_id');
		if(!empty($user_id)){
			header('Location: ' . Base_URL . '/dashboard');
			exit;
		}
		
		$data = [
			'title' => 'Login - Devon Global Immigration Services',
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
			
			// Check rate limiting
			$this->checkRateLimit($email);
			
			// Load users
			$users = $this->loadUsers();
			
			// Find user by email
			$user = null;
			$userIndex = -1;
			foreach($users as $index => $u) {
				if($u['email'] === $email) {
					$user = $u;
					$userIndex = $index;
					break;
				}
			}
			
			if(!$user) {
				$this->recordFailedAttempt($email);
				throw new Exception("Invalid email or password.");
			}
			
			// Check if account is locked
			if(isset($user['locked_until']) && $user['locked_until'] !== null) {
				$lockedUntil = strtotime($user['locked_until']);
				if($lockedUntil > time()) {
					$remaining = ceil(($lockedUntil - time()) / 60);
					throw new Exception("Account is locked due to too many failed attempts. Please try again in {$remaining} minutes.");
				} else {
					// Lockout expired, reset
					$user['locked_until'] = null;
					$user['failed_attempts'] = 0;
				}
			}
			
			// Verify password
			if(!password_verify($password, $user['password_hash'])) {
				$this->recordFailedAttempt($email, $userIndex, $users);
				throw new Exception("Invalid email or password.");
			}
			
			// Successful login - reset failed attempts
			$user['failed_attempts'] = 0;
			$user['locked_until'] = null;
			$user['last_login'] = date('Y-m-d H:i:s');
			$users[$userIndex] = $user;
			$this->saveUsers($users);
			
			// Regenerate session ID to prevent session fixation
			session_regenerate_id(true);
			
			// Set session data
			$this->set_session('user_id', $user['id']);
			$this->set_session('user_name', $user['name']);
			$this->set_session('user_email', $user['email']);
			$this->set_session('user_role', $user['role']);
			$this->set_session('login_time', time());
			
			// Clear any rate limiting data
			$this->clearRateLimit($email);
			
			header('Location: ' . Base_URL . '/dashboard');
			exit;
			
		} catch (Exception $e) {
			$data = [
				'title' => 'Login - Devon Global Immigration Services',
				'page' => 'login',
				'error' => $e->getMessage()
			];
			$this->view("login", $data);
		}
	}

	private function loadUsers(){
		if(!file_exists($this->usersFile)){
			return [];
		}
		$content = file_get_contents($this->usersFile);
		return json_decode($content, true) ?? [];
	}

	private function saveUsers($users){
		$dataDir = dirname($this->usersFile);
		if(!is_dir($dataDir)){
			mkdir($dataDir, 0755, true);
		}
		file_put_contents($this->usersFile, json_encode($users, JSON_PRETTY_PRINT));
	}

	private function checkRateLimit($email){
		$rateLimitKey = 'login_attempts_' . md5($email);
		$attempts = $this->get_session($rateLimitKey);
		
		if($attempts && isset($attempts['count']) && isset($attempts['time'])) {
			// Check if attempts are within the time window (last 15 minutes)
			if(time() - $attempts['time'] < $this->lockoutTime) {
				if($attempts['count'] >= $this->maxAttempts) {
					$remaining = ceil(($this->lockoutTime - (time() - $attempts['time'])) / 60);
					throw new Exception("Too many login attempts. Please try again in {$remaining} minutes.");
				}
			} else {
				// Time window expired, reset
				$this->unset_session($rateLimitKey);
			}
		}
	}

	private function recordFailedAttempt($email, $userIndex = -1, &$users = null){
		$rateLimitKey = 'login_attempts_' . md5($email);
		$attempts = $this->get_session($rateLimitKey);
		
		if(!$attempts || !isset($attempts['time']) || time() - $attempts['time'] >= $this->lockoutTime) {
			$attempts = ['count' => 0, 'time' => time()];
		}
		
		$attempts['count']++;
		$this->set_session($rateLimitKey, $attempts);
		
		// Also update user record if found
		if($userIndex >= 0 && $users !== null) {
			$users[$userIndex]['failed_attempts'] = $attempts['count'];
			
			if($attempts['count'] >= $this->maxAttempts) {
				$users[$userIndex]['locked_until'] = date('Y-m-d H:i:s', time() + $this->lockoutTime);
			}
			
			$this->saveUsers($users);
		}
	}

	private function clearRateLimit($email){
		$rateLimitKey = 'login_attempts_' . md5($email);
		$this->unset_session($rateLimitKey);
	}

	public function logout(){
		// Regenerate session ID on logout
		session_regenerate_id(true);
		session_destroy();
		header('Location: ' . Base_URL . '/login');
		exit;
	}
}

?>

