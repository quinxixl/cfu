<?php

namespace App\Controllers;

use App\Database\Database;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class DisciplinesController
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function showPage(): void
    {
        echo $this->twig->render('@disciplines/disciplines.html.twig', ['discData' => $this->getData()]);
    }

    private function getData(): array
    {
        return Database::fetchColumns('disciplines', ['image', 'title']);
    }
}