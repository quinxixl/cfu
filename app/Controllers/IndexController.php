<?php

namespace App\Controllers;


use App\Database\Database;

class IndexController
{
    public function showPage(): void
    {
        require_once __DIR__ . '/../../view/index.html';
    }
}