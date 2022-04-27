<?php
    declare(strict_types=1);
    namespace Instagram\Infraestructure\Adapters\Repositories;

use Instagram\Domain\Entities\Album;

final class AlbumRepositorie
{
    private Album $album;
  
    private function dbRepository():array
    {
        return [

            [
                'id' => 1,
                'title' => 'welitinho da massa',
                'comment' => 'welitinho programandinho',
                'path' => '/app/albuns'
            ],
            
            [
                'id' => 2,
                'title' => 'dego',
                'comment' => 'dego promandinho',
                'path' => '/app/albuns'
            ],
            
            [
                'id' => 3,
                'title' => 'lek',
                'comment' => 'lek programandinho',
                'path' => '/app/albuns'
            ]
        ];
    }

    public function get(): array
    {
        // consutlta sql
        $arrAlbumObj = [];
        foreach($this->dbRepository() as $data){
             $arrAlbumObj[] = new Album($data['id'],$data['title'],$data['comment'],$data['path']);
        }
        
        return $arrAlbumObj;
        
   }

  
}
