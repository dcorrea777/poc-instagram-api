<?php
    declare(strict_types=1);
    namespace Instagram\Infraestructure\Controllers;

use Instagram\Application\UseCases\ListAlbum;
use Instagram\Domain\Entities\Album;
use Instagram\Infraestructure\Adapters\Repositories\AlbumRepositorie;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class AlbumCOntroller implements ControllerInterface
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $album = new AlbumRepositorie();

        $list = new ListAlbum($album);
        
        $json = json_encode($list->apply(),JSON_PRETTY_PRINT);
        $response->getBody()->write($json);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
}