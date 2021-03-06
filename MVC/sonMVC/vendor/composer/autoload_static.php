<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c78463cd44e849a574c64823420eb09
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Son\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Son\\' => 
        array (
            0 => __DIR__ . '/..' . '/Son',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c78463cd44e849a574c64823420eb09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c78463cd44e849a574c64823420eb09::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
