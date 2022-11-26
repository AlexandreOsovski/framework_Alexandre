<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3208309a4d77a58ddd6ea9a69d24845e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3208309a4d77a58ddd6ea9a69d24845e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3208309a4d77a58ddd6ea9a69d24845e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3208309a4d77a58ddd6ea9a69d24845e::$classMap;

        }, null, ClassLoader::class);
    }
}
