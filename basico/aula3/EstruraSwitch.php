<?php

$valor = $argv['1'];
define('QL',PHP_EOL);

switch ($valor)
{
	case 1:
		echo 'Vc digitou ', QL;	
	break;

	case 2:
		echo 'Vc digitou 2', QL;
	break;

	default:
		echo 'Vc nao digitou nem 1 ou 2', QL;
	break;

}

/* Anotaces:
   Quando usar:
     Em casos onde o if-else passa de duas sentenças
     ou em seu algoritimo que vc sabe de irá ou pode
     passar de mais de duas.

   Não Esquecer:
	Sempre use o Break e o Default;

*/

?>
