<?php
$numraven=0;
$edad=0;
$percentilraven=0;
$diagnosticoraven="";
//var_dump($cod);
//var_dump($num_prue);
$sql="SELECT COUNT(*) AS num FROM tb_respraven t1 INNER JOIN tb_raven t2 ON t1.idraven=t2.idraven AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND t1.idnum_prue='$num_prue';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$numraven = $row['num'];
	//var_dump($numraven);
}
mysqli_free_result($result);

$sql="SELECT edad FROM tb_aspirantes WHERE idaspirante='$cod';";
$result = mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	$edad = $row['edad'];
}
mysqli_free_result($result);
mysqli_close($conexion);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=0 && $edad<=25)
{
	if($numraven>=0 && $numraven<=23)
	{
		$percentilraven=5;
		$diagnosticoraven="D";
	}
	else if($numraven>=24 && $numraven<=28)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=29 && $numraven<=37)
	{
		$percentilraven=25;
		$diagnosticoraven="TM";
	}
	else if($numraven>=38 && $numraven<=44)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=45 && $numraven<=49)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=50 && $numraven<=54)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=55 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=26 && $edad<=30)
{
	if($numraven>=0 && $numraven<=28)//
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=29 && $numraven<=42)//42
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=43 && $numraven<=47)//47
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=48 && $numraven<=53)//53
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=54 && $numraven<=60)//54
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=31 && $edad<=35)
{
	if($numraven>=0 && $numraven<=28)//
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=29 && $numraven<=40)//40
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=41 && $numraven<=45)//45
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=46 && $numraven<=52)//51
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=53 && $numraven<=60)//53
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=36 && $edad<=40)
{
	if($numraven>=0 && $numraven<=27)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=28 && $numraven<=38)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=39 && $numraven<=43)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=44 && $numraven<=51)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=52 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=41 && $edad<=45)
{
	if($numraven>=0 && $numraven<=24)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=25 && $numraven<=35)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=36 && $numraven<=41)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=42 && $numraven<=49)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=50 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=46 && $edad<=50)
{
	if($numraven>=0 && $numraven<=21)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=22 && $numraven<=33)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=34 && $numraven<=39)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=40 && $numraven<=47)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=48 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=51 && $edad<=55)
{
	if($numraven>=0 && $numraven<=18)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=19 && $numraven<=30)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=31 && $numraven<=37)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=38 && $numraven<=45)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=46 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=56 && $edad<=60)
{
	if($numraven>=0 && $numraven<=15)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=16 && $numraven<=27)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=28 && $numraven<=35)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=36 && $numraven<=43)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=44 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($edad>=61 && $edad<=99)
{
	if($numraven>=0 && $numraven<=12)
	{
		$percentilraven=10;
		$diagnosticoraven="ITM";
	}
	else if($numraven>=13 && $numraven<=24)
	{
		$percentilraven=50;
		$diagnosticoraven="TM";
	}
	else if($numraven>=25 && $numraven<=33)
	{
		$percentilraven=75;
		$diagnosticoraven="STM";
	}
	else if($numraven>=34 && $numraven<=41)
	{
		$percentilraven=90;
		$diagnosticoraven="STM";
	}
	else if($numraven>=42 && $numraven<=60)
	{
		$percentilraven=95;
		$diagnosticoraven="S";
	}
}
?>