<?php 

require_once __DIR__ . '/../core/exceptions.php';

class Rout {

   /*
 
    * @Framework Name     : Lightweight
    * @Author Name        : Shakil Khan
    * @License            : MIT
    * @Version            : 1.0.0
    * @Description        : Rout class get the url, split the url & sanitize the url

   */

   private $Controller = Default_controller;
   private $Method     = Default_method;
   private $Param      = Default_param;
   private $basePath;

   public function __construct(){
     $this->basePath = dirname(dirname(__DIR__));
     
     try {
       $url = $this->Url();
       if(!empty($url)){

        $controllerPath = $this->basePath . "/application/controllers/" . $url[0] . ".php";
        
        if(file_exists($controllerPath)){
          $this->Controller = ucwords($url[0]);
          unset($url[0]);
        } else {
          throw new ControllerNotFoundException($url[0]);
        }

       } 

       /*
          @Include controller file
       */ 

       $controllerPath = $this->basePath . "/application/controllers/" . $this->Controller . ".php";
       require_once $controllerPath;

       /*
          @Instantiate Controller class
       */ 

       if(!class_exists($this->Controller)) {
         throw new ControllerNotFoundException($this->Controller);
       }

       $this->Controller = new $this->Controller;

       /*
           * Check method availability
       */ 

       if(isset($url[1]) && !empty($url[1])){

         if(method_exists($this->Controller, $url[1])){
           /*
              * Replace default method on url method
           */ 
           $this->Method = $url[1];
           /*
              * Remove method from url array
           */ 
           unset($url[1]);

         } else {
           // Check if __call magic method exists for handling dynamic methods (e.g., hyphenated URLs)
           if(method_exists($this->Controller, '__call')){
             $this->Method = $url[1];
             unset($url[1]);
           } else {
             throw new MethodNotFoundException($url[1]);
           }
         }

       }

       /*
          * Check Parameters availability
       */ 

       if(isset($url) && !empty($url)){
         // Re-index array and filter out empty values
         $this->Param = array_values(array_filter($url, function($value) {
           return !empty($value);
         }));
       } else {
         $this->Param = [];
       }

       call_user_func_array([$this->Controller, $this->Method], $this->Param);
       
     } catch (Exception $e) {
       $this->handleError($e);
     }
   }
   
   /**
    * Handle errors and exceptions
    */
   private function handleError(Exception $e): void {
     // Log error (in production, use proper logging)
     error_log("Lightweight Framework Error: " . $e->getMessage());
     
     // Show error page
     http_response_code(500);
     
     if (defined('DEBUG') && DEBUG === true) {
       // Development mode - show detailed error
       echo "<div style='background-color:#f8d7da;color:#721c24;border: 1px solid #f5c6cb;padding: 15px; border-radius: 4px; margin: 20px;'>";
       echo "<h3>Framework Error</h3>";
       echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
       echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . "</p>";
       echo "<p><strong>Line:</strong> " . $e->getLine() . "</p>";
       echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
       echo "</div>";
     } else {
       // Production mode - show generic error
       echo "<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px; margin: 20px;'>";
       echo "<h3>An error occurred</h3>";
       echo "<p>Please contact the administrator if this problem persists.</p>";
       echo "</div>";
     }
     
     exit;
   }

   public function Url(){

    if(isset($_GET['url'])){
       
       $url = $_GET['url'];
       /*
         * rtrim() method remove extra spaces from the right side
       */ 
       $url = rtrim($url);
       /*
          * FILTER_SANITIZE_URL remove all illegal characters from the url
       */ 
       $url = filter_var($url, FILTER_SANITIZE_URL);
       /*
          explode method split string on specific point
       */ 
       $url = explode("/", $url);
       return $url;

    }


   }

}



 ?>