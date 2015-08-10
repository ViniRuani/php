<?php
session_start();

$_SESSION['valor'] = 'Valor passado';

print_r($_SESSION);

?>
