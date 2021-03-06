<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92cc28f10c64a96384b514ca015b691f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Web3p\\RLP\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Web3p\\RLP\\' => 
        array (
            0 => __DIR__ . '/..' . '/web3p/rlp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92cc28f10c64a96384b514ca015b691f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92cc28f10c64a96384b514ca015b691f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
