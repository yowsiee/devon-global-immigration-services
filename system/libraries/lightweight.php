<?php 

require_once __DIR__ . '/../core/exceptions.php';
require_once __DIR__ . '/../core/security.php';

class Lightweight {

      use form_validation, files_upload, session;
      
      protected $basePath;
      
      public function __construct(){
        $this->basePath = dirname(dirname(__DIR__));
        $this->start();
        
        $autoloadPath = $this->basePath . "/application/config/autoload.php";
        if(file_exists($autoloadPath)){
          require_once $autoloadPath;
          $helpers = $autoload['helpers'];
          $this->helper($helpers);
        }
      }


      /*
          * Load View in the controller
      */ 
      public function view(string $view_name, array $data = []): void {
        $viewPath = $this->basePath . "/application/views/" . $view_name . ".php";
        
        if(file_exists($viewPath)){
          // Extract data array to variables for view
          extract($data);
          require_once $viewPath;
        } else {
          throw new ViewNotFoundException($view_name);
        }
      }
      

      /*
          * Load model in the controller
      */ 
      public function model(string $model_name) {
        $modelPath = $this->basePath . "/application/models/" . $model_name . ".php";
        
        if(file_exists($modelPath)){
          require_once $modelPath;
          $update_model_name = ucwords($model_name);
          
          if(!class_exists($update_model_name)) {
            throw new ModelNotFoundException($model_name);
          }
          
          return new $update_model_name;
        } else {
          throw new ModelNotFoundException($model_name);
        }
      }
    
      /*
         * Helper method check the helper availability
      */ 
      public function helper(array $helper_names): void {
        if(!empty($helper_names)){
          foreach($helper_names as $helper_name):
            $helperPath = $this->basePath . "/system/helpers/" . $helper_name . ".php";
            
            if(file_exists($helperPath)) {
              require_once $helperPath;
            } else {
              throw new HelperNotFoundException($helper_name);
            }
          endforeach;
        }
      }

      /*
        * Post function with XSS protection
      */ 

      public function post(string $field_name, bool $escape = true): ?string {
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
          throw new BadRequestException("Method must be POST");
        }
        
        if(!isset($_POST[$field_name])) {
          return null;
        }
        
        $value = trim($_POST[$field_name]);
        return $escape ? Security::escape($value) : Security::sanitize($value);
      }
      
     /*
         * GET function with XSS protection
     */ 
      public function get(string $field_name, bool $escape = true): ?string {
        if($_SERVER['REQUEST_METHOD'] !== 'GET'){
          throw new BadRequestException("Method must be GET");
        }
        
        if(!isset($_GET[$field_name])) {
          return null;
        }
        
        $value = trim($_GET[$field_name]);
        return $escape ? Security::escape($value) : Security::sanitize($value);
      }
      
      /**
       * Get raw POST data without escaping (use with caution)
       */
      public function postRaw(string $field_name): ?string {
        if($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST[$field_name])) {
          return null;
        }
        return $_POST[$field_name];
      }
      
      /**
       * Get raw GET data without escaping (use with caution)
       */
      public function getRaw(string $field_name): ?string {
        if($_SERVER['REQUEST_METHOD'] !== 'GET' || !isset($_GET[$field_name])) {
          return null;
        }
        return $_GET[$field_name];
      }
      
      /**
       * Validate CSRF token from POST request
       */
      public function validateCsrf(): bool {
        $token = $this->postRaw('csrf_token');
        if (!$token) {
          throw new CsrfTokenException("CSRF token not provided");
        }
        return Security::validateCsrfToken($token);
      }
      
      /**
       * Generate CSRF token field for forms
       */
      public function csrfField(): string {
        return Security::csrfField();
      }

      /*
          * URI Function with bounds checking
      */ 

      public function uri(int $segment): ?string {
        if(!isset($_GET['url'])){
          return null;
        }
       
        $url = $_GET['url'];
        $url = rtrim($url);
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", $url);
        
        // Remove empty segments
        $url = array_filter($url, function($segment) {
          return !empty($segment);
        });
        $url = array_values($url);
        
        if(isset($url[$segment])) {
          return $url[$segment];
        }
        
        return null;
      }

    






 }


 ?>