<?php
/**
 * Password Helper
 * Utility functions for password hashing and verification
 */

if (!function_exists('hash_password')) {
    /**
     * Hash a password using bcrypt
     * 
     * @param string $password Plain text password
     * @param int $cost Cost parameter (4-31, default 10)
     * @return string Hashed password
     */
    function hash_password($password, $cost = 10) {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => $cost]);
    }
}

if (!function_exists('verify_password')) {
    /**
     * Verify a password against a hash
     * 
     * @param string $password Plain text password
     * @param string $hash Password hash
     * @return bool True if password matches
     */
    function verify_password($password, $hash) {
        return password_verify($password, $hash);
    }
}

if (!function_exists('password_needs_rehash')) {
    /**
     * Check if password hash needs to be rehashed
     * 
     * @param string $hash Password hash
     * @param int $cost Cost parameter
     * @return bool True if rehash needed
     */
    function password_needs_rehash_check($hash, $cost = 10) {
        return password_needs_rehash($hash, PASSWORD_BCRYPT, ['cost' => $cost]);
    }
}

?>

