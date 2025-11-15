<?php 

require_once __DIR__ . '/../core/exceptions.php';

/**
 * Session library with secure configuration
 */
trait Session {

    public function start(){
        /*
           * Start session with secure configuration
        */ 
        
        // Set secure session parameters
        ini_set('session.cookie_httponly', '1');
        ini_set('session.cookie_secure', isset($_SERVER['HTTPS']) ? '1' : '0');
        ini_set('session.use_only_cookies', '1');
        ini_set('session.cookie_samesite', 'Strict');
        
        // Set session timeout (30 minutes)
        ini_set('session.gc_maxlifetime', 1800);
        
        // Prevent session fixation
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
            
            // Regenerate session ID periodically to prevent fixation
            if (!isset($_SESSION['created'])) {
                session_regenerate_id(true);
                $_SESSION['created'] = time();
            } else if ($_SESSION['created'] < time() - 1800) {
                // Regenerate every 30 minutes
                session_regenerate_id(true);
                $_SESSION['created'] = time();
            }
        }
    }

    public function set_session($name, $value = ''){
        /*
            * Set session data
        */ 
        if(!empty($name)){
            if(is_array($name) && empty($value)){
                foreach($name as $key => $session_name):
                  $_SESSION[$key] = $session_name;
                endforeach;
            } else if(!is_array($name) && !empty($value)){
                $_SESSION[$name] = $value;
            }
        }

    }

    public function get_session($name){
        /*
            * Fetch session data
        */ 
        if(!empty($name)){
            return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
        }
        return null;
    }

    public function set_flash($name, $message){
        /*
             * Set the flash message
        */ 

        if(!empty($name) && !empty($message)){
            $_SESSION[$name] = $message;
        }
    }

    public function flash($name, $class = ""){
        if(!empty($name) && isset($_SESSION[$name])){
            echo "<div class='". $class ."'>" . $_SESSION[$name] . "</div>";
            unset($_SESSION[$name]);
        }
    }

    public function unset_session($name){

        /*
           * Unset session data
        */ 

        if(!empty($name)){

            if(is_array($name)){
                foreach($name as $key):
                   unset($_SESSION[$key]);
                endforeach;
            } else {
               unset($_SESSION[$name]);
            }
        }


    }

    public function destroy_session(){
       /*
           * Destroy whole session
       */ 
        session_destroy();
    }





}


 ?>