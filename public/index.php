<?php
    $container = require __DIR__ . '/bootstrap/container.php';

    $dispatcher = require __DIR__ . '/../routes/web.php';

    Kint::dump($container);

    Kint::dump($dispatcher);

    $httpMethod= $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $route= $dispatcher->dispatch($httpMethod, $uri);
    Kint::dump($route);

