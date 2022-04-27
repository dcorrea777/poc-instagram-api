<?php
    declare(strict_types=1);
    namespace Instagram\Infraestructure\Controllers;

use Instagram\Application\UseCases\FindAlbum;
use Instagram\Infraestructure\Adapters\Repositories\FindRepository;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class FindController implements ControllerInterface
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $repository = new FindRepository();
        $findAlbum = new FindAlbum($repository);

        $json = json_encode($findAlbum->findRepository((int)$args['id']),JSON_PRETTY_PRINT);

        $response->getBody()->write($json);
        
        return $response->withHeader('content-type','application/json')->withStatus(200);

    
    }
}