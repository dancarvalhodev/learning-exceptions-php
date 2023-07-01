<?php

namespace Alura\Banco\Modelo;

use DomainException;

class NomeInvalidoException extends DomainException
{
    public function __construct()
    {
        $mensagem = "Nome precisa ter pelo menos 5 caracteres";

        parent::__construct($mensagem);
    }
}