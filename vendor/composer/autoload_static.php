<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit290992c881d48f741bab13d49f5e3d0d
{
    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit290992c881d48f741bab13d49f5e3d0d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
