<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68dd4cd15a9403901359d95de125fbb5
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Name\\' => 12,
        ),
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Name\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68dd4cd15a9403901359d95de125fbb5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68dd4cd15a9403901359d95de125fbb5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68dd4cd15a9403901359d95de125fbb5::$classMap;

        }, null, ClassLoader::class);
    }
}