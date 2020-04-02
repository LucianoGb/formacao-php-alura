<?php
/*
 * Abaixo segue 3 formas de adicionar dados ao um Array
 */
$idade = [10, 11, 50, 34, 55, 32];

//adicionando sabendo o indice

$idade[6] = 100;

// adicionando usando a função count

$idade[count($idade)] = 111;

//Fazendo o php adicionar sempre na ultima posição disponível

$idade[] = 255;

foreach ($idade as $value){
    echo $value . PHP_EOL;
}
