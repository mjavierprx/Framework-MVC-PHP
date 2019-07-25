<?php
namespace Application\Controllers;

use Application\Providers\Doctrine;
use Application\Models\Entities\User;
use Application\Providers\View;


class UsersController {
    protected $doctrine;

    public function __construct(Doctrine $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function usersList(View $view) {
        $users = $this->doctrine->em->getRepository(User::class)->findAll();
        echo $view->renderTemplate('users.twig', compact('users'));
        // \Kint::dump($users);
    }

}
