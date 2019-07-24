<?php
namespace Application\Providers;
use Psr\Container\ContainerInterface;
class Doctrine {
    public $em;
    public function __construct(ContainerInterface $container)
    {
        $dbconfig = $container->get('config.database');
        \Kint::dump($dbconfig);
    }
}