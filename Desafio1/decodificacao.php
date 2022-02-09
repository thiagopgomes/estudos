<?php

use Desafio1\Base64\Decodificador\Decodificador;
use Desafio1\Base64\Verificador\Verificador;

require_once 'src/Verificador.php';
require_once 'src/Decodificador.php';

$argumento1 = $argv[1];
$argumento2 = $argv[2];

$verificador = new Verificador($argumento1, $argumento2);
$caminhoDoArquivo = $verificador->bucarArquivoBase64();

$pastaDestino = $verificador->defineOndeSalva();

$decodificador = new Decodificador($caminhoDoArquivo, $pastaDestino);
$decodificador->decodifica();

