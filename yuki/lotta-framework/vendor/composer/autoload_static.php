<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit269f5b1387916dc70df116bfa958837b
{
    public static $files = array (
        '2ca5bb1b80fb48b774e0eb3986edda31' => __DIR__ . '/..' . '/wptt/webfont-loader/wptt-webfont-loader.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LottaFramework\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LottaFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit269f5b1387916dc70df116bfa958837b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit269f5b1387916dc70df116bfa958837b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit269f5b1387916dc70df116bfa958837b::$classMap;

        }, null, ClassLoader::class);
    }
}