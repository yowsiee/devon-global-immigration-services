<?php 

require_once __DIR__ . '/../core/exceptions.php';
require_once __DIR__ . '/../core/security.php';

/**
 * Files upload library with security improvements
 */
trait Files_upload{
    
    public $file_errors = [];
    public $data;
    public $file_data;
    
    // Default allowed MIME types (can be extended)
    private $allowedMimeTypes = [
        'image/jpeg' => ['jpg', 'jpeg'],
        'image/png' => ['png'],
        'image/gif' => ['gif'],
        'application/pdf' => ['pdf'],
        'text/plain' => ['txt'],
    ];
    
    public function file(array $data): void {
        if (!isset($data['file_name']) || !isset($_FILES[$data['file_name']])) {
            $this->file_errors[$data['file_name'] ?? 'unknown'] = "File field not found";
            return;
        }
        
        $this->data = $data;
        $fieldName = $this->data['file_name'];
        
        // Check for upload errors
        if ($_FILES[$fieldName]['error'] !== UPLOAD_ERR_OK) {
            $this->file_errors[$fieldName] = $this->getUploadErrorMessage($_FILES[$fieldName]['error']);
            return;
        }
        
        $this->file_data = [
            'file_name'    => $_FILES[$fieldName]['name'],
            'file_tmp'     => $_FILES[$fieldName]['tmp_name'],
            'file_size'    => $_FILES[$fieldName]['size'],
            'file_type'    => $_FILES[$fieldName]['type'],
            'extensions'   => $this->data['allowed_extensions'] ?? '',
            'upload_path'  => $this->data['upload_path'] ?? '',
            'label'        => $this->data['label'] ?? 'File',
            'field_name'   => $fieldName,
            'file_ext'     => strtolower(pathinfo($_FILES[$fieldName]['name'], PATHINFO_EXTENSION)),
            'max_size'     => $this->data['max_size'] ?? 5242880 // 5MB default
        ];

        // Check if the file input field is empty or not
        if(empty($this->file_data['file_name'])){
            $this->file_errors[$fieldName] = ($this->file_data['label'] ?? 'File') . " is required";
            return;
        }

        // Check file size
        if ($this->file_data['file_size'] > $this->file_data['max_size']) {
            $maxSizeMB = round($this->file_data['max_size'] / 1048576, 2);
            $this->file_errors[$fieldName] = ($this->file_data['label'] ?? 'File') . " exceeds maximum size of {$maxSizeMB}MB";
            return;
        }

        // Check the file extension
        $extensions = explode("|", $this->file_data['extensions']);
        $extensions = array_map('strtolower', $extensions);
        
        if(!in_array($this->file_data['file_ext'], $extensions)){
            $this->file_errors[$fieldName] = $this->file_data['file_ext'] . " is not a valid extension";
            return;
        }

        // Validate MIME type
        if (!empty($this->data['allowed_mime_types'])) {
            $allowedMimes = is_array($this->data['allowed_mime_types']) 
                ? $this->data['allowed_mime_types'] 
                : explode('|', $this->data['allowed_mime_types']);
            
            if (!Security::validateMimeType($this->file_data['file_tmp'], $allowedMimes)) {
                $this->file_errors[$fieldName] = "Invalid file type detected";
                return;
            }
        } else {
            // Use default MIME validation
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $detectedMime = finfo_file($finfo, $this->file_data['file_tmp']);
            finfo_close($finfo);
            
            if (!isset($this->allowedMimeTypes[$detectedMime]) || 
                !in_array($this->file_data['file_ext'], $this->allowedMimeTypes[$detectedMime])) {
                $this->file_errors[$fieldName] = "File type mismatch detected";
                return;
            }
        }

        // Validate and sanitize upload path
        $uploadPath = rtrim($this->file_data['upload_path'], '/') . '/';
        
        if(!file_exists($uploadPath)){
            $this->file_errors[$fieldName] = "Upload directory does not exist";
            return;
        }
        
        // Validate path is within allowed directory (prevent directory traversal)
        $basePath = dirname(dirname(__DIR__)) . '/public/uploads/';
        try {
            Security::validateUploadPath($uploadPath, $basePath);
        } catch (SecurityException $e) {
            $this->file_errors[$fieldName] = "Invalid upload path";
            return;
        }
        
        $this->file_data['upload_path'] = $uploadPath;
    }
    
    /**
     * Get human-readable upload error message
     */
    private function getUploadErrorMessage(int $error): string {
        switch ($error) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                return "File size exceeds maximum allowed";
            case UPLOAD_ERR_PARTIAL:
                return "File was only partially uploaded";
            case UPLOAD_ERR_NO_FILE:
                return "No file was uploaded";
            case UPLOAD_ERR_NO_TMP_DIR:
                return "Missing temporary folder";
            case UPLOAD_ERR_CANT_WRITE:
                return "Failed to write file to disk";
            case UPLOAD_ERR_EXTENSION:
                return "File upload stopped by extension";
            default:
                return "Unknown upload error";
        }
    }

    public function file_run(): bool {
        if(!empty($this->file_errors)){
            $this->data = null;
            return false;
        }
        
        // Sanitize file name to prevent directory traversal
        $originalName = pathinfo($this->file_data['file_name'], PATHINFO_FILENAME);
        $file_name = Security::sanitizeFileName($originalName);
        
        // Replace spaces with underscores
        $file_name = preg_replace("/\s+/", "_", $file_name);
        
        // Generate unique filename with timestamp and random string
        $randomString = bin2hex(random_bytes(8));
        $file_name = time() . '_' . $randomString . '_' . $file_name;
        $file_name = $file_name . "." . $this->file_data['file_ext'];
        
        // Ensure upload path ends with slash
        $uploadPath = $this->file_data['upload_path'];
        if (substr($uploadPath, -1) !== '/') {
            $uploadPath .= '/';
        }
        
        $fullPath = $uploadPath . $file_name;
        
        // Move uploaded file
        if (!move_uploaded_file($this->file_data['file_tmp'], $fullPath)) {
            $this->file_errors[$this->file_data['field_name']] = "Failed to move uploaded file";
            return false;
        }
        
        // Set proper permissions (readable by web server, not executable)
        chmod($fullPath, 0644);
        
        $this->file_data['file_name'] = $file_name;
        $this->file_data['full_path'] = $fullPath;
        return true;
    }


}


 ?>