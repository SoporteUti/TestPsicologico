<?php
	session_start();
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="glossy/glossy.js"></script>

<script language="JavaScript">
<!--
// Comienzo del código
// Especificamos las imágenes primarias

image0 = new Image();
image0.src = "img/ing_admon2.jpg";

image1 = new Image();
image1.src = "img/realizar2.jpg";

// Fin del código
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
	<td>
		<center>
			<p>&nbsp;</p>
			  <!--INICIO DEL CONTENIDO-->
			  <?php
			  		if($_SESSION[testotis]==false && $_SESSION[testepq]==true) 
					{
						//echo'ERROR: TU YA REALIZASTE LA PRUEBA OTIS DEBES DE REALISAR LA PRUEBA EPQ AHORA...';//error1
						echo'<img src="img/errorA1.gif">';
					}
			  		else if($_SESSION[testotis]==true && $_SESSION[testepq]==false) 
					{
						//echo'ERROR: TU YA REALIZASTE LA PRUEBA EPQ DEBES DE REALIZAR LA PRUEBA OTIS AHORA...';
						echo'<img src="img/errorA2.gif">';
					}
			  		else if($_SESSION[testotis]==false && $_SESSION[testepq]==false) 
					{
						//echo'ERROR: TU YA REALIZASTE LAS PRUEBAS OTIS Y EPQ AHORA YA PUEDES VER TUS RESULTADOS...';
						echo'<img src="img/errorA3.gif">';
					}
			  		else if($_SESSION[testotis]==true && $_SESSION[testepq]==true) 
					{
						//echo'ERROR: DEBES DE REALIZAR LAS PRUEBAS OTIS Y EPQ PARA PODER VER TUS RESULTADOS...';
						echo'<img src="img/errorA4.gif">';
					}					
			  ?>
			  <br>
			  <a href="pruebaB.php"><img src="img/volver.jpg" border="0" class="glossy"></a>
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
