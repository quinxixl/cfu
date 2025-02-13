<?php

namespace App\Controllers;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class RelaxController
{
    private Environment $twig;
    private array $sliderData = [
        [
            'date' => '01.02',
            'image' => 'test.jpg',
            'description' => 'левая тусовка симфа',
            'title' => 'lb3',
            'organizer' => 'test.org.jpg'
        ],
        [
            'date'=>'05.12',
            'image'=>'test.jpg',
            'description'=>'главная тусовка симфа',
            'title'=>'lb4',
            'organizer' => 'test.org.jpg'
        ],
        [
            'date'=>'08.11',
            'image'=>'test.jpg',
            'description'=>'правая тусовка симфа',
            'title'=>'lb5',
            'organizer' => 'test.org.jpg'
        ],
        [
            'date'=>'08.12',
            'image'=>'test.jpg',
            'description'=>'чето там',
            'title'=>'lb6',
            'organizer' => 'test.org.jpg'
        ],
        [
            'date'=>'03.12',
            'image'=>'test.jpg',
            'description'=>'еще чето там',
            'title'=>'lb6',
            'organizer' => 'test.org.jpg'
        ]
    ];

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
        echo $this->twig->render('relax.html.twig', ['sliderData' => $this->sliderData]);
    }
}