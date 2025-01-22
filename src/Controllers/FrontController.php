<?php

namespace DataDisplay\Controllers;

use DataDisplay\Views\FrontView;

class FrontController extends Controller
{
    /**
     * Array for error collection during file handling.
     * @var array
     */
    protected $errors = [];

    public function __construct($config)
    {
        parent::__construct($config);
        $this->view = new FrontView($this->config['base_template_path']);
    }

    public function handleRequest()
    {
        $users = [];

        if (isset($_FILES['file'])) {
            $users = $this->handleFile($_FILES['file']);
        }

        $this->view->render([
            'users' => $users,
            'allowed_file_types' => implode(',', array_keys($this->config['file_types'])),
            'errors' => $this->errors
        ]);
    }
    
    /**
     * Handle submitted file.
     * @param mixed $file
     * @return array
     */
    protected function handleFile($file)
    {
        $users = [];

        try {
            $this->validateFile($file);
            $users = $this->readFile($file);
        } catch (\Throwable $th) {
            $this->errors[] = $th->getMessage();
        }

        return $users;
    }

    /**
     * Validate and handle any errors that happen during file upload.
     * @param mixed $file
     * @throws \RuntimeException
     * @return void
     */
    protected function validateFile($file)
    {
        if (!isset($file['error']) || is_array($file['error'])) {
            throw new \RuntimeException('Invalid parameters');
        }

        switch ($file['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new \RuntimeException('No file sent');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new \RuntimeException('File size exceeded');
            default:
                throw new \RuntimeException('Something went wrong');
        }

        $file_type = mime_content_type($file['tmp_name']);
        if (!isset($this->allowed_files[$file_type])) {
            throw new \RuntimeException('Invalid file format');
        }
    }

    /**
     * Read the file and return data models.
     * @param mixed $file
     * @return array
     */
    protected function readFile($file)
    {
        return [];
    }
}