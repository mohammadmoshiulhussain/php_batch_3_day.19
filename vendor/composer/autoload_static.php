<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73b8944dff5c8b803c572553e9ab3893
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73b8944dff5c8b803c572553e9ab3893::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73b8944dff5c8b803c572553e9ab3893::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73b8944dff5c8b803c572553e9ab3893::$classMap;

        }, null, ClassLoader::class);
    }
}
