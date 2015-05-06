<?php
#Estrutura de controle

$array = array('Nome'=> 
			array('Marcio','Ramos'),
		'Idade'=>
			array('33','34'),
		'Email'=>
			array('m@mrs.com','r@mrs.net'));

#var_dump($array);

#Exemplo: vem do banco de dados

array(array(0=>'nome',1=>'idade'),
      array('nome_coluna1'=>'nome','coluna2'=>'idade'));

foreach($array as $valores => $valor){

	
	echo 'Valores: ', $valores, ' - ' , PHP_EOL;

	foreach($valor as $item):
		echo $item,  PHP_EOL;
	endforeach;

}




?>
