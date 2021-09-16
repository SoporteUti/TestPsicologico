<?php
//fijo el date de hoy
$date_month = date('m');
$date_year = date('Y');
$date_day = date('d');
$Date = "$date_year-$date_month-$date_day";

$filename = "dbtestspsicologico.sql";

//Datos BD
$usuario = "roor";
$passwd = "root";
$bd = "dbtestspsicologico";

header("Pragma: no-cache");
header("Expires: 0");
header("Content-Transfer-Encoding: binary");
header("Content-type: application/force-download");
header("Content-Disposition: attachment; filename=$filename");

include("conexion.php");
$executa = "mysqldump.exe --opt --password=$password_conexion --user=$username_conexion  --opt dbtestspsicologico";
system($executa, $resultado);

if ($resultado) { echo "<H1>Error ejecutando comando: $executa</H1>\n"; }

?>