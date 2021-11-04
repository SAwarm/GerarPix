<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84ffe360f696a978d5aeb2173df185b0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84ffe360f696a978d5aeb2173df185b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84ffe360f696a978d5aeb2173df185b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84ffe360f696a978d5aeb2173df185b0::$classMap;

        }, null, ClassLoader::class);
    }
}