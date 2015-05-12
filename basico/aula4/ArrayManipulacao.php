<?php

/*
Introdução:
	Arrays:
Formas de Manipular Arrays:
*/

$array1 = array('Márcio','33');
$array2 = array('Vinicius',23); 

#Juntando dois arrays em um
$array = array_merge($array1,$array2);

$arrayKey = array_keys($array);

#var_dump($arrayKey);

$valor = 1;

if(is_array($valor)){
	echo 'Sim é um array';
}else{ echo 'Não é um array'; }

echo PHP_EOL;

?>
