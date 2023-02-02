<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9883d4361aaf9740ed1ca99b11106fb1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marcellopato\\CnpjCpfFormat\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marcellopato\\CnpjCpfFormat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9883d4361aaf9740ed1ca99b11106fb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9883d4361aaf9740ed1ca99b11106fb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9883d4361aaf9740ed1ca99b11106fb1::$classMap;

        }, null, ClassLoader::class);
    }
}