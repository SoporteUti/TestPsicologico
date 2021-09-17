<?php
	session_start();
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="glossy/glossy.js"></script>

<script language="JavaScript">
<!--
// Comienzo del c�digo
// Especificamos las im�genes primarias

image0 = new Image();
image0.src = "img/ing_admon2.jpg";

image1 = new Image();
image1.src = "img/realizar2.jpg";

// Fin del c�digo
-->
</script>

<style type="text/css">
body
{
	background:url(img/fondo.png) repeat-x top left #eff3ff;
}
</style>

<script type="text/JavaScript">
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
	<td valign="top">
		<center>
			<p>&nbsp;</p>
			  <!--INICIO DEL CONTENIDO-->
			  <?php
			  		if($_SESSION["testraven"]==false && $_SESSION["testcep"]==true) 
					{
						//echo'ERROR: TU YA REALIZASTE LA PRUEBA RAVEN DEBES DE REALIZAR LA PRUEBA CEP AHORA...';
						echo'<img src="img/errorB1.gif">';
					}
			  		else if($_SESSION["testraven"]==true && $_SESSION["testcep"]==false) 
					{
						//echo'ERROR: TU YA REALIZASTE LA PRUEBA CEP DEBES DE REALIZAR LA PRUEBA RAVEN AHORA...';
						echo'<img src="img/errorB2.gif">';
					}
			  		else if($_SESSION["testraven"]==false && $_SESSION["testcep"]==false) 
					{
						//echo'ERROR: TU YA REALIZASTE LAS PRUEBAS RAVEN Y CEP AHORA YA PUEDES VER TUS RESULTADOS...';
						echo'<img src="img/errorB3.gif">';
					}
			  		else if($_SESSION["testraven"]==true && $_SESSION["testcep"]==true) 
					{
						//echo'ERROR: DEBES DE REALIZAR LAS PRUEBAS RAVEN Y CEP PARA PODER VER TUS RESULTADOS...';
						echo'<img src="img/errorB4.gif">';
					}
			  ?>
			  <br>
			  <a href="pruebaA.php"><img src="img/volver.jpg" border="0" class="glossy"></a>
			  <!--FIN DEL CONTENIDO-->
			<p>&nbsp;</p>
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
