<?php
    declare(strict_types=1);
    namespace Instagram\Infraestructure\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController implements ControllerInterface
{
    public function index(Request $request, Response $reponse, array $args): Response
    {
        $reponse->getBody()->write('Hello Word Controller');
        return $reponse;
    }
}