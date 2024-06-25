<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc21458fe3238c0b0cd3d3399630c201a
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NexOtaku\\MinimalFilesystem\\' => 27,
        ),
        'B' => 
        array (
            'Bogdante\\Api\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NexOtaku\\MinimalFilesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/nex-otaku/minimal-filesystem/src',
        ),
        'Bogdante\\Api\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc21458fe3238c0b0cd3d3399630c201a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc21458fe3238c0b0cd3d3399630c201a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc21458fe3238c0b0cd3d3399630c201a::$classMap;

        }, null, ClassLoader::class);
    }
}
