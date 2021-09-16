<?php
	session_start();
	if($_SESSION[access]==false) 
	{
		echo "<script language='javascript'>";
     	echo"location.href='index.php';";
     	echo "</script>";
	}
	if($_SESSION[testepq]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='error_pruebaB.php';";
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
<li><font size="4">Las preguntas siguientes se refieren a diferentes modos de pensar y sentir. Despu&eacute;s de cada una est&aacute;n las palabras <b>SI</b> y <b>NO</b>. Lea cada pregunta y conteste seleccionando con un clic sobre la respuesta que consideres seg&uacute;n sea su modo de pensar o sentir. NO HAY RESPUESTAS BUENAS O MALAS: todas sirven. Tampoco hay preguntas de truco. Mire c&oacute;mo se han contestado los siguientes ejemplos:
<ul type="A">
	<li>&iquest;Le gustaria ir de vacaciones al Polo Norte?.............
	<br>Si su respuesta a la interrogante es <b>Si</b>, deber&aacute; seleccionar con un clic en la opci&oacute;n de <b>Si</b>, de la manera siguiente:
	<center><img src="img/ii_epq1.gif" border="0"></center>
	<li>&iquest;Se para a pensar las cosas antes de hacerlas?.............
	<br>Si su respuesta a la interrogante es <b>No</b>, deber&aacute; seleccionar con un clic en la opci&oacute;n de <b>No</b>, de la manera siguiente.
	<center><img src="img/ii_epq2.gif" border="0"></center>
	</ul>
<li>Las frases son muy cortas para darle todos los detalles que Ud. quisiera. Procure no dejar cuestiones sin contestar; tal vez algunas le parezcan muy personales; no se preocupe y recuerde que este Ejemplar se guarda como archivo confidencial; por otra parte, al obtener los resultados no se consideran las respuestas una a una, sino globalmente.
<br><br><b>IMPORTANTE:</b> Para la realizaci&oacute;n de esta prueba cuentas con un limite de tiempo de 
<b>25 MINUTOS.</b>
<br><br><center>
<a href="testepq.php">
<img src="img/ini.jpg" border="0" class="glossy">
</a>
</center>
</td></tr></table>
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
