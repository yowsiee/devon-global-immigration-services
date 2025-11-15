<?php 

require_once __DIR__ . '/../core/exceptions.php';
require_once __DIR__ . '/../core/security.php';

trait form_validation {

    public $errors = [];

    public function validation(string $field_name, string $label, string $rules): void {

        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
            if(!isset($_POST[$field_name])) {
                $data = '';
            } else {
                $data = trim($_POST[$field_name]);
            }
        } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] =="get"){
            if(!isset($_GET[$field_name])) {
                $data = '';
            } else {
                $data = trim($_GET[$field_name]);
            }
        } else {
            $data = '';
        }
        $pattern = "/^[a-zA-Z ]+$/";
        $int_pattern = "/^[0-9]+$/";
        $rulesArray = explode("|", $rules);
        
        if(in_array("required", $rulesArray)){
            /*
                 * if value is empty
            */ 
            if(empty($data)){
                 $this->errors[$field_name] = $label. " is required";
                 return;
            }
        }

        /*
             * value must be alphabetic character
        */ 
        if(in_array("not_int", $rulesArray)){
            if(!preg_match($pattern, $data)){
               $this->errors[$field_name] = $label . " must be alphabetic character";
               return;
            }
        }

        /*
           * value must be integer
        */ 
        if(in_array("int", $rulesArray)){
            if(!preg_match($int_pattern, $data)){
                $this->errors[$field_name] = $label . " must be integer";
                return;
            }
        }

        /*
            * Check minimum length
        */ 

        if(in_array("min_len", $rulesArray)){
            /*
                * Get the index of min_len rule
            */ 
            $min_len_index = array_search("min_len", $rulesArray);
            /*
                * Get the index of min_len rule value
            */ 
            $min_len_value_index = $min_len_index + 1;
            /*
                * Get the value of min_len rule
            */ 
            if(isset($rulesArray[$min_len_value_index])) {
                $min_len_value = (int)$rulesArray[$min_len_value_index];
                if(strlen($data) < $min_len_value){
                    $this->errors[$field_name] = $label . " is less than " . $min_len_value . " characters";
                    return;
                }
            }
        }

         /*
            * Check maximum length
        */ 

        if(in_array("max_len", $rulesArray)){
            /*
                * Get the index of max_len rule
            */ 
            $max_len_index = array_search("max_len", $rulesArray);
            /*
                * Get the index of max_len rule value
            */ 
            $max_len_value_index = $max_len_index + 1;
            /*
                * Get the value of max_len rule
            */ 
            if(isset($rulesArray[$max_len_value_index])) {
                $max_len_value = (int)$rulesArray[$max_len_value_index];
                if(strlen($data) > $max_len_value){
                    $this->errors[$field_name] = $label . " is greater than " . $max_len_value . " characters";
                    return;
                }
            }
        }

        /*
            * Confirm password rule
        */ 

        if(in_array("confirm", $rulesArray)){
            /*
                * Get the index of confirm rule
            */ 
            $confirm_rule_index = array_search("confirm", $rulesArray);
            /*
                * Get the index of password 
            */ 
            $confirm_password_index = $confirm_rule_index + 1;
            /*
                * Get the password name
            */ 
            if(isset($rulesArray[$confirm_password_index])) {
                $confirm_rule_password = $rulesArray[$confirm_password_index];
                if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
                    /*
                    * Get the password value
                */ 
                    $password = isset($_POST[$confirm_rule_password]) ? trim($_POST[$confirm_rule_password]) : '';
                } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] =="get"){
                     /*
                        * Get the password value
                    */ 
                    $password = isset($_GET[$confirm_rule_password]) ? trim($_GET[$confirm_rule_password]) : '';
                } else {
                    $password = '';
                }
               
               if($data !== $password){
                $this->errors[$field_name] = $label . " is not matched";
                return;
               }
            }
        }

        /*
           * Check the email availability
        */ 

        if(in_array("unique", $rulesArray)){
            /*
                 * Get the index of unique rule
            */ 
            $unique_index = array_search("unique", $rulesArray);
            /*
                * Get the index of table name
            */ 
            $table_index = $unique_index + 1;

            /*
                * Get table name
            */ 
            if(isset($rulesArray[$table_index])) {
                $table_name = $rulesArray[$table_index];

                /*
                    * Include the database file 
                */ 

                require_once __DIR__ . "/database.php";

                try {
                    $db = new Database;
                    if($db->Select_Where($table_name, [$field_name => $data])){
                        if($db->Count() > 0){
                            $this->errors[$field_name] = $label . " already exists";
                            return;
                        }
                    }
                } catch (Exception $e) {
                    // Database error - don't fail validation, just log
                    error_log("Validation database error: " . $e->getMessage());
                }
            }
        }
   
    }

    public function run(): bool {
        return empty($this->errors);
    }

    /*
          * Set form values
    */ 

   public function set_value(string $field_name, bool $escape = true): ?string {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
            if(isset($_POST[$field_name])){
                return $escape ? Security::escape($_POST[$field_name]) : $_POST[$field_name];
            } else {
                return false;
            }
            
        } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get") {
            if(isset($_GET[$field_name])){
               return $escape ? Security::escape($_GET[$field_name]) : $_GET[$field_name];
            } else {
                return false;
            }
           
        }

    }

    /*
        * Password hash
    */ 

    public function hash(string $password): ?string {
        if(!empty($password)){
            return password_hash($password, PASSWORD_DEFAULT);
        }
        return null;
    }
    
    /**
     * Verify password hash
     */
    public function verifyHash(string $password, string $hash): bool {
        return password_verify($password, $hash);
    }

}


 ?>