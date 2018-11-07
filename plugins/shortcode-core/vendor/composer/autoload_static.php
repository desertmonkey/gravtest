<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47c43f2655de2b7fab7c8f671b11b4e4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thunder\\Shortcode\\Tests\\' => 24,
            'Thunder\\Shortcode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thunder\\Shortcode\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/tests',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47c43f2655de2b7fab7c8f671b11b4e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47c43f2655de2b7fab7c8f671b11b4e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
