<?php

    spl_autoload_register(function ($class) {
        $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
        
        if (file_exists($file)) {
            require_once $file;
        }
    });

    // spl_autoload_register(function($class){
    //     $classFile = $class . '.php';

    //     if(is_file($classFile) and !class_exists($class))
    //         require_once $classFile;
    // });
    