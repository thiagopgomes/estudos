<?php

$argumento = $argv[1];

$nome = urlencode($argumento);

//echo $nome;

$conteudo_arquivo = file_get_contents($argumento);
$terra_base_64 = base64_encode($conteudo_arquivo);
file_put_contents('link.txt', $terra_base_64);
