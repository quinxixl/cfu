<?php

namespace App\Controllers;


class IndexController
{
    public function showPage(): void
    {
        require_once __DIR__ . '/../../view/index.html';

    }
}