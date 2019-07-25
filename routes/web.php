<?php
    return \FastRoute\simpleDispatcher(
        function (\FastRoute\RouteCollector $route) {
            $route->addRoute('GET', '/', ['Application\Controllers\HomeController', 'index']);
            $route->addRoute(['GET', 'POST'], '/contacto', ['Application\Controllers\ContactController', 'contact']);
            $route->addRoute(['GET', 'POST'], '/contacto2', ['Application\Controllers\ContactController', 'contact2']);
            $route->addRoute('GET', '/hola/{nombre}', ['Application\Controllers\HomeController', 'hola']);
            $route->addRoute('GET', '/usuarios', ['Application\Controllers\UsersController', 'usersList']);
        }
    );