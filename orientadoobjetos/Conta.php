<?php

class Conta
{

    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;


    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function defineCpf(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "O valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNome():string
    {
        return $this->nomeTitular;
    }
    public function recuperarCpf():string
    {
        return $this->cpfTitular;
    }

}

