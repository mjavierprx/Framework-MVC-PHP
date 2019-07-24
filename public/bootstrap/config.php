<?php

use Application\Controllers\HomeController;
use Application\Controllers\ContactController;
use Application\Providers\Doctrine;

return [
    'config.database' => function() {
        return parse_ini_file(__DIR__ . '/../../app/Config/database.ini');
    },
    HomeController::class => function() {
        return new HomeController;
    },
    ContactController::class => function() {
        return new ContactController;
    },
    Doctrine::class => function(\Psr\Container\ContainerInterface $container) {
        return new Doctrine($container);
    }
];