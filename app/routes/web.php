<?php

use App\Controllers\DisciplinesChatController;
use App\Controllers\DisciplinesController;
use App\Controllers\DisciplinesCoursesController;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegistrationController;
use App\Controllers\RelaxController;
use App\Controllers\SosController;
use App\Controllers\SosDocumentController;
use App\Controllers\SosEntranceController;
use App\Controllers\SosExamsController;
use App\Controllers\SosInfoController;
use App\Controllers\SosLecturesController;
use App\Controllers\SosProgramController;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

return simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute("GET", '/relax', [RelaxController::class, 'showPage']);
    $r->addRoute("GET", "/", [IndexController::class, 'showPage']);
    $r->addRoute('GET', '/register', [RegistrationController::class, 'showPage']);
    $r->addRoute('POST', '/register', [RegistrationController::class, 'registrationProcess']);
    $r->addRoute('GET', '/login', [LoginController::class, 'showPage']);
    $r->addRoute('GET','/sos',[SosController::class, 'showPage']);
    $r->addRoute('GET', '/sos/documents', [SosDocumentController::class, 'showPage']);
    $r->addRoute('GET', '/sos/entrance', [SosEntranceController::class, 'showPage']);
    $r->addRoute('GET', '/sos/exams', [SosExamsController::class, 'showPage']);
    $r->addRoute('GET', '/sos/info', [SosInfoController::class, 'showPage']);
    $r->addRoute('GET', '/sos/program', [SosProgramController::class, 'showPage']);
    $r->addRoute('GET', '/sos/lectures', [SosLecturesController::class, 'showPage']);
    $r->addRoute('GET','/disciplines', [DisciplinesController::class, 'showPage']);
    $r->addRoute('GET', '/disciplines/chat', [DisciplinesChatController::class, 'showPage']);
    $r->addRoute('GET', '/disciplines/courses', [DisciplinesCoursesController::class, 'showPage']);
});