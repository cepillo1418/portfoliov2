<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f2e1068c193164a4461a2ea4df24419
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Maxim\\Portfoliov2\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Maxim\\Portfoliov2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f2e1068c193164a4461a2ea4df24419::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f2e1068c193164a4461a2ea4df24419::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f2e1068c193164a4461a2ea4df24419::$classMap;

        }, null, ClassLoader::class);
    }
}
