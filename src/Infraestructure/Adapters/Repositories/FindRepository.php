<?php
    declare(strict_types=1);
    namespace Instagram\Infraestructure\Adapters\Repositories;

use Exception;
use Instagram\Domain\Entities\Album;

final class FindRepository
{
    private Album $album;
    private int $id;

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

    public function find(int $id):Album
    {
        foreach($this->dbRepository() as $data){
            if($data['id'] == $id){
                return $arrAlbumObj= new Album(
                $data['id'],
                $data['title'],
                $data['comment'],
                $data['path']
            );

            }
        }
        
    }
}