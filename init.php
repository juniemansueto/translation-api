<?php

define('SIMPLETRANSLATION_BASE', dirname(__FILE__));

class Init
{
    public function __construct()
    {
        // We have created an error handler for convenience.
        // If you wish to use it, uncomment the following line.
        // set_error_handler(array($this, 'error_handler'));

        // include this api classpath
        $include_path = get_include_path() . PATH_SEPARATOR;
        $include_path .= SIMPLETRANSLATION_BASE .'/libs';
        set_include_path($include_path);

        // set our own class autoloader if one doesn't already exist
        if (false === spl_autoload_functions())
        {
            if (function_exists('__autoload')) {
                spl_autoload_register('__autoload');
            }
        }
        spl_autoload_register(array('Init', 'autoload'));

        // set:
        // - internal character encoding
        // - timezone
        mb_internal_encoding('UTF-8');
        if (function_exists('date_default_timezone_set'))
        {
            date_default_timezone_set(Simpletranslation_Config::getInstance()->get('timezone', 'UTC'));
        }
    }

    public function error_handler($errno, $errstr, $errfile = '', $errline = -1, $errctx = null)
    {
        $ex = new Simpletranslation_Exception($errstr, $errno);
        $ex->setFile($errfile);
        $ex->setLine($errline);
        throw $ex;
    }

    /**
     * We use our own autoloader, but restricted to Simpletranslation classes
     **/
    public static function autoload($classname)
    {
        if (false !== strpos($classname, 'Simpletranslation') ||
            false !== strpos($classname, 'Zend_')) 
        {
            $classpath = str_replace('_', '/', $classname) . '.php';
            require_once $classpath;
        }
    }

}
new Init();
