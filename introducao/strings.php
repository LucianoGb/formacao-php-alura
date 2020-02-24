<?php
echo "olá mundo \n";
//concatenando, podemos usar VÍRGULA OU PONTO
$nome = 'Luciano';
echo 'Meu nome é: '. $nome;
// SE QUISERMOS CONCATENAR DENTRO DA STRING PRECISAMOS USAR ASPAS DUPLA " PARA QUE O PHP POSSA ENTENDER AS VARIÁVEIS

echo "Meu nome é $nome \n";
// quando utilizamos aspas simples o php indentifica tudo como string

//outra forma de quebra de linha mas que não precisa se preocupar com o SO

echo "Quebrando Linha" . PHP_EOL;
echo 'funcionou!';