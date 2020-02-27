<?php
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => '1000'
];

$conta2 = [
    'titular' => 'Carlos',
    'saldo' => '10000'
];

$conta3 = [
    'titular' => 'Leonardo',
    'saldo' => '2500'
];

$contasCorrentes= [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    // o [$i} -> para pegar a posição do array e o ['titular'] -> estou definindo que quero apenas o valor da chave titular
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}