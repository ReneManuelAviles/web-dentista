<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9ec038aacc96fc7e4ba8ceb5aafdf44
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mattias\\Dentista\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mattias\\Dentista\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9ec038aacc96fc7e4ba8ceb5aafdf44::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9ec038aacc96fc7e4ba8ceb5aafdf44::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9ec038aacc96fc7e4ba8ceb5aafdf44::$classMap;

        }, null, ClassLoader::class);
    }
}
