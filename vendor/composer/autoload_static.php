<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fec078217584c854496ebfbf63248f9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Progresso\\CarbonFields\\' => 23,
        ),
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Progresso\\CarbonFields\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fec078217584c854496ebfbf63248f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fec078217584c854496ebfbf63248f9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
