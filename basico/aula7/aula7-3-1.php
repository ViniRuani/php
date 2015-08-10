<?php
session_start();


print_r($_SESSION);

$_SESSION['novo'] = 'Novos valores add';


echo PHP_EOL, session_id(), PHP_EOL;


?>
