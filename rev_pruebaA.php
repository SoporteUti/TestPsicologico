<?php
session_start();
$_SESSION[num_prue] = $_GET['var'];
if($_SESSION[acce]==false) 
{
	echo "<script language='javascript'>";
    echo"location.href='index.php';";
    echo "</script>";
}
else
{
//	echo $_SESSION[cod];
}
//echo $_SESSION[cod];
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
	<td valign="top">
		<center>
			<!--INICIO DEL CONTENIDO-->
			<img src="img/rr.gif" border="0">
	  	<table border="0">
		<tr>
			<td>
				<a href="prue_raven.php">
					<img src="img/praven.jpg" border="0" class="glossy">
				</a>
			</td>
			<td>
	  			<a href="prue_cep.php">
					<img src="img/pcep.jpg" border="0" class="glossy">
				</a>
			</td>			
			<td>
				<a href="resultadoA2.php" target="_blank">
					<img src="img/R.jpg" border="0" class="glossy">
			  		</a>
			</td>
		</tr>
		</table><br>
		<a href="rev_pruebas.php">
			<img src="img/volver.jpg" border="0" class="glossy">
		</a>
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