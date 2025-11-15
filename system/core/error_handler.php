<?php

/**
 * Error Handler
 * Provides centralized error handling for the framework
 */

class ErrorHandler {
    
    /**
     * Register error handler
     */
    public static function register(): void {
        set_error_handler([self::class, 'handleError']);
        set_exception_handler([self::class, 'handleException']);
        register_shutdown_function([self::class, 'handleShutdown']);
    }
    
    /**
     * Handle PHP errors
     */
    public static function handleError(int $severity, string $message, string $file, int $line): bool {
        if (!(error_reporting() & $severity)) {
            return false;
        }
        
        $error = new ErrorException($message, 0, $severity, $file, $line);
        self::handleException($error);
        
        return true;
    }
    
    /**
     * Handle uncaught exceptions
     */
    public static function handleException(Throwable $exception): void {
        // Log error
        error_log("Uncaught exception: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " . $exception->getLine());
        
        // Set HTTP status code
        if (!headers_sent()) {
            http_response_code(500);
        }
        
        // Display error based on environment
        if (defined('DEBUG') && DEBUG === true) {
            self::displayError($exception);
        } else {
            self::displayGenericError();
        }
    }
    
    /**
     * Handle fatal errors
     */
    public static function handleShutdown(): void {
        $error = error_get_last();
        
        if ($error !== null && in_array($error['type'], [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE])) {
            $exception = new ErrorException(
                $error['message'],
                0,
                $error['type'],
                $error['file'],
                $error['line']
            );
            self::handleException($exception);
        }
    }
    
    /**
     * Display detailed error (development mode)
     */
    private static function displayError(Throwable $exception): void {
        echo "<!DOCTYPE html><html><head><title>Framework Error</title>";
        echo "<style>
            body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
            .error-container { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            h1 { color: #d32f2f; }
            .error-detail { background: #f5f5f5; padding: 10px; margin: 10px 0; border-left: 3px solid #d32f2f; }
            pre { background: #f5f5f5; padding: 10px; overflow-x: auto; }
        </style></head><body>";
        echo "<div class='error-container'>";
        echo "<h1>Framework Error</h1>";
        echo "<div class='error-detail'>";
        echo "<strong>Message:</strong> " . htmlspecialchars($exception->getMessage()) . "<br>";
        echo "<strong>Type:</strong> " . get_class($exception) . "<br>";
        echo "<strong>File:</strong> " . htmlspecialchars($exception->getFile()) . "<br>";
        echo "<strong>Line:</strong> " . $exception->getLine() . "<br>";
        echo "</div>";
        
        if ($exception->getTrace()) {
            echo "<h3>Stack Trace:</h3>";
            echo "<pre>" . htmlspecialchars($exception->getTraceAsString()) . "</pre>";
        }
        
        echo "</div></body></html>";
    }
    
    /**
     * Display generic error (production mode)
     */
    private static function displayGenericError(): void {
        echo "<!DOCTYPE html><html><head><title>Error</title>";
        echo "<style>
            body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
            .error-container { background: white; padding: 40px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
            h1 { color: #666; }
        </style></head><body>";
        echo "<div class='error-container'>";
        echo "<h1>An Error Occurred</h1>";
        echo "<p>We're sorry, but something went wrong. Please try again later.</p>";
        echo "<p>If this problem persists, please contact the administrator.</p>";
        echo "</div></body></html>";
    }
}






