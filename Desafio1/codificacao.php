<?php

require_once 'vendor/autoload.php';

use App\Codificador;
use App\Verificador;

// cria um Verificador, que ver o tipo de aquivo passado
// e determina a pasta em que vai buscar o arquivo INCIAL que deve ser codificado

$verificador = new Verificador($argv[1], $argv[2]);
$caminhoDoArquivo = $verificador->buscaArquivoInicial();


//define pasta onde será salvo o arquivo codificado em BASE_64
$destino = $verificador->defineOndeSalvaBase64();

//cria um codificador e chama a função que codifica em Base_64
$codificador = new Codificador($caminhoDoArquivo, $destino);
$codificador->codifica();
