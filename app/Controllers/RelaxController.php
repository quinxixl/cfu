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
        echo $this->twig->render('@relax/relax.html.twig', ['sliderData' => $this->getSliderData(), 'cardData' => $this->getCardData()]);
    }

    private function getSliderData(): array
    {
        $data = Database::fetchColumns('cards', ['date', 'image', 'description', 'title', 'organizer_logo'], 'id <= ?', [6]);

        foreach ($data as &$row) {
            if (isset($row['date'])) {
                $row['date'] = date('d.m', strtotime($row['date']));
            }
        }

        return $data;
    }
    private function getCardData(): array
    {
        return Database::fetchColumns('cards', ['image', 'title', 'organizer_logo', 'poppup_desc', 'event_link', 'logo']);
    }
    public function filter(): void
    {
        $search = $_GET['search'] ?? '';
        $type = $_GET['type'] ?? '';
        $sort = $_GET['sort'] ?? '';

        $events = Database::fetchFilteredEvents($search, $sort, $type);

        foreach ($events as &$event) {
            if (isset($event['date'])) {
                $event['date'] = date('d.m', strtotime($event['date']));
            }
        }

        header('Content-Type: application/json');
        echo json_encode($events);
    }
}