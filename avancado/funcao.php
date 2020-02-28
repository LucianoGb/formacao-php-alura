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
 * OBS: De acordo com o instrutor do curso, uma subrotina e função apesar de terem sintaxe parecida elas são diferente pelo
 * seguinte motivo, uma subrotina executa o que tem para executar e não retorna nenhum valor, já a função ela faz o mesmo mas ela retorna
 * valores.
 */
//subrotina para exibir mensagens
function exibirMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}
// função feita para retirar saldo de uma conta e faz a verificação para saldo não ficar negativo
function sacar ( $conta, $valorSacar){
    if ($valorSacar > $conta['saldo']){
        exibirMensagem('Saldo insuficiente');
    }else{
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}
// função feita para realizar deposito em uma conta o float na função é para dizer que o parâmetro só aceitará valor decimal
// estou definindo os tipos dos parâmetros e valor retornado pela função.
function depositar ( array $conta, float $valorDeposito):array
{
    if ($valorDeposito > 0){
        $conta['saldo'] += $valorDeposito;
    }else{
        exibirMensagem('Deposito precisam ser positivos');
    }

    return $conta;
}
// estamos selecionando a conta desejada e tentamos retirar um valor de seu saldo, com isso estamos alterando a mesma
$contasCorrentes[32165498712] = sacar($contasCorrentes[32165498712], 1000);
$contasCorrentes[10987654321] = depositar($contasCorrentes[10987654321], -550);
/*
 * CPF -> Indice de contasCorrentes
 * CONTA -> Valor contendo outro array com outros indices e valores.
 */
foreach ($contasCorrentes as $cpf => $conta){
    exibirMensagem($cpf . " " .$conta['titular']." ".$conta['saldo']);
}