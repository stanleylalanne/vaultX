<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99a0521691fb4a46c17c81f636b74a29
{
    public static $classMap = array (
        'VAULTX\\Database' => __DIR__ . '/../..' . '/src/model/Database.php',
        'VAULTX\\Model' => __DIR__ . '/../..' . '/src/model/Model.php',
        'VAULTX\\User' => __DIR__ . '/../..' . '/src/model/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit99a0521691fb4a46c17c81f636b74a29::$classMap;

        }, null, ClassLoader::class);
    }
}
