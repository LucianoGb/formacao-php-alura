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
// o foreach é usado quando não sabemos os valores dos indices, ele basicamente vai verificar
// que a variavel conta existe dentro do array contascorrentes, ele verifica o tamanho do array por baixo dos panos.
foreach ($contasCorrentes as $conta){
    echo $conta['titular'] . PHP_EOL;
}