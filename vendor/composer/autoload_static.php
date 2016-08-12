<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a5f983131ecba0c6673a8eed7fbf0d7
{
    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Whoops' => 
            array (
                0 => __DIR__ . '/..' . '/filp/whoops/src',
            ),
        ),
    );

    public static $classMap = array (
        'Whoops\\Module' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/Module.php',
        'Whoops\\Provider\\Zend\\ExceptionStrategy' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
        'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3a5f983131ecba0c6673a8eed7fbf0d7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3a5f983131ecba0c6673a8eed7fbf0d7::$classMap;

        }, null, ClassLoader::class);
    }
}