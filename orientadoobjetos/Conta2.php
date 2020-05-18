<?php


class Conta2
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    //membro estatico - variavel apenas da classe.
    private static $numeroDeContas = 0;

    //construtor da classe
    public function __construct(string $nome, string $cpf)
    {
        $this->cpfTitular = $cpf;
        $this->nomeTitular= $nome;
        $this->validaNomeTitular($this->nomeTitular);
        $this->saldo = 0;
        // O acesso aos membros estaticos se faz com nome da Classe ou self e ::
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if ( self::$numeroDeContas > 2){
            echo "há mais de uma conta ativa";
            self::$numeroDeContas--;
        }
    }

    private function validaNomeTitular(string $nomeTitular){
        if (strlen($nomeTitular) < 5){
            echo "Impossível criar conta, nome muito pequeno";
        }
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

    public static function recuperaNumerosDeContas():int {
        return self::$numeroDeContas;
    }
}