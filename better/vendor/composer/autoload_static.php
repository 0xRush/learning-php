<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c3abcff74fcad77cacfceeb4a69993a
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c3abcff74fcad77cacfceeb4a69993a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c3abcff74fcad77cacfceeb4a69993a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c3abcff74fcad77cacfceeb4a69993a::$classMap;

        }, null, ClassLoader::class);
    }
}
