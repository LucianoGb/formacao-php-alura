<?php

class Conta {

    public $cpfTitular;
    public  $nomeTitular;
    public $saldo;

    public function sacar (float $valorSacar):void {
        if( $valorSacar <= $this->saldo) {

            $this->saldo -= $valorSacar;
        } else{
            echo "Sem saldo";
        }
    }

    public function depositar ( float $valorDeposito):void {
        if ( $valorDeposito < 0) {
            echo "O valor precisa ser positivo";
        }else {
            $this->saldo += $valorDeposito;
        }
    }
    public function transferir ( float $valor, Conta $contaDestino):void {
        if ($valor > $this->saldo){
            echo "Saldo insuficiente";

        }else {
            $this->sacar($valor);
            $contaDestino->depositar($valor);
        }
    }
}

