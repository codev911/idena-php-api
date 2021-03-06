<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc834eb13a46d954e23a82ba81d5fba52
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '56823cacd97af379eceaf82ad00b928f' => __DIR__ . '/..' . '/phpseclib/bcmath_compat/lib/bcmath.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'b' => 
        array (
            'bcmath_compat\\' => 14,
        ),
        'M' => 
        array (
            'Moontoast\\Math\\Exception\\' => 25,
            'Moontoast\\Math\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'bcmath_compat\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/bcmath_compat/src',
        ),
        'Moontoast\\Math\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/moontoast/math/src/Moontoast/Math/Exception',
        ),
        'Moontoast\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/moontoast/math/src/Moontoast/Math',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc834eb13a46d954e23a82ba81d5fba52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc834eb13a46d954e23a82ba81d5fba52::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
