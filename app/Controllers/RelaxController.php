<?php

namespace App\Controllers;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use App\Database\Database;

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
        echo $this->twig->render('relax.html.twig', ['sliderData' => $this->getSliderData(), 'cardData' => $this->getCardData()]);
    }

    private function getSliderData(): array
    {
        return Database::fetchColumns('cards', ['date', 'image', 'description', 'title', 'organizer']);
    }
    private function getCardData(): array
    {
        return [
            [
                'image' => 'test.jpg',
                'title' => 'lb1',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb2',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb3',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb4',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb5',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb6',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image' => 'test.jpg',
                'title'=>'lb7',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb8',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image'=>'test.jpg',
                'title'=>'lb9',
                'organizer' => 'test.org.jpg'
            ],
            [
                'image' => 'test.jpg',
                'title'=>'lb10',
                'organizer' => 'test.org.jpg'
            ],
        ];
    }
}