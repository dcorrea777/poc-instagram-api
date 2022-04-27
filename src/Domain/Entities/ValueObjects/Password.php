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
      /*
        verifica se a senha tem entre 8 e 16 caracteres
        verifica se a senha tem pelo menos uma letra maiuscula e um numero
     */ 
    private function valitadePass(string $pass):bool
    {
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{8,16}$/', $pass)){
            return true;
        }else{
            throw new Exception('A senha deve conter entre 8 e 16
             caracteres e ter pelo menos 1 letra Maiscula e numero');
            return false;
        }
    }

}   
