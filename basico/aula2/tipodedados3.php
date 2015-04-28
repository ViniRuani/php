<?php

#Array

#1 Forma

#$array = array();

#2 Forma
#$array[];

#3 Forma
#$array = array('1','2',3,array('Marcio'));

#$array['1','2'];

#$array1 = array('1','2','3');
$array2 = array('A','B','C');

#$array = array($array1,$array2);

#echo $array['0']['0'];

$array = array('m'=>1,7=>'Marcio',2=>'Vinicius',3=>$array2);

var_dump($array);

#echo gettype($array);


echo PHP_EOL;
?>
