<?php
namespace DataDisplay;

use DataDisplay\Controllers\FrontController;

/**
 * Initializes controllers and handles the overall application structure and configuration.
 */
class App
{
    /**
     * Application configuration.
     * @var array
     */
    protected $config;

    /**
     * Active controller.
     * @var \DataDisplay\Controllers\Controller
     */
    protected $controller;

    /**
     * Register controller
     * @param mixed $config
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->controller = new FrontController($this->config);
    }

    /**
     * Handles application runtime processes.
     * @return void
     */
    public function run()
    {
        $this->controller->handleRequest();
    }
}