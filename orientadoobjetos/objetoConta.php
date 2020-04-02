<?php
require_once  'Conta.php';

$novaConta = new Conta();
$novaConta->cpfTitular = "080.188.584-11";
$novaConta->nomeTitular = "Luciano Gouveia";
$novaConta->saldo = 500;

var_dump($novaConta);

echo "Nome: $novaConta->nomeTitular CPF: $novaConta->cpfTitular Saldo: $novaConta->saldo" .PHP_EOL;

echo "----";

$conta2 = new Conta();
$conta2->saldo = 100;

$novaConta->transferir(300, $conta2);

echo "conta 1 {$novaConta->saldo} e conta 2 {$conta2 -> saldo}";
