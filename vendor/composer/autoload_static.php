<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit649cb884827396a594a983a19ba39c49
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tavaresevora\\Commentable\\' => 25,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tavaresevora\\Commentable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/tavaresevora/commentable/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'CreateCommentsTable' => __DIR__ . '/../..' . '/src/database/2016_11_08_164127_create_comments_table.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit649cb884827396a594a983a19ba39c49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit649cb884827396a594a983a19ba39c49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit649cb884827396a594a983a19ba39c49::$classMap;

        }, null, ClassLoader::class);
    }
}
