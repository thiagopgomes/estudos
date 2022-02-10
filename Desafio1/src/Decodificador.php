<?php

namespace App;

class Decodificador
{
    private string $caminhoDoArquivo;
    private string $pastaDestino;

    public function __construct(string $caminhoDoArquivo, string $pastaDestino)
    {
        $this->caminhoDoArquivo = $caminhoDoArquivo;
        $this->pastaDestino = $pastaDestino;
    }

    public function decodifica(): void
    {
        $base_64 = file_get_contents($this->caminhoDoArquivo);
        $conteudo_em_bytes = base64_decode($base_64);
        file_put_contents($this->pastaDestino, $conteudo_em_bytes);
    }

}