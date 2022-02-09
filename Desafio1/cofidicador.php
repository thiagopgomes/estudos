<?php

use Desafio1\Base64\Verificador\Verificador;

require_once 'src/Verificador.php';

$argumento1 = $argv[1];
$argumento2 = $argv[2];

// cria um Verificador, que ver o tipo de aquivo passado
// e determina a pasta em que vai buscar o arquivo INCIAL que deve ser codificado

$verificador = new Verificador($argumento1, $argumento2);
$caminho = $verificador->buscaArquivoInicial();


//define pasta onde será salvo o arquivo codificado em BASE_64

$salvarEm = $verificador->defineOndeSalvaBase64();

// 1 - transforma o coteudo (arquivo ou link) recebido em string
// 2 - transforma a string em base_64
// 3 - pega o base_64 e salva em um arquivo na pasta arqCodifcadoEmBase64

$conteudo_arquivo = file_get_contents($caminho);
$base_64 = base64_encode($conteudo_arquivo);
file_put_contents($salvarEm, $base_64);
