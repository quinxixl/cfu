<?php

namespace App\Controllers;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class RelaxController
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function showPage(): void
    {
        echo $this->twig->render('relax.html.twig', [
            'left__card' => [
                [
                    'date' => '01.02',
                    'image' => 'test.jpg',
                    'description' => 'левая тусовка симфа',
                    'title' => 'lb3',
                    'organizer' => 'test.org.jpg'
                ]
            ],
            'center__card' => [
                [
                    'date'=>'05.12',
                    'image'=>'test.jpg',
                    'description'=>'главная тусовка симфа',
                    'title'=>'lb4',
                    'organizer' => 'test.org.jpg'
                ]
            ],
            'right__card' => [
                [
                    'date'=>'08.11',
                    'image'=>'test.jpg',
                    'description'=>'правая тусовка симфа',
                    'title'=>'lb5',
                    'organizer' => 'test.org.jpg'
                ]
            ]
        ]);
    }
}