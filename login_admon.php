<?php
session_start();
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css"/>

<style type="text/css">
body{
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
	width:330px;
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
	width:108;	
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
	function ingresar()
	{
		if (document.Flogin.txtAdmon.value=="")
 		{
//		 	alert('DEBE ESCRIBIR EL NOMBRE DE USUARIO..');
			Sexy.alert('DEBE ESCRIBIR EL NOMBRE DE USUARIO...');
			document.Flogin.txtnombre.focus();
		}
		else if (document.Flogin.txtPass.value=="")
		{
// 			alert('DEBE ESCRIBIR LA CONTRASEÑA..');
			Sexy.alert('DEBE ESCRIBIR LA CONTRASEÑA....');
			document.Flogin.txtPass.focus();
		}
		else
		{
			document.Flogin.bandera.value="ingresar";
	        document.Flogin.submit();
		}
	}
	function volver()
	{
		location.href="index.php";
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
		<center><br><br>
			<!--INICIO DEL CONTENIDO-->
			<form name="Flogin" method="post" action="">
			<input type="hidden" name="bandera"> 
			<center>
			<table border="0" width="300">
			<tr><td>
			  <fieldset>
			  <legend align="center">Iniciar Ses&iacute;on</legend> <br>
			  <table width="299" border="0" cellpadding="0" cellspacing="0">
			  <tr>
				  <td  height="30"><label for="lbnombre" class="label2">Administrador:</label></td>
			  	  <td  height="30"><input name="txtAdmon" type="text" class="texto1" id="txtAdmon" size="20" /> </td>
			  </tr>
			  <tr>
			  	<td height="30"><label for="ape" class="label2">Contrase&ntilde;a:</label></td>
			  	<td height="30"><input name="txtPass" type="password" class="texto1" id="txtPass" size="20" />	</td>
			</tr>
			  <tr>
			  <td><center><input type="button" name="Submit" value="Ingresar" class="button" onclick= "ingresar(Flogin)" /></center></td>
			  <td><center><input type="button" name="Submit" value="Salir" class="button" onClick="volver();" /></center></td>
			  </tr>
			  </table>
			  </fieldset>
			  </td></tr></table>
			 </center>
			</form>
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

<?php
include("conexion.php");
if (isset($_POST['txtAdmon'])) {
	
$usuario=$_POST['txtAdmon'];
$pass=$_POST['txtPass'];
$ppaass=md5($pass);
if($_POST['bandera']=="ingresar")
{
	$sql="SELECT * FROM tb_admon WHERE usu='$usuario' AND pass='$ppaass';";
	$result0 = mysqli_query($conexion,$sql);
	//var_dump($result0);
	if($row=mysqli_fetch_array($result0))
	{
		$_SESSION[accessadmon] = true;
		$_SESSION[nombreadmon]= $row['nombre'];
		$_SESSION[apellidoadmon]=$row['apellido']; 
		$_SESSION[idadmon]= $row['id'];
		echo'<script type="text/JavaScript">';
		echo'{';
			echo'location.href="administrador.php";';
		echo'}';
		echo'</script>';
	}
	else
	{
		echo'<script type="text/JavaScript">';
		echo'{';
		echo'alert("ERROR...");';
		echo'}';
		echo'</script>';
	}
}
}//isset
?>