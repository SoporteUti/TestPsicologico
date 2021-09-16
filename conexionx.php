<?php

$hostname_conexion = "localhost";
$username_conexion = "root";
$password_conexion = ".root.";

$conexion = mysql_connect($hostname_conexion, $username_conexion, $password_conexion) or die(mysql_error());
mysql_select_db(dbfmppartest2017,$conexion);

$sql = "DELETE FROM tb_aspirantes1;";
		$result = @mysql_query($sql,$conexion) or die (mysql_error());
		mysql_close();



?>