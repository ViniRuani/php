<?php
session_start();


print_r($_SESSION);

$_SESSION['outro'] = 'Valores add no terceiro arquivo';

//session_destroy();

echo session_id();

session_regenerate_id();

?>
