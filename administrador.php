<?php
	session_start();
	if($_SESSION["accessadmon"]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='login_admon.php';";
    	echo "</script>";
	}
	else
	{
		$nombreadmon   = $_SESSION["nombreadmon"];
		$apellidoadmon = $_SESSION["apellidoadmon"]; 
		$id = $_SESSION["idadmon"];
	}
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
	<td>
		<center>
			<!--INICIO DEL CONTENIDO-->
		  	<table width="450">
			<tr>
				<td>
		  			<a href="cod_asp.php">
		  				<img src="img/revision.jpg" border="0" class="glossy">
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="consultas_reportes.php">
						<img src="img/consulyreport.jpg" border="0" class="glossy">
					</a>			  			
				</td>
			</tr>
			<tr>
				<td>
					<a href="2prueba.php">
						<img src="img/2prueba.jpg" border="0" class="glossy">
					</a>			  			
				</td>
			</tr>
			<!--habilitando 3 prueba-->
			<tr>
				<td>
					<a href="3prueba.php">
						<img src="img/2prueba.jpg" border="0" class="glossy">
					</a>			  			
				</td>
			</tr>
			<!--Fin de habilitar 3 prueba-->
			<tr>
				<td>
					<a href="aspirantes.php" target="_blank">
						<img src="img/aspirantes.jpg" border="0" class="glossy">
					</a>			  			
				</td>
			</tr>
			<tr>
				<td>
					<a href="matenimiento.php">
						<img src="img/mantto.jpg" border="0" class="glossy">
					</a>
				</td>
			</tr>

			<tr>
				<td>
					<a href="index.php">
						<img src="img/salir.jpg" border="0" class="glossy">
					</a>
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
