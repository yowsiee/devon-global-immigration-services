<?php 

// Load configuration
include __DIR__ . "/setting.php";

// Load error handler
require_once __DIR__ . "/core/error_handler.php";
require_once __DIR__ . "/core/exceptions.php";

// Register error handler
ErrorHandler::register();

// Autoloader for libraries
spl_autoload_register(function($class_name){
	$file = __DIR__ . "/libraries/$class_name.php";
	if(file_exists($file)) {
		include $file;
	}
});

// Initialize routing
$Rout = new Rout;

 ?>