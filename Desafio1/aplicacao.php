<?php

//$nome = $argv[1];
//$sobrenome = $argv[2];
////echo $nome . PHP_EOL;
//
//$nomeCompleto = $nome . " " . $sobrenome;
//echo $nomeCompleto. PHP_EOL;


$argumento1 = $argv[1];
$argumento2 = $argv[2];

function verSeELink($argumento1)
{
    $texto = "//www";
    $pasta = 'docs/';
    $caminho = $pasta . $argumento1;
    $verficacao = strripos($argumento1, $texto);
    if($verficacao === false){
        return $caminho;
    } else {
        return $argumento1;
    }
}
// $determinando o caminho do arquivo
$caminho = verSeELink($argumento1);

//cria caminho para a pasta arquivoBase64
$pasta = 'arquivoBase64/';
$caminho2 = $pasta . $argumento2;


// 1 - transforma o coteudo (arquivo ou link) recebido em string
// 2 - transforma a string em base_64
// 3 - pega o base_64 e salva em um arquivo na pasta arquivoBase64

$conteudo_arquivo = file_get_contents($caminho);
$terra_base_64 = base64_encode($conteudo_arquivo);
file_put_contents($caminho2, $terra_base_64);



//$terra_base_64 = file_get_contents("carta.txt");
//$conteudo_em_bytes = base64_decode($terra_base_64);
//file_put_contents("arquivoBase64/carta_2.pdf", $conteudo_em_bytes);