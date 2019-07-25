<?php

namespace Application\Providers;

use Twig;
use Kint;

class View {
    private $twig;

    public function __construct () {
        $loader= new \Twig\Loader\FilesystemLoader(dirname(__DIR__)."\\resources\\views");
        $this->twig = new \Twig\Environment($loader);
    }

    public function render (string $view, array $data = []) {
        if($data !=null){
            extract ($data, EXTR_SKIP);
        }
        $file = dirname(__DIR__)."\\resources\\views\\".$view;
        if(is_readable($file)){
            require $file;
        } else {
            throw new \InvalidArgumentException();
        }
    }

    public function renderTemplate($template, $args=[]) {
        echo $this->twig->render($template, $args);
    }
}
