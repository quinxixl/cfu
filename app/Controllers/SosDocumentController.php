<?php

namespace App\Controllers;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class SosDocumentController
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
        echo $this->twig->render('@sos/document_sos.html.twig', ['tableData' => $this->getMainData()]);
    }

    private function getMainData(): array
    {
        return [
            [
                'name' => 'История России',
                'count' => '13 лекций',
                'desc' => [
                    'первая', 'vtoraya', 'tretya', 'fourth', 'fifth','sixth', 'seven'
                ]
            ],
            [
                'name' => 'Человек и право',
                'count' => '14 лекций',
                'desc' => [
                    'первая', 'vtoraya', 'tretya', 'fourth', 'fifth','sixth', 'seven'
                ]
            ],
            [
                'name' => 'Высшая математика',
                'count' => '10 лекций',
                'desc' => [
                    'первая', 'vtoraya', 'tretya', 'fourth', 'fifth','sixth', 'seven'
                ]
            ],
            [
                'name' => 'Основы Российской Государственности',
                'count' => '12 лекций',
                'desc' => [
                    'первая', 'vtoraya', 'tretya', 'fourth', 'fifth','sixth', 'seven'
                ]
            ],
            [
                'name' => 'Математический анализ и чето еще',
                'count' => '9 лекций',
                'desc' => [
                    'первая', 'vtoraya', 'tretya', 'fourth', 'fifth','sixth', 'seven'
                ]
            ]
        ];
    }
}