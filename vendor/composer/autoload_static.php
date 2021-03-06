<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c4b841a310127d715c51ab8923fc53c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c4b841a310127d715c51ab8923fc53c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c4b841a310127d715c51ab8923fc53c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
