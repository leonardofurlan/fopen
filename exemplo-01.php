<?php 

/*
w+ apenas escrita, não modifica o que já existe
a+ escrita e adiciona conteúdo ao final

*/

$file = fopen("log.txt", "a+");

fwrite($file, date("d-m-Y H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";

 ?>