<?php 

/**
 * Escape helper functions for views
 */

if (!function_exists('e')) {
    /**
     * Escape HTML output
     * 
     * @param mixed $value Value to escape
     * @return string Escaped string
     */
    function e($value): string {
        if (is_null($value)) {
            return '';
        }
        
        if (is_bool($value)) {
            return $value ? '1' : '';
        }
        
        if (is_array($value) || is_object($value)) {
            return htmlspecialchars(json_encode($value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        
        return htmlspecialchars((string)$value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
}

if (!function_exists('csrf_field')) {
    /**
     * Generate CSRF token field
     * 
     * @return string Hidden input field HTML
     */
    function csrf_field(): string {
        require_once __DIR__ . '/../core/security.php';
        return Security::csrfField();
    }
}

if (!function_exists('old')) {
    /**
     * Get old input value (useful for form repopulation)
     * 
     * @param string $key Input key
     * @param mixed $default Default value
     * @return mixed
     */
    function old(string $key, $default = null) {
        if (isset($_SESSION['_old_input']) && isset($_SESSION['_old_input'][$key])) {
            return $_SESSION['_old_input'][$key];
        }
        return $default;
    }
}






