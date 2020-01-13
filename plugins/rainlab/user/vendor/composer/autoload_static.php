<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1d0339e6d7dbbd68879b06845fc70a4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1d0339e6d7dbbd68879b06845fc70a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1d0339e6d7dbbd68879b06845fc70a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
