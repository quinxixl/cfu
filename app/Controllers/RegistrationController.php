<?php

namespace App\Controllers;

//use Twig\Environment;
//use Twig\Error\LoaderError;
//use Twig\Error\RuntimeError;
//use Twig\Error\SyntaxError;

class RegistrationController
{
//    private Environment $twig;
//    public function __construct(Environment $twig)
//    {
//        $this->twig = $twig;
//    }
//
//    /**
//     * @throws SyntaxError
//     * @throws RuntimeError
//     * @throws LoaderError
//     */
    public function showPage(): void
    {
        require_once __DIR__ . '/../../view/form/registration.html';
    }

    public function registrationProcess()
    {
        if (! $_SERVER['CONTENT_TYPE'] === 'application/json') {
            http_response_code(400);
            echo json_encode(['success'=> 'false', 'message'=>'Invalid content type']);
            exit("Bad request");
        }

        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        echo json_encode(["success" => true, "message" => "Регистрация успешна", "data" => $data['name']]);
        exit();
//        header('Location: /');
    }
}