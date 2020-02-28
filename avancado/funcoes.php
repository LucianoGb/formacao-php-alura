<?php
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
// desse jeito o valor esta sendo alterado apenas na função pois o valor da conta é apenas um clone e não esta alterando o de origem, podemos
// verificar ao executar o arquivoseparado.php
//function letraMaiuscula ( $conta )
//{
//    $conta['titular'] = strtoupper($conta['titular']);
//    echo  $conta['titular'] . PHP_EOL;
//
//}

/*
 * se executarmos a função abaixo colocando & ao lado do parametros, estamos pegando a referência ou seja o valor na memoria da variavel
 * de origem.
 * E com isso o valor é alterado e a função funciona.
 */
function letraMaiuscula ( &$conta )
{
    $conta['titular'] = strtoupper($conta['titular']);
    echo  $conta['titular'] . PHP_EOL;

}