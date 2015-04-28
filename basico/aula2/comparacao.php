<?php

$var1 = (int) 5;
$var2 = (string) 5;

if($var1 === $var2){
	echo 'Sao Iguais';
}else{
	echo 'Nao sao iguais';
}

echo gettype($var2);

echo PHP_EOL;

?>
