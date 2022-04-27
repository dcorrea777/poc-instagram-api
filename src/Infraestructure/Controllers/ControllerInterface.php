<?php
    declare(strict_types=1);
    namespace Instagram\Infraestructure\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ControllerInterface
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args):ResponseInterface;
}