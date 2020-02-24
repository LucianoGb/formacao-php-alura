<?php

//minha resolução FORMULA IMC = PESO / ALTURA * ALTURA

$peso = 80;
$altura = 1.75;
$imc = $peso / ($altura * $altura);

if ( $imc < 18.5){
    echo "Abaixo do PESO";
}else if( $imc >= 18.5 && $imc< 25){
    echo "Peso Normal";
}else if( $imc >= 25 && $imc < 30){
    echo "Sobrepeso";
}else {
    echo "Acima do Peso";
}

