<?php
namespace DataDisplay\Controllers;

/**
 * Handles requests and application business logic.
 */
abstract class Controller
{
    /**
     * Application configuration.
     * @var array
     */
    protected $config;

    /**
     * View that will be rendered in the browser.
     * @var \DataDisplay\Views\View;
     */
    protected $view;

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Main controller method that gets called when a request has to be handled.
     * @return void
     */
    abstract public function handleRequest();
}