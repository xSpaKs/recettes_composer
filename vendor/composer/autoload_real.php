<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc9865c160b8cda26311b32bbceaf59eb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc9865c160b8cda26311b32bbceaf59eb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc9865c160b8cda26311b32bbceaf59eb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc9865c160b8cda26311b32bbceaf59eb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
