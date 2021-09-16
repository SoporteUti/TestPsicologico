<?php
$numepq=0;
$centilepq=0;
	
	$consul="SELECT if(sexo>0,'M','F') as sexo FROM tb_aspirantes WHERE idaspirante='$cod';";
	$result0 = mysql_query($consul, $conexion);
	if($row=mysql_fetch_array($result0))
	{
		$sex=$row['sexo'];
	}

if($sex=="M")
{
//===============================================================================================================================================================\\
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='N' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq>=0 && $numepq<=1)
{
	$centilepq_n=1;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==2)
{
	$centilepq_n=3;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==3)
{
	$centilepq_n=5;
	$diagnosticoepq_n="Apto";
}
elseif($numepq>=4 && $numepq<=5)
{
	$centilepq_n=10;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==6)
{
	$centilepq_n=15;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==7)
{
	$centilepq_n=20;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==8)
{
	$centilepq_n=30;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==9)
{
	$centilepq_n=35;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==10)
{
	$centilepq_n=40;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==11)
{
	$centilepq_n=45;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==12)
{
	$centilepq_n=55;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==13)
{
	$centilepq_n=60;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==14)
{
	$centilepq_n=65;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==15)
{
	$centilepq_n=70;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==16)
{
	$centilepq_n=75;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==17)
{
	$centilepq_n=80;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==18)
{
	$centilepq_n=85;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==19)
{
	$centilepq_n=90;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==20)
{
	$centilepq_n=95;
	$diagnosticoepq_n="No Apto";
}
elseif($numepq>=21 && $numepq<=22)
{
	$centilepq_n=97;
	$diagnosticoepq_n="No Apto";
}
elseif($numepq>=23 && $numepq<=25)
{
	$centilepq_n=99;
	$diagnosticoepq_n="No Apto";
}
else
{
	$centilepq_n=99;
	$diagnosticoepq_n="No Apto";
}
//======================================================================================================================================================================
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='E' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);

if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq>=0 && $numepq<=1)
{
	$centilepq_e=1;
	$diagnosticoepq_e="Apto";
}
elseif($numepq>=2 && $numepq<=3)
{
	$centilepq_e=3;
	$diagnosticoepq_e="Apto";
}
elseif($numepq>=4 && $numepq<=5)
{
	$centilepq_e=5;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==6)
{
	$centilepq_e=10;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==7)
{
	$centilepq_e=15;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==8)
{
	$centilepq_e=20;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==9)
{
	$centilepq_e=25;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==10)
{
	$centilepq_e=30;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==11)
{
	$centilepq_e=40;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==12)
{
	$centilepq_e=50;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==13)
{
	$centilepq_e=60;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==14)
{
	$centilepq_e=65;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==15)
{
	$centilepq_e=75;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==16)
{
	$centilepq_e=80;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==17)
{
	$centilepq_e=90;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==18)
{
	$centilepq_e=95;
	$diagnosticoepq_e="No Apto";
}
elseif($numepq==19)
{
	$centilepq_e=97;
	$diagnosticoepq_e="No Apto";
}
elseif($numepq==20)
{
	$centilepq_e=99;
	$diagnosticoepq_e="No Apto";
}
else
{
	$centilepq_e=99;
	$diagnosticoepq_e="No Apto";
}
//=====================================================================================================================================================================
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='P' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);

if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq==0)
{
	$centilepq_p=5;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==1)
{
	$centilepq_p=25;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==2)
{
	$centilepq_p=50;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==3)
{
	$centilepq_p=65;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==4)
{
	$centilepq_p=80;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==5)
{
	$centilepq_p=85;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==6)
{
	$centilepq_p=90;
	$diagnosticoepq_p="Apto";
}
elseif($numepq>=7 && $numepq<=8)
{
	$centilepq_p=95;
	$diagnosticoepq_p="No Apto";
}
elseif($numepq>=9 && $numepq<=10)
{
	$centilepq_p=97;
	$diagnosticoepq_p="No Apto";
}
elseif($numepq>=14 && $numepq<=24)
{
	$centilepq_p=99;
	$diagnosticoepq_p="No Apto";
}
else
{
	$centilepq_p=99;
	$diagnosticoepq_p="No Apto";
}
//======================================================================================================================================================================
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='S' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq>=0 && $numepq<=1)
{
	$centilepq_s=1;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==2)
{
	$centilepq_s=3;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==3)
{
	$centilepq_s=5;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==4)
{
	$centilepq_s=10;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==5)
{
	$centilepq_s=20;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==6)
{
	$centilepq_s=25;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==7)
{
	$centilepq_s=30;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==8)
{
	$centilepq_s=35;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==9)
{
	$centilepq_s=40;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==10)
{
	$centilepq_s=50;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==11)
{
	$centilepq_s=55;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==12)
{
	$centilepq_s=65;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==13)
{
	$centilepq_s=70;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==14)
{
	$centilepq_s=75;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==15)
{
	$centilepq_s=80;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==16)
{
	$centilepq_s=85;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==17)
{
	$centilepq_s=90;
	$diagnosticoepq_s="Apto";
}
elseif($numepq>=18 && $numepq<=19)
{
	$centilepq_s=95;
	$diagnosticoepq_s="No Apto";
}
elseif($numepq==20)
{
	$centilepq_s=97;
	$diagnosticoepq_s="No Apto";
}
elseif($numepq>=21 && $numepq<=25)
{
	$centilepq_s=99;
	$diagnosticoepq_s="No Apto";
}
else
{
	$centilepq_s=99;
	$diagnosticoepq_s="No Apto";
}
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
else
{
//===============================================================================================================================================================\\
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='N' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq>=0 && $numepq<=3)
{
	$centilepq_n=1;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==4)
{
	$centilepq_n=3;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==6)
{
	$centilepq_n=5;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==7)
{
	$centilepq_n=10;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==8)
{
	$centilepq_n=15;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==9)
{
	$centilepq_n=20;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==10)
{
	$centilepq_n=25;
	$diagnosticoepq_n="Apto";
}
elseif($numepq>=11 && $numepq<=12)
{
	$centilepq_n=30;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==13)
{
	$centilepq_n=35;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==14)
{
	$centilepq_n=45;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==15)
{
	$centilepq_n=50;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==16)
{
	$centilepq_n=55;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==17)
{
	$centilepq_n=65;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==18)
{
	$centilepq_n=70;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==19)
{
	$centilepq_n=80;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==20)
{
	$centilepq_n=85;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==21)
{
	$centilepq_n=90;
	$diagnosticoepq_n="Apto";
}
elseif($numepq==22)
{
	$centilepq_n=95;
	$diagnosticoepq_n="No Apto";
}
elseif($numepq==23)
{
	$centilepq_n=97;
	$diagnosticoepq_n="No Apto";
}
elseif($numepq>=24 && $numepq<=25)
{
	$centilepq_n=99;
	$diagnosticoepq_n="No Apto";
}
else
{
	$centilepq_n=99;
	$diagnosticoepq_n="No Apto";
}
//======================================================================================================================================================================
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='E' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq>=0 && $numepq<=1)
{
	$centilepq_e=1;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==3)
{
	$centilepq_e=3;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==4)
{
	$centilepq_e=5;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==5)
{
	$centilepq_e=10;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==6)
{
	$centilepq_e=15;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==7)
{
	$centilepq_e=20;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==8)
{
	$centilepq_e=25;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==9)
{
	$centilepq_e=30;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==10)
{
	$centilepq_e=35;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==11)
{
	$centilepq_e=45;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==12)
{
	$centilepq_e=50;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==13)
{
	$centilepq_e=60;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==14)
{
	$centilepq_e=65;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==15)
{
	$centilepq_e=75;
	$diagnosticoepq_e="Apto";

}
elseif($numepq==16)
{
	$centilepq_e=80;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==17)
{
	$centilepq_e=90;
	$diagnosticoepq_e="Apto";
}
elseif($numepq==18)
{
	$centilepq_e=95;
	$diagnosticoepq_e="No Apto";
}
elseif($numepq==19)
{
	$centilepq_e=97;
	$diagnosticoepq_e="No Apto";
}
elseif($numepq==20)
{
	$centilepq_e=99;
	$diagnosticoepq_e="No Apto";
}
else
{
	$centilepq_e=99;
	$diagnosticoepq_e="No Apto";
}
//=====================================================================================================================================================================
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='P' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq==0)
{
	$centilepq_p=5;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==1)
{
	$centilepq_p=35;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==2)
{
	$centilepq_p=50;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==3)
{
	$centilepq_p=75;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==4)
{
	$centilepq_p=85;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==5)
{
	$centilepq_p=90;
	$diagnosticoepq_p="Apto";
}
elseif($numepq==6)
{
	$centilepq_p=95;
	$diagnosticoepq_p="No Apto";
}
elseif($numepq>=7 && $numepq<=8)
{
	$centilepq_p=97;
	$diagnosticoepq_p="No Apto";
}
elseif($numepq>=9 && $numepq<=24)
{
	$centilepq_p=99;
	$diagnosticoepq_p="No Apto";
}
else
{
	$centilepq_p=99;
	$diagnosticoepq_p="No Apto";
}
//======================================================================================================================================================================
$sql="SELECT COUNT(*) AS num FROM tb_respepq t1 INNER JOIN tb_epq t2 ON t1.idepq=t2.idepq AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='S' AND t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numepq = $row['num'];
}
mysql_free_result($result) or die (mysql_error());

if($numepq>=0 && $numepq<=2)
{
	$centilepq_s=1;
	$diagnosticoepq_s="Apto";
}
elseif($numepq>=3 && $numepq<=4)
{
	$centilepq_s=3;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==5)
{
	$centilepq_s=5;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==6)
{
	$centilepq_s=10;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==7)
{
	$centilepq_s=15;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==8)
{
	$centilepq_s=20;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==9)
{
	$centilepq_s=25;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==10)
{
	$centilepq_s=35;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==11)
{
	$centilepq_s=45;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==12)
{
	$centilepq_s=50;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==13)
{
	$centilepq_s=60;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==14)
{
	$centilepq_s=70;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==15)
{
	$centilepq_s=75;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==16)
{
	$centilepq_s=80;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==17)
{
	$centilepq_s=90;
	$diagnosticoepq_s="Apto";
}
elseif($numepq==18)
{
	$centilepq_s=95;
	$diagnosticoepq_s="No Apto";
}
elseif($numepq==19)
{
	$centilepq_s=97;
	$diagnosticoepq_s="No Apto";
}
elseif($numepq>=20 && $numepq<=25)
{
	$centilepq_s=99;
	$diagnosticoepq_s="No Apto";
}
else
{
	$centilepq_s=99;
	$diagnosticoepq_s="No Apto";
}
}

if($diagnosticoepq_n=="No Apto" && $diagnosticoepq_e=="No Apto" && $diagnosticoepq_p=="No Apto" && $diagnosticoepq_s=="No Apto")
{
	$diagnosticoepq="NA";
}
else
{
	$diagnosticoepq="AP";
}
?>