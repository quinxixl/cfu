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
                    'description' => 'жоская туса ваще',
                    'title' => 'zentry tysa',
                    'organizer' => 'test.org.jpg'
                ]
            ],
//            'main__card' => [
//                [
//                    'date'=>'',
//                    'image'=>'',
//                    'description'=>'',
//                    'title'=>'',
//                    'organizer' => ''
//                ]
//            ],
//            'right__card' => [
//                [
//                    'date'=>'',
//                    'image'=>'',
//                    'description'=>'',
//                    'title'=>'',
//                    'organizer' => ''
//                ]
//            ]
        ]);
    }
}