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

        $this->view->render([
            'users' => $users,
            'allowed_file_types' => implode(',', array_keys($this->config['file_types'])),
            'errors' => $this->errors
        ]);
    }
}