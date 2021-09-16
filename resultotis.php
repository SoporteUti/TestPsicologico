<?php

$numotis=0;
$ciotis=0;

$sql="SELECT COUNT(*) AS num FROM tb_respotis t1 INNER JOIN tb_otis t2 ON t1.idotis=t2.idotis AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numotis = $row['num'];
}
mysql_free_result($result) or die (mysql_error());
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($numotis>=0 && $numotis<=16)
{
	$ciotis=65;
}
else if($numotis>=17 && $numotis<=31)
{
	$ciotis= 65 + ($numotis - 16);
}
else if($numotis>=32 && $numotis<=48)
{
	$ciotis= 65 + ($numotis - 15);
}
else if($numotis>=49 && $numotis<=65)
{
	$ciotis= 65 + ($numotis - 14);
}
else if($numotis>=66 && $numotis<=75)
{
	$ciotis= 65 + ($numotis - 13);
}

if($ciotis>=84)
{
	$diagotis="AP";
}
else
{
	$diagotis="NA";
}
?>