<?php
require_once  'funcoes.php';

$idade = [10, 11, 50, 34, 55, 32];
//função List que vai atribuindo os valores a cada variavel onde cada variavel é um indice do array de origem
list($idadeLuan, $idadeLucas, $idadeLuciano) = $idade;
echo " $idadeLuan $idadeLucas $idadeLuciano" .PHP_EOL;

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

foreach ($contasCorrentes as $cpf => $conta)
{
    // se a gente não informar a chave o php pré supõe que o array utiliza indice númerico e dará erro.
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    /* forma simplificada do código acima a partir do php 7.1
     * ['titular' => $titular, 'saldo' => $saldo] = $conta;
     */
    exibirMensagem($titular, $saldo);

}
