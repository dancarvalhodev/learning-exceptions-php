<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\NomeInvalidoException;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('111.111.111-11'),
            'A',
            new Endereco('AAAA', 'BBBB', 'CCCC', 'DDDD')
        )
    );
} catch (InvalidArgumentException $exception) {
    echo 'O CPF precisa ser válido';
    die;
} catch (NomeInvalidoException $exception) {
    echo 'O nome precisa ser válido';
    die;
}

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo 'Valor a depositar precisa ser positivo, seu hacker perigoso';
}