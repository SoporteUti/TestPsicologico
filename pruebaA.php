<?php
session_start();

if($_SESSION["access"]==false) {
	echo "<script language='javascript'>";
     echo"location.href='index.php';";
     echo "</script>";
}
else
{
/*
	echo $_SESSION[cod];
	echo $_SESSION[access];
	echo $_SESSION[nombre]; 
	echo $_SESSION[apellido]; 
	echo $_SESSION[nit],'<br>';
	echo $_SESSION[numpageotis];
	echo $_SESSION[numpageepq];
	echo $_SESSION[numpageraven];
	echo $_SESSION[numpagecep];
	echo $_SESSION[num_prue];
	echo $_SESSION[testotis];
	echo $_SESSION[testepq];
	echo $_SESSION[testraven];
	echo $_SESSION[testcep];
	*/
}
	$var= $_GET["var"];




if($var==1){$_SESSION["testraven"]=false;}elseif($var==2){$_SESSION["testcep"]=false;}
?>

<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="glossy/glossy.js"></script>

<style type="text/css">
body
{
	background:url(img/fondo.png) repeat-x top left #eff3ff;
}
</style>

<script type="text/JavaScript">
	function aja()
	{
		//location.href="index.php";
	}
</script>
</head>

<body topmargin="0">
<center>
<table cellpadding="0" cellspacing="0" border="0" width="900">
<tr>
	<td valign="top">
		<center>
		<img src="img/minerva.gif" width="136" height="166">
		</center>
	</td>
	<td  valign="top">
		<center>
		<img src="img/parte2.jpg" width="764" height="166">
		</center>
	</td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" width="910" background="img/top.png">
<tr>
	<td>
		<center>
				&nbsp;
		</center>
	</td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" width="910" height="400" background="img/mid.jpg">
<tr>
	<td>
		<center>
			<!--INICIO DEL CONTENIDO-->
			<img src="img/pa.gif">
			<table width="500">
			<tr>
				<td>
					<a href="instrucciones_raven.php">
						<img src="img/praven.jpg" border="0" class="glossy">
					</a>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
					<a href="instrucciones_cep.php">
						<img src="img/pcep.jpg" border="0" class="glossy">
					</a>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
			<?php
				if($_SESSION["testcep"]==true || $_SESSION["testraven"]==true)
				{
					echo'<a href="resultadoA.php"><img src="img/R.jpg" border="0" class="glossy"></a>';
				}
				if($_SESSION["testcep"]==false && $_SESSION["testraven"]==false)
				{
					echo'<a href="resultadoA.php" target="_blank" onClick="aja();"><img src="img/R.jpg" border="0" class="glossy"></a>';
				}
			?>
			</td>
			</tr>
			</table>
			<!--FIN DEL CONTENIDO-->			
		</center>
	</td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" width="900">
<tr>
	<td>
		<center>
			<img src="img/bajo.png" width="910">	
		</center>
	</td>
</tr>
</table>
</center>
</body>
</html>