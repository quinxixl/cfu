<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class DisciplinesCoursesController
{
    private Environment $twig;
    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function showPage(): void
    {
        echo $this->twig->render('@disciplines/courses.html.twig');
    }
}