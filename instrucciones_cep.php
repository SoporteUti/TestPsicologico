<?php
	session_start();
	if($_SESSION[access]==false) 
	{
		echo "<script language='javascript'>";
     	echo"location.href='index.php';";
     	echo "</script>";
	}
	else
	{
	}
	if($_SESSION[testcep]==false) 
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
<li><font size="4">En est&aacute; prueba hallar&aacute; una serie de preguntas relacionadas con su manera de ser. 
<li>Para trabajar en ellas, se le presentan las preguntas con tres opciones de respuestas, las cuales corresponden a <b>"SI"</b>, <b>"?"</b> y <b>"NO"</b> s&oacute;lo podras elegir una de ellas.
<li>Si tu respuesta a la pregunta No 1 es <b>"SI"</b>, deber&aacute;s de elegir la opci&oacute;n donde se encuentra la palabra <b>"Si"</b>, por ejemplo.
<br><center><b>&iquest;Pregunta No 1?</b><br><img src="img/ii_cep.gif"></center><b>NOTA:</b> Procure decidir por el <b>"SI"</b> o por el <b>"NO"</b> decida la <b>"?"</b> lo menos posible.
<br><br><li>CONTESTE A TODAS LAS PREGUNTAS CON SINCERIDAD Y SIN PENSARLO DEMASIADO NO HAY RESPUESTAS BUENAS NI MALAS, sencillamente, respuestas seg&uacute;n su manera de ser.
<br><br><b>IMPORTANTE:</b> Para la realizaci&oacute;n de esta prueba cuentas con un limite de tiempo de 
<b>30 MINUTOS.</b>
<br><br><center>
<a href="testcep.php">
<img src="img/ini.jpg" border="0" class="glossy">
</a>
</center>
</li></li></li></font></li></ul></td></tr></table></center>
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
