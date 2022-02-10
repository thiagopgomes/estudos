<?php

require_once 'vendor/autoload.php';

use App\Decodificador;
use App\Verificador;

$verificador = new Verificador($argv[1], $argv[2]);
$caminhoDoArquivo = $verificador->bucarArquivoBase64();

$pastaDestino = $verificador->defineOndeSalva();

$decodificador = new Decodificador($caminhoDoArquivo, $pastaDestino);
$decodificador->decodifica();
