<?php

spl_autoload_register(function ($class) {
    $path = 'src/';

    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

    foreach ($rii as $file) {
        if ($file->getFilename() == "$class.php") {
            require_once $file->getPathname();
            break;
        }
    }
});