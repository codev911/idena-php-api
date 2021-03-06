<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d071f4f3581722f75c85567b3cd7421
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/greensea/keccak/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d071f4f3581722f75c85567b3cd7421::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d071f4f3581722f75c85567b3cd7421::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
