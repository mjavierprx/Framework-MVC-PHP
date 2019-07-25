<?php
namespace Application\Controllers;

use Application\Providers\Doctrine;
use Application\Models\Entities\User;
use Application\Providers\View;


class HomeController {
    protected $doctrine;

    public function __construct(Doctrine $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function index(View $view) {
        echo $view->render('home.twig');

        echo ('<h1>Bienvenido</h1>');
        \Kint::dump($this->doctrine);

        //Mostrar datos de un usuario de la base de datos:
        $user = $this->doctrine->em->getRepository(User::class)->find(2);
        \Kint::dump($user);
    }

    public function hola(string $nombre, View $view) {
        echo $view->render('hola.twig', compact('nombre'));
        // echo $view->render('hola.twig', ['nombre', $nombre]);
    }
}
