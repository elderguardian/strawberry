<?php

class Router
{
    private array $routes;


    function __construct(array $routes)
    {
        $this->routes = $routes;
    }


    function route(): void
    {
        $path = $_GET["path"] ?? '';
        $pathChars = str_split($path);
        $lastChar = array_pop($pathChars);

        if ($lastChar === '/') {
            $lastChar = '';
        }

        $path = implode($pathChars) . $lastChar;

        if (!array_key_exists("/{$path}", $this->routes)) {
            $path = 'error';
        }

        $routerResult = $this->routes["/" . $path];

        if (is_array($routerResult)) {
            $controllerName = $routerResult[0];
            $actionName = $routerResult[1];
            $kernel = new Kernel();

            echo (new $controllerName)->$actionName($kernel);
        } else {
            echo $routerResult();
        }
    }


}