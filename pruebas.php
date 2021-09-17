<?php
session_start();
if($_SESSION["access"]==false) 
{
	echo "<script language='javascript'>";
    echo"location.href='log_aspirante.php';";
    echo "</script>";
}
else
{

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
			<table width="95%">
			<tr>
				<td width="25%"><b>DATOS DEL ASPIRANTE:</font></b></td>
				<td width="5%"><b><font color="#0000CC">NÚMERO:</font></b></td>
				<td width="18%"><b><font color="#FF0000"><?php echo $_SESSION["cod"]; ?></font></b></td>
				<td width="8%"><b><font color="#0000CC">NOMBRE:</font></b></td>
	<td width="55%"><b><font color="#FF0000"><?php echo strtoupper($_SESSION["nombre"]).' '.strtoupper($_SESSION["apellido"]); ?></font></b></td>
	<td><a href="index.php">[Salir]</a></td>
			</tr>
			<tr>
			<td colspan="5" width="100%"><center>
			<img src="img/selec.gif" width="700" height="120">
			</td>
			</tr>
			</table>
			
			<table width="300">
			<tr>
				<td width="100"><center>
					<a href="pruebaA.php">
						<img src="img/A.jpg" border="0" class="glossy">
					</a>
					</center>
				</td>
				<td width="150">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td width="100"><center>
				  <a href="pruebaB.php">
				  	<img src="img/B.jpg" border="0" class="glossy">
				  </a>
				  </center>
				</td>
			</tr>
			<table
			<table width="750" border="0"><tr><td>
			<tr><td><center><b><font size="+2">
				UNA VEZ SELECCIONADA UNA PRUEBA NO PODRAS ELEGIR LA OTRA PRUEBA
			</b></center></td></tr>
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