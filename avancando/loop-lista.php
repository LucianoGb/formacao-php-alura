<?php
//realizando um loop na lista.

$idade = [1, 5, 6, 7, 20, 30, 50, 40];
//função para saber o tamanho de uma Lista
//echo count($idade).PHP_EOL;
//echo "----------" . PHP_EOL;
for( $i = 0; $i < count($idade) ; $i++) {
    echo $idade[$i] . PHP_EOL;
}