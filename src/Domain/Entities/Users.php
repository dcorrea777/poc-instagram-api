<?php
    declare(strict_types=1);
    namespace Instagram\Domain\Entities;

use DateTimeInterface;
use Instagram\Domain\Entities\ValueObjects\Email;
use Instagram\Domain\Entities\ValueObjects\Password;

final class Users
{
    private int $id;
    private string $name;
    private string $lastName;
    private Email $email;
    private DateTimeInterface $birthDate;
    private Password $password;

    public function __construct(
        int $id,
        string $name,
        string $lastName,
        Email $email,
        DateTimeInterface $birthDate,
        Password $password
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->password = $password;
            
    }


    public function getId():int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

  
    public function getLastName():string
    {
        return $this->lastName;
    }

    public function getEmail():Email
    {
        return $this->email;
    }

    public function getBirthDate():DateTimeInterface
    {
        return $this->birthDate;
    }

    public function getPassword():Password
    {
        return $this->password;
    }
}