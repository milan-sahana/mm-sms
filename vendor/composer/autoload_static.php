<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0540c1e780177f924f7374db0af92470
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MilanSahana\\MmSms\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MilanSahana\\MmSms\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0540c1e780177f924f7374db0af92470::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0540c1e780177f924f7374db0af92470::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0540c1e780177f924f7374db0af92470::$classMap;

        }, null, ClassLoader::class);
    }
}