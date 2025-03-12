<?php

namespace App\Controllers;
use Twig\Environment;

class SosController
{
    private Environment $twig;


    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function showPage()
    {
        echo $this->twig->render('@sos/sos.html.twig');
    }
}