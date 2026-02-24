<?php
class AutoLoad
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
    public static function autoload($className)
    {
        $basedir = __DIR__ . '/';
        $directories = ['controlleurs/', 'core/', 'models/', 'views/', 'helpers/', 'libraries/','models/','/'];
        foreach ($directories as $dir) {
            $file = $basedir . $dir . $className . '.php';
            if (file_exists($file)) {
                require_once $file;
                break;
            }
        }
    }
}
AutoLoad::register();