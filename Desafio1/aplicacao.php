<?php

//$nome = $argv[1];
//$sobrenome = $argv[2];
////echo $nome . PHP_EOL;
//
//$nomeCompleto = $nome . " " . $sobrenome;
//echo $nomeCompleto. PHP_EOL;


$argumento1 = $argv[1];
$argumento2 = $argv[2];

<<<<<<< HEAD
function verificar($argumento1)
{
    $texto = "//";
    $pasta = 'docs/';
    $caminho = $pasta . $argumento1;
    $verficacao = strripos($argumento1, $texto);

=======
function verSeELink($argumento1)
{
    $texto = "//www";
    $pasta = 'docs/';
    $caminho = $pasta . $argumento1;
    $verficacao = strripos($argumento1, $texto);
>>>>>>> a7ad7b9f3d6a2dedc7d72b8c77660cf83cdd69f5
    if($verficacao === false){
        return $caminho;
    } else {
        return $argumento1;
    }
}
// $determinando o caminho do arquivo
<<<<<<< HEAD
$caminho = verificar($argumento1);
=======
$caminho = verSeELink($argumento1);
>>>>>>> a7ad7b9f3d6a2dedc7d72b8c77660cf83cdd69f5

//cria caminho para a pasta arquivoBase64
$pasta = 'arquivoBase64/';
$caminho2 = $pasta . $argumento2;


// 1 - transforma o coteudo (arquivo ou link) recebido em string
// 2 - transforma a string em base_64
// 3 - pega o base_64 e salva em um arquivo na pasta arquivoBase64

$conteudo_arquivo = file_get_contents($caminho);
<<<<<<< HEAD
$base_64 = base64_encode($conteudo_arquivo);
file_put_contents($caminho2, $base_64);
=======
$terra_base_64 = base64_encode($conteudo_arquivo);
file_put_contents($caminho2, $terra_base_64);
>>>>>>> a7ad7b9f3d6a2dedc7d72b8c77660cf83cdd69f5



//$terra_base_64 = file_get_contents("carta.txt");
//$conteudo_em_bytes = base64_decode($terra_base_64);
//file_put_contents("arquivoBase64/carta_2.pdf", $conteudo_em_bytes);