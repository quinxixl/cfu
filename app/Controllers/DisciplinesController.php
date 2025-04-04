<?php

namespace App\Controllers;

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
        $this->twig->render('@disciplines/disciplines.html.twig', ['discData' => $this->getData()]);
    }

    private function getData(): array
    {
        return [
            [
                'image' => 'test.jpg',
                'title' => 'Чат'
            ],
            [
                'image' => 'test.jpg',
                'title'=> 'Курсы'
            ]
        ];
    }
}