<?php
session_start();
$codigo=$_GET['var'];
$_SESSION[acce] = true;
$_SESSION[cod] = $codigo;
echo'<script type="text/JavaScript">';
echo'{';
	echo'location.href="rev_pruebas.php";';
echo'}';
echo'</script>';
?>