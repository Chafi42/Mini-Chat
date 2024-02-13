<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56cb368555e9ea22b6249e62d1d1986b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56cb368555e9ea22b6249e62d1d1986b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56cb368555e9ea22b6249e62d1d1986b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56cb368555e9ea22b6249e62d1d1986b::$classMap;

        }, null, ClassLoader::class);
    }
}
