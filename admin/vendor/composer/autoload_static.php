<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfca8d41df5028dec5bc165fc4b8fdce
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfca8d41df5028dec5bc165fc4b8fdce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfca8d41df5028dec5bc165fc4b8fdce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
