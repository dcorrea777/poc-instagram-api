<?php
    declare(strict_types=1);
    namespace Instagram\Application\UseCases;
use Instagram\Infraestructure\Adapters\Repositories\FindRepository;

final class FindAlbum
{
    private FindRepository $findRepository;

    public function __construct(FindRepository $findRepository)
    {
        $this->findRepository = $findRepository;
    }
    
    public function findRepository(int $id):array
    {
        $result =  $this->findRepository->find($id);
        return $result->toArray();
    } 


}