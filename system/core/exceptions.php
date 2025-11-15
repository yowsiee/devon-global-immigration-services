<?php

/**
 * Base Exception Class
 */
class LightweightException extends Exception {}

/**
 * View Not Found Exception
 */
class ViewNotFoundException extends LightweightException {
    public function __construct(string $viewName) {
        parent::__construct("View '{$viewName}' not found");
    }
}

/**
 * Model Not Found Exception
 */
class ModelNotFoundException extends LightweightException {
    public function __construct(string $modelName) {
        parent::__construct("Model '{$modelName}' not found");
    }
}

/**
 * Controller Not Found Exception
 */
class ControllerNotFoundException extends LightweightException {
    public function __construct(string $controllerName) {
        parent::__construct("Controller '{$controllerName}' not found");
    }
}

/**
 * Method Not Found Exception
 */
class MethodNotFoundException extends LightweightException {
    public function __construct(string $methodName) {
        parent::__construct("Method '{$methodName}' not found");
    }
}

/**
 * Helper Not Found Exception
 */
class HelperNotFoundException extends LightweightException {
    public function __construct(string $helperName) {
        parent::__construct("Helper '{$helperName}' not found");
    }
}

/**
 * Database Exception
 */
class DatabaseException extends LightweightException {}

/**
 * Bad Request Exception
 */
class BadRequestException extends LightweightException {
    public function __construct(string $message = "Bad Request") {
        parent::__construct($message);
    }
}

/**
 * Security Exception
 */
class SecurityException extends LightweightException {
    public function __construct(string $message = "Security violation detected") {
        parent::__construct($message);
    }
}

/**
 * CSRF Token Exception
 */
class CsrfTokenException extends SecurityException {
    public function __construct(string $message = "CSRF token validation failed") {
        parent::__construct($message);
    }
}






