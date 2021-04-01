<?php

$found = false;

$dirs = [
    '..' . DIRECTORY_SEPARATOR,
    '..' . DIRECTORY_SEPARATOR . '..',
    '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..',
    '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..'
];

foreach ($dirs as $include) {
    $dir = __DIR__ . DIRECTORY_SEPARATOR  . $include . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
    
    //echo $dir . "\n";
    
    if (file_exists($dir)) {
        require_once($dir);
        $found = true;
    }
}

if ($found === false) {
    die('Could not find Composer auto-load file.');
}

$includeDirs = [
    'source/', 
    '../source/'
];

spl_autoload_register(function($fullClassName) use ($includeDirs) {

    foreach ($includeDirs as $dir) {

        $classFileName = str_replace("\\", "/", $fullClassName) . ".php";

        $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classFileName;

        if (file_exists($path)) {
            require_once($path);
            return;
        }
    }
});
