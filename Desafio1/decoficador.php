<?php

use Desafio1\Base64\Verificador\Verificador;

require_once 'src/Verificador.php';

$argumento1 = $argv[1];
$argumento2 = $argv[2];

$verificador = new Verificador($argumento1, $argumento2);
$caminhoDoArquivo = $verificador->bucarArquivoBase64();


$pastaDestino = $verificador->defineOndeSalva();;


$base_64 = file_get_contents($caminhoDoArquivo);
$conteudo_em_bytes = base64_decode($base_64);
file_put_contents($pastaDestino, $conteudo_em_bytes);


