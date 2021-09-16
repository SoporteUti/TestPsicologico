<?php
include("conexion.php");

$cod = array("0029","0039","0058","0074","0083","0101","0115","0121","0124","0129","0131","0135","0141","0145","0156","0159","0161","0191","0196","0202","0210","0214","0236","0243","0254","0257","0259","0260","0261","0265","0268","0270","0271","0273","0279","0293","0298","0299","0301","0309","0324","0338","0342","0351","0354","0054","0235","0239","0051","0046","0071","0385");

$i=0;
for($i=0; $i<=52; $i++)
{
//echo"<br>".$cod[$i];
$sql = "DELETE FROM tb_auxresultados WHERE idaspirante='$cod[$i]' AND num_prue='1';";
$result = @mysql_query($sql,$conexion) or die (mysql_error());
}

$sql = "DELETE FROM tb_auxresultados WHERE idaspirante='0302' AND num_prue='2' AND prue='B';";
$result = @mysql_query($sql,$conexion) or die (mysql_error());

$sql = "DELETE FROM tb_auxresultados WHERE idaspirante='0254' AND num_prue='2' AND prue='A';";
$result = @mysql_query($sql,$conexion) or die (mysql_error());

?>