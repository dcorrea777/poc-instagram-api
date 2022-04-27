<?php
    declare(strict_types=1);
    namespace Instagram\Application\UseCases;

use Instagram\Infraestructure\Adapters\Repositories\AlbumRepositorie;

final class ListAlbum
{
    private AlbumRepositorie $albumRepositorie;

    public function __construct(AlbumRepositorie $albumRepositorie)
    {
        $this->albumRepositorie= $albumRepositorie;
    }

    public function apply():array
    {
        $data = $this->albumRepositorie->get();
        $t = [];
        foreach($data as $item) {
            $t[] = $item->toArray();
        }
        
        return $t;
    
    }
}