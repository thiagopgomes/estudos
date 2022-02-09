<?php

namespace Desafio1\Base64\Codificador;

class Codificador
{
    private string $caminho;
    private string $salvarEm;

    public function __construct(string $caminho, string $salvarEm)
    {
        $this->caminho = $caminho;
        $this->salvarEm = $salvarEm;
    }

    public function codifica(): void
    {
        $conteudo_arquivo = file_get_contents($this->caminho);
        $base_64 = base64_encode($conteudo_arquivo);
        file_put_contents($this->salvarEm, $base_64);
    }
}