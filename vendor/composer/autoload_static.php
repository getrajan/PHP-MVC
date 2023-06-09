<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd14a261022b7c5318ffbc6505ee1aa2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd14a261022b7c5318ffbc6505ee1aa2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd14a261022b7c5318ffbc6505ee1aa2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd14a261022b7c5318ffbc6505ee1aa2::$classMap;

        }, null, ClassLoader::class);
    }
}
