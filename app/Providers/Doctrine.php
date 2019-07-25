<?php

namespace Application\Providers;

use Psr\Container\ContainerInterface;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationRegistry;

class Doctrine {
    public $em;
    public function __construct(ContainerInterface $container)
    {
        $dbconfig = $container->get('config.database');
        \Kint::dump($dbconfig);

        $paths = [
            __DIR__ . '/../Models/Entities',
            __DIR__ . '/../Models/Repositories'
        ];

        $isDevMode = true;

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths, $isDevMode, null, null, false
        );

        $this->em = EntityManager::create($dbconfig, $config);

        AnnotationRegistry::registerLoader('class_exists');

    }
}