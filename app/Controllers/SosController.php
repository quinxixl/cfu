<?php

namespace App\Controllers;
use App\Collections\SosCollection;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class SosController
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
        echo $this->twig->render('@sos/sos.html.twig', ['InfoData' => $this->getInfoData()]);
    }

    private function getInfoData(): SosCollection
    {
        return new SosCollection([
            '0' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '1' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '2' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '3' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '4' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '5' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '6' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
            '7' => [
                'image' => 'test.jpg',
                'description' => 'zalupa bebra bebra'
            ],
        ]);
    }
}