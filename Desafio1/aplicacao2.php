<?php

$argumento1 = $argv[1];
$argumento2 = $argv[2];


$pastaOrigem = 'arquivoBase64/';
$caminho = $pastaOrigem . $argumento1;
$pastaDestino = 'final/';
$caminho2 = $pastaDestino . $argumento2;


<<<<<<< HEAD
$base_64 = file_get_contents($caminho);
$conteudo_em_bytes = base64_decode($base_64);
=======
$terra_base_64 = file_get_contents($caminho);
$conteudo_em_bytes = base64_decode($terra_base_64);
>>>>>>> a7ad7b9f3d6a2dedc7d72b8c77660cf83cdd69f5
file_put_contents($caminho2, $conteudo_em_bytes);

//$terra_base_64 = file_get_contents("arquivoBase64/gatinho.txt");
//$conteudo_em_bytes = base64_decode($terra_base_64);
//file_put_contents("final/gatinho_4.png", $conteudo_em_bytes);


