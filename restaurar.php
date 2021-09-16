<?php
	session_start();
	include("conexion.php");
	if($_SESSION[accessadmon]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='login_admon.php';";
    	echo "</script>";
	}
	$status = "";
	if($_POST['bandera']=="ingresar")
	{
		$archivo = $_FILES["archivo"]['name'];
		$prefijo = '1'.substr(md5(uniqid(rand())),0,6);
		if ($archivo != "") 
		{
			$destino =  "files/1".$prefijo."_".$archivo;
			if (copy($_FILES['archivo']['tmp_name'],$destino)) 
			{
				$command = 'mysql.exe --password=root --user=root dbtestspsicologico < '.$destino;
				passthru($command,$error);
				$status = "OK: Se a restaurado con exito la base de datos.";
				if ($error) 
				{
					$status = "ERROR: No se pudo restaurar la base de datos1.";
				} 
			} 
			else 
			{
				$status = "ERROR: No se pudo restaurar la base de datos2.";
			}
		} 
		else 
		{
			$status = "ERROR: Debes de seleccionar el archivo a restaurar.";
		}
	}
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="glossy/glossy.js"></script>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css"/>
<style type="text/css">
body
{
	background:url(img/fondo.png) repeat-x top left #eff3ff;
}
fieldset
{
	border-width:1px;
	border-style:solid;
	border-color:#990000;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
	margin:20px 10px 20px 0px;
	width:450px;
	position:relative;
	display:block;
	padding: 0px 10px 10px 10px;
	clear:both;
}
form fieldset h3{	
	background-color:none;
	border-width:0px;

	color:#646729;
	font-size:110%;
	font-weight:600;
	padding:3px 5px;
	margin:0px 0px 2px 0px;
}
form fieldset legend
{	
	background-color:#ecefcb;
	border-width:1px 10px 1px 10px;
	border-color:#990000;
	border-style:solid;
	color:#990000;
	font-weight:bold;
	text-transform:uppercase;
	font-size:90%;
	padding:3px 5px;	
	width:200;	
}
.label2
{
	background-image:url(img/label_bg01.gif);
	background-repeat:no-repeat;
	background-position: left;
	color:#FFFFFF;
	font-size:90%;
	font-weight:bold;
	border-width: 0px;
	height:24px;
	text-align:left;
	padding:0px 0px 0px 5px;
	margin:0px 0px 0px 5px;
	display:block;
}
.texto1
{
	background-color:#ffffff;
	border-width: 1px;
	border-style: solid solid solid solid;
	border-color:#990000;
	color:#323415;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:105%;
	width:100%;
}
input
{
	background-color:#FFFFFF;	
	width:150px;
}
input:focus 
{
	background-color:#fbfbf2;
	background-image:url(/icons/pencil.gif);
	background-repeat:no-repeat;
	background-position:right;
}
.button
{
	background-color:#990000;
	background-image:none;
	border-width:1px;
	border-style:solid;
	border-color:#323415;
	color:#ffff99;
	font-weight:bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size:100%;
	width:auto;
	padding:2px 14px;
	margin:15px 0px 0px 20px;
	clear:both;
}
.button:focus
{
	background-color:#FFFFFF;
	background-image:none;
	color:#bc3114;
}
</style>
<script type="text/JavaScript">
	function res()
	{
		document.Ffile.bandera.value="ingresar";
	    document.Ffile.submit();
	}
	function msn()
	{
		alert('Archivo subido...');
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
			<img src="img/restaurar.gif" border="0">
			<table border="0" width="400">
			<tr><td>
			<fieldset>
			<form name="Ffile" action="" method="post" enctype="multipart/form-data"> 
			<input type="hidden" name="bandera"/>			
			<table width="479" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2">&nbsp;				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;				</td>
			</tr>			
			<tr>
				<td width="143" height="30"><label class="label2">Buscar Archivo</label></td>
				<td ><input type="file" class="texto1" name="archivo"/></td>
			</tr>

			<tr>
				<td colspan="2">
					<center>
					<input type="button" name="Submit" value="Procesar"  onclick= "res(Ffile)" class="button" />
					</center>				</td>
			</tr>
			<tr>
				<td colspan="2" height="30"><center><b>
					&nbsp;<?php echo $status; ?>
					</b></center>				</td>
			</tr>
			</table>
			</form>
			</fieldset>
			</td>
			</tr>
			</table>
			<a href="matenimiento.php">
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