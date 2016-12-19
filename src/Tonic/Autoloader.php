<?php

namespace Tonic;

/**
 * Autoload
 */
class Autoloader
{
    private $namespace;
    private $basePath;

    public function __construct($namespace = null, $basePath = null)
    {
        $this->namespace = $namespace;
        $this->basePath = (is_null($basePath)) ? dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR : $basePath;

        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * Handles autoloading of classes
     * @param string $className Name of the class to load
     */
    private function autoload($className)
    {
        if ($this->namespace == null || $this->namespace.'\\' === substr($className, 0, strlen($this->namespace.'\\'))) {
            $fileName = $this->basePath;
            $namespace = '';
            if (false !== ($lastNsPos = strripos($className, '\\'))) {
                $namespace = substr($className, 0, $lastNsPos);
                $className = substr($className, $lastNsPos + 1);
                $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
            $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
            require $fileName;
        }
    }

}

new Autoloader('Tonic');