<?php

require __DIR__ . '/../../vendor/autoload.php';

$containerBuilder = new DI\ContainerBuilder;

// $containerBuilder->useAutowiring(false);
// $containerBuilder->useAutowiring(true);

Kint::dump($containerBuilder);

$containerBuilder->addDefinitions(__DIR__.'/../bootstrap/config.php');

$container = $containerBuilder->build();
return $container;