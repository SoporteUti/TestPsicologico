<?php
	session_start();
	setlocale(LC_ALL, 'es_ES');
	if($_SESSION[access]==false) 
	{
		echo "<script language='javascript'>";
     	echo"location.href='index.php';";
     	echo "</script>";
	}
	if($_SESSION[testotis]==false) 
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
<li><font size="4">Est&aacute; prueba se compone de diversas preguntas y problemas que usted habr&aacute; de resolver.
<li>Para responder, s&oacute;lo tiene que seleccionar con un clic en la respuesta que consideres correcta. 
<li>Fijese en el siguiente ejemplo, para que sepa contestar.
<li>Ejemplo 1.
<br><center><b>&iquest;Cu&aacute;l de estas cinco palabras nos indica lo que es una manzana?</b><br><img src="img/ii_otis1.gif"></center>
<li>Ejemplo 2.
<br><center><b>&iquest;Cu&aacute;l de estas cifras tiene todos sus n&uacute;meros impares?</b><br><img src="img/ii_otis3.gif"></center>
<li>Est&aacute; prueba consta de 75 preguntas, resuelva todos los que pueda. A partir de que le des clic en el bot&oacute;n de iniciar prueba, tienes que trabajar de la forma m&aacute;s r&aacute;pida posible y con la mayor exactitud que pueda, no se entretenga mucho en una misma pregunta; si llega a una que no entiende, pase a la siguiente.
<br><br><b>IMPORTANTE:</b> Para la realizaci&oacute;n de esta prueba cuentas con un limite de tiempo de 
<b>30 MINUTOS.</b>
<br><br><center>
<a href="testotis.php">
<img src="img/ini.jpg" border="0" class="glossy">
</a>
</center></li></li></li></li></li></font></li></ul></td></tr></table></center>
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
