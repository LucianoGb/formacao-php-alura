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
foreach ($contasCorrentes as $cpf => $conta){
    // um jeito de chamar arrays associativos dentro da string
   // echo "Conta $cpf $conta[titular]".PHP_EOL;
   // ou podemos chamar como instrutou recomendou pois dá um padrão ao código separando por CHAVES {}
    echo "Conta $cpf {$conta['titular']}";
}
