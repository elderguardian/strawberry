<?php

$routes = [

    '/' => [HelloController::class, 'world'],

    '/about' => function () {
        echo 'About page!';
    },
    '/error' => function () {
        return new View('error');
    }

    
];