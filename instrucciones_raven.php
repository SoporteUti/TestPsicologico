<?php
	session_start();
	if($_SESSION["access"]==false) 
	{
		echo "<script language='javascript'>";
	     echo"location.href='index.php';";
    	 echo "</script>";
	}
	else
	{
	}
	if($_SESSION["testraven"]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='error_pruebaA.php';";
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
			
			<img src="img/instrucciones.gif" border="0" width="300" height="40">
<table width="850"><tr><td>
<ul>
<li><font size="4">Est&aacute; prueba contiene problemas gr&aacute;ficos, los cu&aacute;les poseen una clave alfanum&eacute;rica en la parte superior. Cada problema cuenta con 6 u 8 opciones de respuesta, de las cu&aacute;les solo podras elegir una, la que consideres correcta.
<li>En el lado izquierdo de la pantalla hay un dibujo, en el cu&aacute;l se le ha quitado una parte, quedando un espacio en blanco. Al lado derecho de cada dibujo hay 6 u 8 dibujos, que tienen el tama&ntilde;o adecuado para encajar en el espacio en blanco, PERO NO TODOS COMPLETAN EL DIBUJO DE LA IZQUIERDA, s&oacute;lo hay UNO que adem&aacute;s de encajar, completa el dibujo de la izquierda.
<li>Todo lo que tienes que hacer es:
<ul type="A">
	<li>Observar el dibujo de la izquierda.
	<li>Buscar entre los dibujos de la derecha, cu&aacute;l es el que, colocado en el espacio en blanco, completa el dibujo de la izquierda.
	<li>Cuando encuentre el dibujo que es la soluci&oacute;n, seleccione dando un clic el dibujo correspondiente.
<br><center>SI NO HA COMPRENDIDO LO QUE TIENE QUE HACER LEA NUEVAMENTE ESTAS INSTRUCCIONES.</center>
<br><b>IMPORTANTE:</b> Para la realizaci&oacute;n de esta prueba cuentas con un limite de tiempo de <b>45 MINUTOS.</b>
<br><br><center>
<a href="testraven.php">
<img src="img/ini.jpg" border="0" class="glossy">
</a>
</center></li></li></li></ul></li></li></font></li></ul></td></tr></table></center>
			<!-- FIN DEL CONTENIDO-->			
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
