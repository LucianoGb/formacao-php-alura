<?php

$contasCorrentes = [
    32165498712 => [
        'titular' => 'Luciano',
        'saldo' => '1360'
    ],
    12345678910 => [
        'titular' => 'Carlos',
        'saldo' => '10000'
    ],
    10987654321 => [
        'titular' => 'Alberto',
        'saldo' => '20000'
    ],
];
/*
 * CPF -> Indice de contasCorrentes
 * CONTA -> Valor contendo outro array com outros indices e valores.
 */
foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " .$conta['titular'] . PHP_EOL;
}