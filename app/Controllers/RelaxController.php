<?php

namespace App\Controllers;
use App\Collections\RelaxCollection;
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
        echo $this->twig->render('@relax/relax.html.twig', ['sliderData' => $this->getSliderData(), 'cardData' => $this->getCardData()]);
    }

    private function getSliderData(): RelaxCollection
    {
        $slides = Database::fetchColumns('cards', ['date', 'image', 'description', 'title', 'organizer'], 'id <= ?', [6]);
        return new RelaxCollection($slides);
    }
    private function getCardData(): RelaxCollection
    {
        $cards = Database::fetchColumns('cards', ['image', 'title', 'organizer', 'poppup_desc', 'event_link', 'logo']);
        return new RelaxCollection($cards);
    }

}