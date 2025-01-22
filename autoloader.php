<?php
namespace DataDisplay;

/**
 * Handles autoloading classes.
 */
class Autoloader
{

    /**
     * Register autoload method.
     */
    public function __construct()
    {
        spl_autoload_register([$this, 'load']);
    }

    /**
     * Autoload method.
     * @param string $class
     * @return void
     */
    public function load($class)
    {

        $prefix = 'DataDisplay\\';

        $base_dir = __DIR__ . '/src/';

        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }

        $relative_class = substr($class, $len);

        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
}

$autoloader = new Autoloader();
