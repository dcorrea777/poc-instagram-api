<?php
    declare(strict_types=1);
    namespace Instagram\Domain\Entities\ValueObjects;

use Exception;

final class Password
{
    private string $pass;

    public function __construct(string $pass)
    {
        if($this->valitadePass($pass)){
            $this->pass = md5($pass);
        }   
    }

    private function valitadePass(string $pass):bool
    {
        if(strlen($pass) >= 8){
            return true;
        }else{
            throw new Exception('Password is not valid');
            return false;
        }
    }

}   
