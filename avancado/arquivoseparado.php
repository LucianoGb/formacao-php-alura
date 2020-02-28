<?php
// inclue o um arquivo a parte mas caso o nome esteja incorreto o programa contina sendo executado
//include 'funcoes.php';

// faz a importação do codigo do arquivo abaixo porém caso o nome seja errado ele não executa o resto do programa.
require 'funcoes.php';
// garante que o arquivo seja incluido apenas uma vez
//require_once  'arquivo.php';

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

$contasCorrentes[32165498712] = sacar($contasCorrentes[32165498712], 1000);
$contasCorrentes[10987654321] = depositar($contasCorrentes[10987654321], -550);
letraMaiuscula($contasCorrentes[12345678910]);
foreach ($contasCorrentes as $cpf => $conta){
    exibirMensagem($cpf . " " .$conta['titular']." ".$conta['saldo']);
}