<?php
require_once  'Conta.php';

$novaConta = new Conta();
$novaConta->defineCpf("080.188.584-11");
$novaConta->defineNomeTitular("Luciano") ;
$novaConta->depositar(500);

var_dump($novaConta);

echo "Nome: {$novaConta->recuperarNome()} CPF: {$novaConta->recuperarCpf()} Saldo: {$novaConta->recuperarSaldo()}" .PHP_EOL;

echo "----";

$conta2 = new Conta();

$novaConta->transferir(300, $conta2);

echo "conta 1 {$novaConta->recuperarSaldo()} e conta 2 {$conta2 -> recuperarSaldo()}";
