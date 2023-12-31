<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4f9ea045f6d487b103430bb1e4f61ac
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

        spl_autoload_register(array('ComposerAutoloaderInite4f9ea045f6d487b103430bb1e4f61ac', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4f9ea045f6d487b103430bb1e4f61ac', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4f9ea045f6d487b103430bb1e4f61ac::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
