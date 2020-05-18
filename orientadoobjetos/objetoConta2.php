<?php
require_once  'Conta2.php';

$novaConta = new Conta2("Luciano", "080.188.584-11");
$novaConta2 = new Conta2("Luciano Gouveia", "080.188.584-12");
$novaConta3 = new Conta2("Luciano Jose", "080.188.584-13");

echo $novaConta->recuperarNome().PHP_EOL;
echo Conta2::recuperaNumerosDeContas();