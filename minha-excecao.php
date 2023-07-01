<?php

class MinhaExcecao extends Exception
{
    public function exibeDaniel()
    {
        echo 'Daniel';
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeDaniel();
}