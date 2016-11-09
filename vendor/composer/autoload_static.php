<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit649cb884827396a594a983a19ba39c49
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tavaresevora\\Commentable\\' => 25,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tavaresevora\\Commentable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit649cb884827396a594a983a19ba39c49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit649cb884827396a594a983a19ba39c49::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit649cb884827396a594a983a19ba39c49::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
