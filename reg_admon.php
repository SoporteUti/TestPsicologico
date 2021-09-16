<?php
	session_start();
	if($_SESSION[accessadmon]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='login_admon.php';";
    	echo "</script>";
	}
	else
	{
		$nombreadmon   = $_SESSION[nombreadmon];
		$apellidoadmon = $_SESSION[apellidoadmon]; 
		$id = $_SESSION[idadmon];
	}
include("conexion.php");
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css"/>

<script type="text/javascript">
var checkboxHeight = "25";
var radioHeight = "25";
var selectWidth = "190";

document.write('<style type="text/css">input.styled { display: none; } select.styled { position: relative; width: ' + selectWidth + 'px; opacity: 0; filter: alpha(opacity=0); z-index: 5; }</style>');

var Custom = 
	{
	  init: function() 
		{
		var inputs = document.getElementsByTagName("input"), span = Array(), textnode, option, active;
		for(a = 0; a < inputs.length; a++) 
		{
			if((inputs[a].type == "checkbox" || inputs[a].type == "radio") && inputs[a].className == "styled") 
			{
				span[a] = document.createElement("span");
				span[a].className = inputs[a].type;

				if(inputs[a].checked == true) 
				{
					if(inputs[a].type == "checkbox") 
					{
						position = "0 -" + (checkboxHeight*2) + "px";
						span[a].style.backgroundPosition = position;
					} 
					else 
					{
						position = "0 -" + (radioHeight*2) + "px";
						span[a].style.backgroundPosition = position;
					}
				}
				inputs[a].parentNode.insertBefore(span[a], inputs[a]);
				inputs[a].onchange = Custom.clear;
				span[a].onmousedown = Custom.pushed;
				span[a].onmouseup = Custom.check;
				document.onmouseup = Custom.clear;
			}
		}
	},
	pushed: function() {
		element = this.nextSibling;
		if(element.checked == true && element.type == "checkbox") {
			this.style.backgroundPosition = "0 -" + checkboxHeight*3 + "px";
		} else if(element.checked == true && element.type == "radio") {
			this.style.backgroundPosition = "0 -" + radioHeight*3 + "px";
		} else if(element.checked != true && element.type == "checkbox") {
			this.style.backgroundPosition = "0 -" + checkboxHeight + "px";
		} else {
			this.style.backgroundPosition = "0 -" + radioHeight + "px";
		}
	},
	check: function() {
		element = this.nextSibling;
		if(element.checked == true && element.type == "checkbox") {
			this.style.backgroundPosition = "0 0";
			element.checked = false;
		} else {
			if(element.type == "checkbox") {
				this.style.backgroundPosition = "0 -" + checkboxHeight*2 + "px";
			} else {
				this.style.backgroundPosition = "0 -" + radioHeight*2 + "px";
				group = this.nextSibling.name;
				inputs = document.getElementsByTagName("input");
				for(a = 0; a < inputs.length; a++) {
					if(inputs[a].name == group && inputs[a] != this.nextSibling) {
						inputs[a].previousSibling.style.backgroundPosition = "0 0";
					}
				}
			}
			element.checked = true;
		}
	},
	clear: function() {
		inputs = document.getElementsByTagName("input");
		for(var b = 0; b < inputs.length; b++) {
			if(inputs[b].type == "checkbox" && inputs[b].checked == true && inputs[b].className == "styled") {
				inputs[b].previousSibling.style.backgroundPosition = "0 -" + checkboxHeight*2 + "px";
			} else if(inputs[b].type == "checkbox" && inputs[b].className == "styled") {
				inputs[b].previousSibling.style.backgroundPosition = "0 0";
			} else if(inputs[b].type == "radio" && inputs[b].checked == true && inputs[b].className == "styled") {
				inputs[b].previousSibling.style.backgroundPosition = "0 -" + radioHeight*2 + "px";
			} else if(inputs[b].type == "radio" && inputs[b].className == "styled") {
				inputs[b].previousSibling.style.backgroundPosition = "0 0";
			}
		}
	},
}
window.onload = Custom.init;
</script>


<!--VALIDANDO LAS CAJAS DE TEXTO-->
<script language="javascript">
function validar(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;//Tecla de retroceso (para poder borrar)
    //patron =/[A-Z a-z &aacute;éíóú]/; // Solo acepta letras
	//patron =/[\t\D]/;
	patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
function validaredad(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;//Tecla de retroceso (para poder borrar)
	patron =/[\d\t]/;
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
</script>

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
	margin:5px 5px 10px 0px;
	position:relative;
	display:block;
	padding: 0px 5px 5px 10px;
	clear:both;
}
fieldset h3{	
	background-color:none;
	border-width:0px;
	color:#646729;
	font-size:110%;
	font-weight:600;
	padding:3px 5px;
	margin:0px 0px 2px 0px;
}
fieldset legend{	
	background-color:#ecefcb;
	border-width:1px 10px 1px 10px;
	border-color:#990000;
	border-style:solid;
	color:#990000;
	font-weight:bold;
	text-transform:uppercase;
	font-size:90%;
	padding:3px 5px;	
	width:303;
}
.label1
{
	background-image:url(img/label_bg.gif);
	background-repeat:no-repeat;
	background-position: left;
	color:#FFFFFF;
	font-size:90%;
	font-weight:bold;
	border-width: 0px;
	display:block;
	height:24px;
	text-align:left;
	margin:0px 0px 0px 5px;
	padding:0px 0px 0px 5px;
	clear:left;
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
.texto2
{
	background-color:#ffffff;
	border-width: 1px;
	border-style: solid solid solid solid;
	border-color:#990000;
	color:#323415;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:105%;
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
	background-color:#ecefcb;
	background-image:none;
	
	border-width:1px;
	border-style:solid;
	border-color:#323415;
	
	color:#990000;
	font-weight:bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size:100%;
	
	width:auto;
	padding:2px 14px;
	margin:0px 0px 0px 20px;
	clear:both;
}
.button2
{
	background-color:#ecefcb;
	background-image:none;
	border-width:1px;
	border-style:solid;
	border-color:#323415;
	color:#990000;
	font-weight:bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size:80%;
	width:auto;
	padding:2px 14px;
	margin:0px 0px 0px 20px;
	clear:both;
}
.button:focus
{
	background-color:#FFFFFF;
	background-image:none;
	color:#990000;
}
span.radio 
	{
		width: 19px;
		height: 25px;
		padding: 0 5px 0 0;
		background: url(img/radio.gif) no-repeat;
		display: block;
		clear: left;
		float: left;
	}
</style>

<script type="text/JavaScript">
	function salir()
	{
		location.href="matenimiento.php";
	}
	function actualizar()
	{
		if (document.Fadmon.txtnombre.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL NOMBRE...');
		}
		else if (document.Fadmon.txttel.value=="" || document.Fadmon.txtcargo.value=="" || document.Fadmon.txtusu.value=="" || document.Fadmon.txtpass.value=="" || document.Fadmon.txtpass2.value=="")
		{
			Sexy.alert('DEBE DE LLENAR TODOS LOS CAMPOS...');
		}
		else if(document.Fadmon.sexo[0].checked == false && document.Fadmon.sexo[1].checked == false )
		{
			Sexy.alert('DEBE SELECCIONAR EL SEXO...');
		}	
		else if(document.Fadmon.txtpass.value != document.Fadmon.txtpass2.value)
		{
			Sexy.alert('LAS CONTRASEÑAS NO COINCIDEN...');
		}
		else
		{
			document.Fadmon.bandera.value="actualizar";
	        document.Fadmon.submit();
		}
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
			<br><img src="img/encargado.gif" border="0"><br>
			<table width="840" border="0" cellpadding="0" cellspacing="0">
			  <tr><td>
			<fieldset>
			  <form name="Fadmon" method="post" action="">
			      <input type="hidden" name="bandera">
		        </p>
				<table width="232"><tr><td>
	</td></tr></table>
				<center>
	
<?php
	$sql = "SELECT * FROM tb_admon;";
	$result0 = mysql_query($sql, $conexion);
	if($row=mysql_fetch_array($result0))
	{
$id=$row['id'];	$nom=$row['nombre'];$tel=$row['tel'];$car=$row['cargo'];$sex=$row['sexo'];$usu=$row['usu'];$pass=$row['pass'];
$aux="ocultar";$passaux="12345678";
echo'<input type="hidden" name="act" value="'.$id.'">';
echo'<input type="hidden" name="password" value="'.$row['pass'].'">';

	if($sex=="1"){$rr1="checked";}else if($sex=="0"){$rr2="checked";}else{$rr2="";$rr1="";}
}
?>
				
				<fieldset>
			    <table width="790" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td height="30" colspan="5"><strong>Datos Personales </strong></td>
				    </tr>
				  <tr>
				    <td width="13%" height="30"><label class="label1">Nombres:
				      </label></td>
				    <td height="30" colspan="4"><input name="txtnombre" type="text" class="texto1" id="txtnombre" size="60" value="<?php echo $nom; ?>"></td>
				  </tr>
				  <tr>
				    <td height="30"><label class="label1">Sexo:</label></td>
				    <td width="15%" height="30"><label>
				        <INPUT TYPE="radio" NAME="sexo" value="1" class="styled" <?php echo $rr1; ?>>
				        <b>Masculino
				        </label></td>
				    <td width="28%"><input type="radio" name="sexo" value="0" class="styled" <?php echo $rr2; ?>>
			        <b>Femenino</td>
				    <td width="14%" height="30"><label class="label1">Tel&eacute;fono:
			        </label></td>
<td width="30%" height="30"><input name="txttel" type="text" class="texto1" id="txttel" onKeyPress="return validar(event)" size="10" maxlength="8" value="<?php echo $tel; ?>"></td>
				  </tr>
			</table>
		<table width="790" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="25%" height="30"><label class="label2">Cargo que desempe&ntilde;a:</label></td>
		    <td width="75%" height="30"><input name="txtcargo" type="text" class="texto1" id="txtcargo" size="57" value="<?php echo $car; ?>"></td>
		  </tr>
		</table>
				<table width="790" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td height="30" colspan="5"><strong>Datos de Usuario</strong> </td>
				    </tr>
				  <tr>
				    <td width="13%" height="30"><label class="label1">Usuario:
				      </label></td>
				    <td height="30" colspan="2"><input name="txtusu" type="text" class="texto1" id="txtusu" size="20" value="<?php echo $usu; ?>"></td>
				    <td width="26%"></td>
				    <td width="33%" height="30">&nbsp;</td>
				  </tr>
				  <tr>
				    <td height="30"><label class="label1">Password:</label></td>
				    <td height="30" colspan="2"><input name="txtpass" type="password" class="texto1" id="txtpass" size="20" value="<?php echo $passaux; ?>"></td>
				    <td height="30"><label class="label2">Confirmar Password:</label></td>
				    <td height="30"><input name="txtpass2" type="password" class="texto1" id="txtpass2" size="20" value="<?php echo $passaux; ?>"></td>
				    </tr>
			</table></fieldset>
<?php			
	echo'<input type="button" name="act" value="Actualizar" class="button" onclick= "actualizar(Fadmon)" />';
	echo'<input type="button" name="Salir" value="Salir" class="button" onclick= "salir()" />';
?>
		</form>
		</fieldset>
		</center></td></tr></table>
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
$nombre=$_POST['txtnombre'];
$sex=$_POST['sexo'];
$tel=$_POST['txttel'];
$cargo=$_POST['txtcargo'];
$usu=$_POST['txtusu'];
$pass1=$_POST['txtpass'];
$id=$_POST['act'];
$passhiden=$_POST['password'];

if($_POST['bandera']=="actualizar")
{
	if($pass1=="12345678"){$ppaass=''.$passhiden;}else{$ppaass= md5($pass1);}
	$sql = "UPDATE tb_admon SET nombre='$nombre',sexo='$sex',tel='$tel',cargo='$cargo',usu='$usu',pass='$ppaass' WHERE id='$id';";
	$result = @mysql_query($sql,$conexion) or die (mysql_error());
	mysql_close();
	echo'<script type="text/JavaScript">';
	echo'{';
		echo"location.href='reg_admon.php';";
	echo'}';
	echo'</script>';
}
?>