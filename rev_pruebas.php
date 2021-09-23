<?php
session_start();
if($_SESSION["acce"]==false) 
{
	echo "<script language='javascript'>";
    echo"location.href='index.php';";
    echo "</script>";
}	
else
{
	$cod=$_SESSION["cod"];
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
			<img src="img/rr.gif" border="0">
	  	<table border="0">
		<tr>
		
		<?php
			include("conexion.php");
			echo'<td><a href="act_aspirante.php"><img src="img/datos.jpg" border="0" class="glossy"></a><br>&nbsp;</td>';
			$sql="SELECT if(prueba_num=1,'PRIMERA VEZ','SEGUNDA VEZ') as num, prueba_num FROM tb_resultadosa WHERE idaspirante='$cod';";
			$result0 = mysqli_query($conexion,$sql);
			$cont=0;
			while($row=mysqlI_fetch_array($result0))
			{
				$cont++;
				echo'<td>';
				echo'<a href="rev_pruebaA.php?var='.$row['prueba_num'].'">';
				echo'<img src="img/A.jpg" border="0" class="glossy">';
				echo'</a>';
				echo'<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['num'];
				echo'</td>';
			}
			$sql="SELECT if(prueba_num=1,'PRIMERA VEZ','SEGUNDA VEZ') as num, prueba_num FROM tb_resultadosb WHERE idaspirante='$cod';";
			$result0 = mysqli_query($conexion,$sql);
			$cc=0;
			while($row=mysqli_fetch_array($result0))
			{
				$cont++;
				$cc++;
				echo'<td>';
				echo'<a href="rev_pruebaB.php?var='.$row['prueba_num'].'">';
				echo'<img src="img/B.jpg" border="0" class="glossy">';
				echo'</a>';
				echo'<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['num'];
				echo'</td>';
			}
			if($cont<2)
			{
				echo'<td>';
				echo'<a href="cod_asp2.php">';
				echo'<img src="img/hacer.jpg" border="0" class="glossy">';
				echo'</a>';
				echo'<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				echo'</td>';
			}
			echo'</tr>';
		?>
		</table><br>
		<a href="cod_asp.php">
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