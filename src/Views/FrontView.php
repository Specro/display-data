<?php
namespace DataDisplay\Views;

/**
 * Renders applications main layout.
 */
class FrontView extends View
{
    public function __construct($base_template_path)
    {
        parent::__construct($base_template_path);
    }

    public function render($data)
    {
        extract($data);
        include $this->base_template_path . '/front-layout.php';
    }
}