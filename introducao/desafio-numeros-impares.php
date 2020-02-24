<?php
// minha solução
for ( $i = 1 ; $i <= 100 ; $i +=2 ){
    echo $i . PHP_EOL;
};

//solução do instrutor.

for ( $contador = 1 ; $contador < 100 ; $contador++){
    if($contador % 2 != 0){
        echo $contador . PHP_EOL;
    }
}