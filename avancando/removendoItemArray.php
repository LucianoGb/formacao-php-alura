<?php
require_once 'funcoes.php';
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
// apaga variavel da memoria
unset($contasCorrentes['10987654321']);

foreach ($contasCorrentes as $cpf => $conta){
    exibirMensagem("$cpf {$conta['titular']}");
}