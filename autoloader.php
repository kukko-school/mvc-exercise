<?php

spl_autoload_register(function ($className) {
    if (strpos($className, '\\') !== false) {
        $classPath = explode('\\', $className);
        $path = __DIR__ . "/";
        for ($i = 0; $i < count($classPath) - 1; $i++) {
            $path .= strtolower($classPath[$i]) . '/';
        }
        $path .= $classPath[count($classPath) - 1] . '.php';
        require_once($path);
        return;
    }
    $folders = [
        'controller',
        'enum',
        'service'
    ];
    foreach ($folders as $folder) {
        $path = __DIR__ . '/' . $folder . '/' . $className . '.php';
        if (file_exists($path)) {
            require_once($path);
            return;
        }
    }
});
