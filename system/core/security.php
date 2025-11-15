<?php

/**
 * Security Helper Class
 * Provides security utilities for input validation, sanitization, and CSRF protection
 */
class Security {
    
    /**
     * Whitelist of allowed table/column name characters
     */
    private static $allowedIdentifierChars = '/^[a-zA-Z_][a-zA-Z0-9_]*$/';
    
    /**
     * Validate table or column name to prevent SQL injection
     * 
     * @param string $identifier Table or column name
     * @return bool True if valid
     * @throws SecurityException If identifier is invalid
     */
    public static function validateIdentifier(string $identifier): bool {
        if (empty($identifier)) {
            throw new SecurityException("Identifier cannot be empty");
        }
        
        if (!preg_match(self::$allowedIdentifierChars, $identifier)) {
            throw new SecurityException("Invalid identifier: {$identifier}");
        }
        
        return true;
    }
    
    /**
     * Escape HTML output to prevent XSS
     * 
     * @param mixed $value Value to escape
     * @param int $flags htmlspecialchars flags
     * @return string Escaped string
     */
    public static function escape($value, int $flags = ENT_QUOTES | ENT_HTML5): string {
        if (is_null($value)) {
            return '';
        }
        
        if (is_bool($value)) {
            return $value ? '1' : '';
        }
        
        if (is_array($value) || is_object($value)) {
            return htmlspecialchars(json_encode($value), $flags, 'UTF-8');
        }
        
        return htmlspecialchars((string)$value, $flags, 'UTF-8');
    }
    
    /**
     * Sanitize input string
     * 
     * @param string $input Input to sanitize
     * @return string Sanitized string
     */
    public static function sanitize(string $input): string {
        return trim(strip_tags($input));
    }
    
    /**
     * Generate CSRF token
     * 
     * @return string CSRF token
     */
    public static function generateCsrfToken(): string {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
    
    /**
     * Validate CSRF token
     * 
     * @param string $token Token to validate
     * @return bool True if valid
     * @throws CsrfTokenException If token is invalid
     */
    public static function validateCsrfToken(string $token): bool {
        if (!isset($_SESSION['csrf_token'])) {
            throw new CsrfTokenException("CSRF token not found in session");
        }
        
        if (!hash_equals($_SESSION['csrf_token'], $token)) {
            throw new CsrfTokenException("CSRF token mismatch");
        }
        
        return true;
    }
    
    /**
     * Get CSRF token field HTML
     * 
     * @return string Hidden input field HTML
     */
    public static function csrfField(): string {
        $token = self::generateCsrfToken();
        return '<input type="hidden" name="csrf_token" value="' . self::escape($token) . '">';
    }
    
    /**
     * Validate file extension
     * 
     * @param string $filename File name
     * @param array $allowedExtensions Allowed extensions
     * @return bool True if valid
     */
    public static function validateFileExtension(string $filename, array $allowedExtensions): bool {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return in_array($ext, array_map('strtolower', $allowedExtensions));
    }
    
    /**
     * Validate MIME type
     * 
     * @param string $filePath Path to uploaded file
     * @param array $allowedMimeTypes Allowed MIME types
     * @return bool True if valid
     */
    public static function validateMimeType(string $filePath, array $allowedMimeTypes): bool {
        if (!file_exists($filePath)) {
            return false;
        }
        
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $filePath);
        finfo_close($finfo);
        
        return in_array($mimeType, $allowedMimeTypes);
    }
    
    /**
     * Sanitize file name
     * 
     * @param string $filename Original filename
     * @return string Sanitized filename
     */
    public static function sanitizeFileName(string $filename): string {
        // Remove directory traversal attempts
        $filename = basename($filename);
        // Remove special characters except dots, hyphens, underscores
        $filename = preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename);
        return $filename;
    }
    
    /**
     * Validate upload path to prevent directory traversal
     * 
     * @param string $uploadPath Upload path
     * @param string $basePath Base allowed path
     * @return bool True if valid
     * @throws SecurityException If path is invalid
     */
    public static function validateUploadPath(string $uploadPath, string $basePath): bool {
        $realBasePath = realpath($basePath);
        $realUploadPath = realpath($uploadPath);
        
        if ($realBasePath === false || $realUploadPath === false) {
            throw new SecurityException("Invalid upload path");
        }
        
        // Check if upload path is within base path
        if (strpos($realUploadPath, $realBasePath) !== 0) {
            throw new SecurityException("Upload path outside allowed directory");
        }
        
        return true;
    }
}






