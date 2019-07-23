<?php
    return \FastRoute\simpleDispatcher(
        function (\FastRoute\RouteCollector $route) {
            //Podemos añadir cualquier nueva ruta a la variable $route:
            // Método Http, URL, array (nombre controlador, nombre del método)
            $route->addRoute('GET', '/', ['Application\Controller\HomeController', 'index']);
        }
    );