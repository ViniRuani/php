<?php

for($x=1; $x<=10000; $x++){

	#echo $x, PHP_EOL;
	echo 'Esse é para: ', PHP_EOL;
	$var = ($x%2 == 0) ? $x : '';
	echo $var, PHP_EOL;
	sleep(2);
}


?>
