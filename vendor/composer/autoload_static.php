<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5dbd54b4bfb3abf7d0fd9c27844f0a9a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Romurs\\ChocolateFactory\\' => 24,
        ),
        'E' => 
        array (
            'Egor\\Chocolate\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Romurs\\ChocolateFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Egor\\Chocolate\\' => 
        array (
            0 => __DIR__ . '/..' . '/egor/chocolate/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5dbd54b4bfb3abf7d0fd9c27844f0a9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5dbd54b4bfb3abf7d0fd9c27844f0a9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5dbd54b4bfb3abf7d0fd9c27844f0a9a::$classMap;

        }, null, ClassLoader::class);
    }
}
