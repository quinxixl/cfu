<?php

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegistrationController;
use App\Controllers\RelaxController;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

return simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute("GET", '/relax', [RelaxController::class, 'showPage']);
    $r->addRoute("GET", "/", [IndexController::class, 'showPage']);
    $r->addRoute('GET', '/register', [RegistrationController::class, 'showPage']);
    $r->addRoute('POST', '/register', [RegistrationController::class, 'registrationProcess']);
    $r->addRoute('GET', '/login', [LoginController::class, 'showPage']);
});