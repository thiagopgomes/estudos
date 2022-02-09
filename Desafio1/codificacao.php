<?php

use Desafio1\Base64\Codificador\Codificador;
use Desafio1\Base64\Verificador\Verificador;

require_once 'src/Verificador.php';
require_once 'src/Codificador.php';

$argumento1 = $argv[1];
$argumento2 = $argv[2];

// cria um Verificador, que ver o tipo de aquivo passado
// e determina a pasta em que vai buscar o arquivo INCIAL que deve ser codificado

$verificador = new Verificador($argumento1, $argumento2);
$caminho = $verificador->buscaArquivoInicial();


//define pasta onde será salvo o arquivo codificado em BASE_64
$salvarEm = $verificador->defineOndeSalvaBase64();

//cria um codificador e chama a função que codifica em Base_64
$codificador = new Codificador($caminho, $salvarEm);
$codificador->codifica();
