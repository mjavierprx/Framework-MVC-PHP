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
        echo $view->renderTemplate('home.twig');

        // \Kint::dump($this->doctrine);

        //Mostrar datos de un usuario de la base de datos:
        $user = $this->doctrine->em->getRepository(User::class)->find(2);
        // \Kint::dump($user);
    }

    public function hola(string $nombre, View $view) {
        echo $view->renderTemplate('hola.twig', compact('nombre'));
        // echo $view->render('hola.twig', ['nombre', $nombre]);
    }
}
