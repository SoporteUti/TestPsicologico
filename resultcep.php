<?php
$numcep=0;
$percentilcep=0;
$diagnosticocep="";
//$_SESSION["num_prue"];
//var_dump($cod);
//===============================================================================================================================================================\\
include("conexion.php");
$sql="SELECT COUNT(*) AS num FROM tb_respcep t1 INNER JOIN tb_respcepcorrectas t2 ON t1.idcep=t2.id AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='C';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$numcep = $row['num'];
}
mysqli_free_result($result);

if($numcep>=0 && $numcep<=2)
{
	$percentilcep_c=1;
	$diagcep_c="Inadecuado";
}
elseif($numcep>=3 && $numcep<=4)
{
	$percentilcep_c=5;
	$diagcep_c="Inadecuado";
}
elseif($numcep>=5 && $numcep<=6)
{
	$percentilcep_c=10;
	$diagcep_c="Inadecuado";
}
elseif($numcep==7)
{
	$percentilcep_c=15;
	$diagcep_c="Inadecuado";
}
elseif($numcep==8)
{
	$percentilcep_c=25;
	$diagcep_c="Aceptable";
}
elseif($numcep==9)
{
	$percentilcep_c=30;
	$diagcep_c="Aceptable";
}
elseif($numcep==10)
{
	$percentilcep_c=40;
	$diagcep_c="Aceptable";
}
elseif($numcep==11)
{
	$percentilcep_c=45;
	$diagcep_c="Aceptable";
}
elseif($numcep==12)
{
	$percentilcep_c=60;
	$diagcep_c="Adecuado";
}
elseif($numcep==13)
{
	$percentilcep_c=65;
	$diagcep_c="Adecuado";
}
elseif($numcep==14)
{
	$percentilcep_c=70;
	$diagcep_c="Adecuado";
}
elseif($numcep==15)
{
	$percentilcep_c=75;
	$diagcep_c="Adecuado";
}
elseif($numcep==16)
{
	$percentilcep_c=80;
	$diagcep_c="Aceptable";
}
elseif($numcep==17)
{
	$percentilcep_c=85;
	$diagcep_c="Aceptable";
}
elseif($numcep>=18 && $numcep<=19)
{
	$percentilcep_c=90;
	$diagcep_c="Aceptable";
}
elseif($numcep>=20 && $numcep<=21)
{
	$percentilcep_c=95;
	$diagcep_c="Aceptable";
}
elseif($numcep>=22 && $numcep<=23)
{
	$percentilcep_c=99;
	$diagcep_c="Aceptable";
}
elseif($numcep==24)
{
	$percentilcep_c=100;
	$diagcep_c="Aceptable";
}
else
{
	$percentilcep_c=100;
	$diagcep_c="Aceptable";
}
//===============================================================================================================================================================\\
$sql="SELECT COUNT(*) AS num FROM tb_respcep t1 INNER JOIN tb_respcepcorrectas t2 ON t1.idcep=t2.id AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='E' AND t1.idnum_prue='$num_prue';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$numcep = $row['num'];
}
mysqli_free_result($result);

if($numcep>=0 && $numcep<=4)
{
	$percentilcep_e=1;
	$diagcep_e="Inadecuado";
}
elseif($numcep>=5 && $numcep<=12)
{
	$percentilcep_e=5;
	$diagcep_e="Inadecuado";
}
elseif($numcep>=13 && $numcep<=16)
{
	$percentilcep_e=10;
	$diagcep_e="Inadecuado";
}
elseif($numcep>=17 && $numcep<=18)
{
	$percentilcep_e=15;
	$diagcep_e="Inadecuado";
}
elseif($numcep==19)
{
	$percentilcep_e=20;
	$diagcep_e="Inadecuado";
}
elseif($numcep==20)
{
	$percentilcep_e=25;
	$diagcep_e="Aceptable";
}
elseif($numcep==21)
{
	$percentilcep_e=30;
	$diagcep_e="Aceptable";
}
elseif($numcep==22)
{
	$percentilcep_e=40;
	$diagcep_e="Aceptable";
}
elseif($numcep==23)
{
	$percentilcep_e=45;
	$diagcep_e="Aceptable";
}
elseif($numcep==24)
{
	$percentilcep_e=50;
	$diagcep_e="Aceptable";
}
elseif($numcep==25)
{
	$percentilcep_e=55;
	$diagcep_e="Adecuado";
}
elseif($numcep==26)
{
	$percentilcep_e=65;
	$diagcep_e="Adecuado";
}
elseif($numcep>=27 && $numcep<=28)
{
	$percentilcep_e=70;
	$diagcep_e="Adecuado";
}
elseif($numcep==29)
{
	$percentilcep_e=75;
	$diagcep_e="Adecuado";
}
elseif($numcep==30)
{
	$percentilcep_e=80;
	$diagcep_e="Aceptable";
}
elseif($numcep==31)
{
	$percentilcep_e=85;
	$diagcep_e="Aceptable";
}
elseif($numcep>=32 && $numcep<=33)
{
	$percentilcep_e=90;
	$diagcep_e="Inadecuado";
}
elseif($numcep>=34 && $numcep<=35)
{
	$percentilcep_e=95;
	$diagcep_e="Inadecuado";
}
elseif($numcep>=36 && $numcep<=37)
{
	$percentilcep_e=99;
	$diagcep_e="Inadecuado";
}
elseif($numcep>=38 && $numcep<=41)
{
	$percentilcep_e=100;
	$diagcep_e="Inadecuado";
}
else
{
	$percentilcep_e=100;
	$diagcep_e="Inadecuado";
}
//===============================================================================================================================================================\\
$sql="SELECT COUNT(*) AS num FROM tb_respcep t1 INNER JOIN tb_respcepcorrectas t2 ON t1.idcep=t2.id AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='P' AND t1.idnum_prue='$num_prue';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$numcep = $row['num'];
}
mysqli_free_result($result);

if($numcep>=0 && $numcep<=5)
{
	$percentilcep_p=1;
	$diagcep_p="Aceptable";
}
elseif($numcep>=6 && $numcep<=11)
{
	$percentilcep_p=5;
	$diagcep_p="Aceptable";
}
elseif($numcep>=12 && $numcep<=13)
{
	$percentilcep_p=10;
	$diagcep_p="Adecuado";
}
elseif($numcep==14)
{
	$percentilcep_p=15;
	$diagcep_p="Adecuado";
}
elseif($numcep==15)
{
	$percentilcep_p=20;
	$diagcep_p="Adecuado";
}
elseif($numcep==16)
{
	$percentilcep_p=25;
	$diagcep_p="Adecuado";
}
elseif($numcep==17)
{
	$percentilcep_p=35;
	$diagcep_p="Adecuado";
}
elseif($numcep==18)
{
	$percentilcep_p=40;
	$diagcep_p="Adecuado";
}
elseif($numcep==19)
{
	$percentilcep_p=45;
	$diagcep_p="Adecuado";
}
elseif($numcep==20)
{
	$percentilcep_p=55;
	$diagcep_p="Adecuado";
}
elseif($numcep==21)
{
	$percentilcep_p=60;
	$diagcep_p="Adecuado";
}
elseif($numcep==22)
{
	$percentilcep_p=65;
	$diagcep_p="Adecuado";
}
elseif($numcep==23)
{
	$percentilcep_p=70;
	$diagcep_p="Adecuado";
}
elseif($numcep==24)
{
	$percentilcep_p=75;
	$diagcep_p="Adecuado";
}
elseif($numcep==25)
{
	$percentilcep_p=80;
	$diagcep_p="Aceptable";
}
elseif($numcep==26)
{
	$percentilcep_p=85;
	$diagcep_p="Aceptable";
}
elseif($numcep>=27 && $numcep<=28)
{
	$percentilcep_p=90;
	$diagcep_p="Inadecuado";
}
elseif($numcep>=29 && $numcep<=30)
{
	$percentilcep_p=95;
	$diagcep_p="Inadecuado";
}
elseif($numcep>=31 && $numcep<=33)
{
	$percentilcep_p=99;
	$diagcep_p="Inadecuado";
}
elseif($numcep>=34 && $numcep<=35)
{
	$percentilcep_p=100;
	$diagcep_p="Inadecuado";
}
else
{
	$percentilcep_p=100;
	$diagcep_p="Inadecuado";
}
//===============================================================================================================================================================\\
$sql="SELECT COUNT(*) AS num FROM tb_respcep t1 INNER JOIN tb_respcepcorrectas t2 ON t1.idcep=t2.id AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='S' AND t1.idnum_prue='$num_prue';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$numcep = $row['num'];
}
mysqli_free_result($result);

if($numcep>=0 && $numcep<=1)
{
	$percentilcep_s=1;
	$diagcep_s="Inadecuado";
}
elseif($numcep>=2 && $numcep<=3)
{
	$percentilcep_s=5;
	$diagcep_s="Inadecuado";
}
elseif($numcep>=4 && $numcep<=5)
{
	$percentilcep_s=10;
	$diagcep_s="Inadecuado";
}
elseif($numcep==6)
{
	$percentilcep_s=15;
	$diagcep_s="Inadecuado";
}
elseif($numcep==7)
{
	$percentilcep_s=20;
	$diagcep_s="Inadecuado";
}
elseif($numcep==8)
{
	$percentilcep_s=30;
	$diagcep_s="Adecuado";
}
elseif($numcep==9)
{
	$percentilcep_s=40;
	$diagcep_s="Adecuado";
}
elseif($numcep==10)
{
	$percentilcep_s=50;
	$diagcep_s="Adecuado";
}
elseif($numcep==11)
{
	$percentilcep_s=60;
	$diagcep_s="Adecuado";
}
elseif($numcep==12)
{
	$percentilcep_s=70;
	$diagcep_s="Adecuado";
}
elseif($numcep==13)
{
	$percentilcep_s=80;
	$diagcep_s="Adecuado";
}
elseif($numcep==14)
{
	$percentilcep_s=85;
	$diagcep_s="Adecuado";
}
elseif($numcep==15)
{
	$percentilcep_s=90;
	$diagcep_s="Inadecuado";
}
elseif($numcep==16)
{
	$percentilcep_s=95;
	$diagcep_s="Inadecuado";
}
elseif($numcep==17)
{
	$percentilcep_s=99;
	$diagcep_s="Inadecuado";
}
elseif($numcep>=18 && $numcep<=19)
{
	$percentilcep_s=100;
	$diagcep_s="Inadecuado";
}
else
{
	$percentilcep_s=100;
	$diagcep_s="Inadecuado";
}
//==========================================================================================================================================\\
$sql="SELECT COUNT(*) AS num FROM tb_respcep t1 INNER JOIN tb_respcepcorrectas t2 ON t1.idcep=t2.id AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND escala='?' AND t1.idnum_prue='$num_prue';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$numcep = $row['num'];
}
mysqli_free_result($result);

if($numcep>=0 && $numcep<=1)
{
	$percentilcep_x=10;
	$diagcep_x="Adecuado";
}
elseif($numcep==2)
{
	$percentilcep_x=15;
	$diagcep_x="Adecuado";
}
elseif($numcep==3)
{
	$percentilcep_x=30;
	$diagcep_x="Adecuado";
}
elseif($numcep==4)
{
	$percentilcep_x=35;
	$diagcep_x="Adecuado";
}
elseif($numcep==5)
{
	$percentilcep_x=40;
	$diagcep_x="Adecuado";
}
elseif($numcep==6)
{
	$percentilcep_x=45;
	$diagcep_x="Adecuado";
}
elseif($numcep>=7 && $numcep<=8)
{
	$percentilcep_x=50;
	$diagcep_x="Adecuado";
}
elseif($numcep==9)
{
	$percentilcep_x=60;
	$diagcep_x="Adecuado";
}
elseif($numcep==10)
{
	$percentilcep_x=65;
	$diagcep_x="Adecuado";
}
elseif($numcep>=11 && $numcep<=12)
{
	$percentilcep_x=70;
	$diagcep_x="Adecuado";
}
elseif($numcep>=13 && $numcep<=14)
{
	$percentilcep_x=75;
	$diagcep_x="Adecuado";
}
elseif($numcep>=15 && $numcep<=19)
{
	$percentilcep_x=80;
	$diagcep_x="Adecuado";
}
elseif($numcep>=20 && $numcep<=24)
{
	$percentilcep_x=85;
	$diagcep_x="Adecuado";
}
elseif($numcep>=25 && $numcep<=30)
{
	$percentilcep_x=90;
	$diagcep_x="Inadecuado";
}
elseif($numcep>=31 && $numcep<=40)
{
	$percentilcep_x=95;
	$diagcep_x="Inadecuado";
}
elseif($numcep>=41 && $numcep<=55)
{
	$percentilcep_x=99;
	$diagcep_x="Inadecuado";
}
elseif($numcep>=56 && $numcep<=65)
{
	$percentilcep_x=100;
	$diagcep_x="Inadecuado";
}
else
{
	$percentilcep_x=100;
	$diagcep_x="Inadecuado";
}

if($diagcep_c=="Inadecuado" && $diagcep_e=="Inadecuado" && $diagcep_p=="Inadecuado" && $diagcep_s=="Inadecuado" && $diagcep_x=="Inadecuado")
{
	$diagnosticocep="NA";
}
else
{
	$diagnosticocep="AP";
}
?>