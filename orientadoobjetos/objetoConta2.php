<?php
require_once  'Conta2.php';

$novaConta = new Conta2("Luciano", "080.188.584-11");

echo $novaConta->recuperarNome();