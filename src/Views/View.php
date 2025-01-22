<?php
namespace DataDisplay\Views;

/**
 * Handles rendering HTML to the browser.
 */
abstract class View
{
    /**
     * Base path to the template files.
     * @var string
     */
    protected $base_template_path;

    public function __construct($base_template_path)
    {
        $this->base_template_path = $base_template_path;
    }

    /**
     * Render the view to the browser.
     * @param mixed $data
     * @return void
     */
    abstract public function render($data);
}