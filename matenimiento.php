<?php
	session_start();
	if($_SESSION["accessadmon"]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='login_admon.php';";
    	echo "</script>";
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
	<td valign="top">
		<center>
			<!--INICIO DEL CONTENIDO-->
			<img src="img/mantto2.gif" border="0">
			<p>
			<table border="0">
			<tr>
				<td>
					<a href="reg_admon.php">
						<img src="img/regadmon.jpg" border="0" class="glossy" >
					</a>
				</td>
			</tr>
			<tr>
				<td>
		  			<a href="reg_profes.php">
		  				<img src="img/reg_profe.jpg" border="0" class="glossy">
					</a>
				</td>
			</tr>
			<TR>
				<td>
					<a href="backup.php" target="_blank">
						<img src="img/copia.jpg" border="0" class="glossy">
					</a>
				</td>
			</TR>
			<tr>
				<td>
					<a href="restaurar.php">
						<img src="img/rcopia.jpg" border="0" class="glossy" >
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<a href="administrador.php">
							<img src="img/volver.jpg" border="0" class="glossy" height="45">
						</a>
					</center>
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