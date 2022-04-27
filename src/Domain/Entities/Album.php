<?php
    declare(strict_types=1);
    namespace Instagram\Domain\Entities;


final class Album
{
    private int $id;
    private string $title;
    private string $comment;
    private string $path;

    public function __construct(int $id,string $title, string $comment, string $path)
    {
        $this->id = $id;
        $this->title = $title;
        $this->comment = $comment;
        $this->path = $path;
    }

    public function toArray():array
    {
        return[
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'comment' => $this->getComment(),
            'path' => $this->getPath()
        ];
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getComment():string
    {
        return $this->comment;
    }


    public function getPath():string
    {
        return $this->path;
    }

    public function getId():int
    {
        return $this->id;
    }
}
