<?php

require_once __DIR__ . '/lightweight.php';

/**
 * Base Controller Class
 *
 * This class extends Lightweight and provides a base for all controllers.
 * Controllers can extend this class instead of Lightweight directly for consistency.
 */
class Controller extends Lightweight {

    /**
     * Constructor
     * Calls parent constructor to initialize base functionality
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Load a view file
     *
     * @param string $view_name Name of the view file (without .php extension)
     * @param array $data Data to pass to the view
     * @return void
     */
    public function view(string $view_name, array $data = []): void {
        parent::view($view_name, $data);
    }

    /**
     * Load a model
     *
     * @param string $model_name Name of the model file (without .php extension)
     * @return object Instance of the model
     */
    public function model(string $model_name) {
        return parent::model($model_name);
    }

    /**
     * Load a helper
     *
     * @param array $helper_names Array of helper names to load
     * @return void
     */
    public function helper(array $helper_names): void {
        parent::helper($helper_names);
    }

    /**
     * Load a library
     *
     * @param string $library_name Name of the library file (without .php extension)
     * @return object Instance of the library
     */
    public function library(string $library_name) {
        $libraryPath = $this->basePath . "/system/libraries/" . $library_name . ".php";

        if(file_exists($libraryPath)){
            require_once $libraryPath;
            $update_library_name = ucwords($library_name);

            if(!class_exists($update_library_name)) {
                throw new Exception("Library class '{$update_library_name}' not found in {$libraryPath}");
            }

            return new $update_library_name;
        } else {
            throw new Exception("Library file '{$library_name}.php' not found");
        }
    }
}

?>

