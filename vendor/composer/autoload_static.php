<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bbd875399300230bf19c60140da6c40
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP2\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bbd875399300230bf19c60140da6c40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bbd875399300230bf19c60140da6c40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bbd875399300230bf19c60140da6c40::$classMap;

        }, null, ClassLoader::class);
    }
}