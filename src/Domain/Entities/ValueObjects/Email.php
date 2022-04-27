<?php
    declare(strict_types=1);
    namespace Instagram\Domain\Entities\ValueObjects;

final class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $this->email= $email;
        }
    }
}