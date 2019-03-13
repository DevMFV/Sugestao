<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit239871b2f6d430a525f40d8737275a64
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matheus\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matheus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit239871b2f6d430a525f40d8737275a64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit239871b2f6d430a525f40d8737275a64::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}