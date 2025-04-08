<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class DisciplinesChatController
{
    private Environment $twig;
    public function __construct(Environment $twig)
    {
        $this -> twig = $twig;
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function showPage(): void
    {
        echo $this ->twig -> render("@disciplines/chat.html.twig");
    }
}