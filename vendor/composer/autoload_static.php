<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit971d0f1cae0227819a477ae99afac92a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit971d0f1cae0227819a477ae99afac92a::$classMap;

        }, null, ClassLoader::class);
    }
}