<?php

namespace App\Controllers;
use App\Collections\SosCollection;
use App\Database\Database;
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
        $data = Database::fetchColumns('sos', ['image', 'description', 'href']);
        return new SosCollection($data);
    }
}