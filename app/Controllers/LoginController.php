<?php

namespace App\Controllers;

class LoginController
{
    public function showPage(): void
    {
        require_once __DIR__ . '/../../view/form/entrance.html';
    }
}