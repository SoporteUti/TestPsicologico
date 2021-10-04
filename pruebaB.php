<?php
session_start();
if($_SESSION["access"]==false) {
	echo "<script language='javascript'>";
     echo"location.href='index.php';";
     echo "</script>";
}
if(isset( $_GET['var'])){
$var= $_GET['var'];
if($var==1){$_SESSION["testotis"]=false;}elseif($var==2){$_SESSION["testepq"]=false;}
//$cod="0010";
}//fin isset
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
<script type="text/JavaScript">
	function aja()
	{
		//location.href="index.php";
	}
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
			<!--INICIO DEL CONTENIDO-->
			<img src="img/pb.gif">
			<table width="500">
			<tr>
				<td>
					<a href="instrucciones_otis.php">
						<img src="img/potis.jpg" border="0" class="glossy">
					</a>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
					<a href="instrucciones_epq.php">
						<img src="img/pepq.jpg" border="0" class="glossy">
					</a>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
			<?php
				if($_SESSION[testotis]==true || $_SESSION[testepq]==true)  
				{
					echo'<a href="resultadoB.php"><img src="img/R.jpg" border="0" class="glossy"></a>';
				}
				else
				{
					echo'<a href="resultadoB.php" target="_blank" onClick="aja();"><img src="img/R.jpg" border="0" class="glossy"></a>';
				}
			?>
				</td>
			</tr>
			</table>
			<!--href="resultadoA.php" target="_blank" FIN DEL CONTENIDO-->			
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