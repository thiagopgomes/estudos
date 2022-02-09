<?php

namespace Desafio1\Base64\Verificador;

class Verificador
{
    private static $texto = "//www";
    private static $pastaInicio = 'arquivoParaSerCodificado/';
    private static $pastaBase64 = 'arqCodifcadoEmBase64/';
    private static $pastaDecodificado = 'arquivoDecodificado/';

    private string $argumento1;
    private string $argumento2;

    public function __construct(string $argumento1, string $argumento2)
    {
        $this->argumento1 = $argumento1;
        $this->argumento2 = $argumento2;
    }

    public function buscaArquivoInicial(): string
    {
        $caminho = self::$pastaInicio . $this->argumento1;
        $verficacao = strripos($this->argumento1, self::$texto);

        if ($verficacao === false) {
            return $caminho;
        } else {
            return $this->argumento1;
        }
    }

    public function defineOndeSalvaBase64(): string
    {
        return self::$pastaBase64 . $this->argumento2;
    }

    public function defineOndeSalva(): string
    {
        return self::$pastaDecodificado . $this->argumento2;
    }

    public function bucarArquivoBase64(): string
    {
        return self::$pastaBase64 . $this->argumento1;
    }

}