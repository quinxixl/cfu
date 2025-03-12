<?php
require_once __DIR__ . '/../vendor/autoload.php';
const APP_PATH = __DIR__;

use FastRoute\Dispatcher;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new \Twig\Loader\FilesystemLoader();
$loader->addPath(APP_PATH . '/../view/relax', 'relax');
$loader->addPath(APP_PATH . '/../view/sos', 'sos');
$twig = new \Twig\Environment($loader);

$dispatcher = require_once APP_PATH . '/../app/routes/web.php';

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo "<h1>404 | Page not found</h1>";
        break;
    case Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo "405 | Method not allowed";
        break;
    case Dispatcher::FOUND:
        [$class, $method] = $routeInfo[1];
        $vars = $routeInfo[2];

        $controller = new $class($twig);
        call_user_func_array([$controller, $method], $vars);
        break;
}
