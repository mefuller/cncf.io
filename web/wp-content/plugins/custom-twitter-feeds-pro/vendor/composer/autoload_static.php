<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d646a9a388e88da355a1686fe353822
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TwitterFeed\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TwitterFeed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d646a9a388e88da355a1686fe353822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d646a9a388e88da355a1686fe353822::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
