<?php

// 1 - Usar o argv, ele é um comando que pega os argumentos passados por linha de comando.
// 2 - base64 é uma maneira inventada (deve ser pelo google) de transformar dados em texto. por exemplo uma imagem.
// 3 - file_get_contents() e file_put_contents() são métodos do php para ler e escrever dados.
// 4 - ler a documentação dos métodos da linha 3 na pagina oficial do php



$conteudo_arquivo = file_get_contents("gatinho.jpg");

$gatinho_base_64 = base64_encode($conteudo_arquivo);

file_put_contents("gatinho.txt", $gatinho_base_64);


//$conteudo_base_64 = file_get_contents("gatinho.txt");
//
//$conteudo_em_bytes = base64_decode($conteudo_base_64);
//
//file_put_contents("gatinho_2.jpg", $conteudo_em_bytes);
