<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93dca17e1e49aac38d8a5f1be3aea9f1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93dca17e1e49aac38d8a5f1be3aea9f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93dca17e1e49aac38d8a5f1be3aea9f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
