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
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
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
    //patron =/[A-Z a-z �����]/; // Solo acepta letras
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
		
	margin:20px 10px 20px 0px;
/*	width:330px;*/
	position:relative;
	display:block;
	padding: 0px 10px 10px 10px;
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
	width:300;	
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
	margin:15px 0px 0px 20px;
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
	function guardar()
	{
		if (document.Faspirante.txtnit.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL NIT...');
		}
		else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(document.Faspirante.txtnit.value)) ) 
		{
			Sexy.alert('DEBES DE ESCRIBIR CORRECTAMENTE EL NUMERO DE NIT, FORMATO:###-######-###-#...');
		}
		else if (document.Faspirante.txtnombre.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL NOMBRE...');
		}
		else if (document.Faspirante.txtapellido.value=="")
		{
			Sexy.alert('DEBE ESCRIBIR EL APELLIDO...');
		}
		else if (document.Faspirante.edad.value=="" || document.Faspirante.prof.value=="")
		{
			Sexy.alert('DEBE DE LLENAR TODOS LOS CAMPOS...');
		}
		else if(document.Faspirante.sexo[0].checked == false && document.Faspirante.sexo[1].checked == false )
		{
			Sexy.alert('DEBE SELECCIONAR EL SEXO...');
		}	
		else
		{
			document.Faspirante.bandera.value="guardar";
	        document.Faspirante.submit();
		}
	}
	function volver()
	{
		location.href="rev_pruebas.php";
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
		<br>
			<!--INICIO DEL CONTENIDO-->
			<?php
				include("conexion.php");
				$consul="SELECT nit,nombre,apellido,sexo,edad,profesorado FROM tb_aspirantes t where idaspirante=$cod;";
				$result0 = mysqli_query($conexion,$consul);
				if($row=mysqli_fetch_array($result0))
				{
					$nit=$row['nit'];
					$nom=$row['nombre'];
					$ape=$row['apellido'];
					$sex=$row['sexo'];
					$edad=$row['edad'];
					$prof=$row['profesorado'];
				}
				if($sex=="M"){$ss1="checked";$ss2="";}elseif($sex=="F"){$ss1="";$ss2="checked";}

			?>
			<table width="840" border="0" cellpadding="0" cellspacing="0">
			  <tr><td><center>
			<fieldset>
			  <legend align="center">Actualizar datos personales</legend> 
			  <br>
			  <form name="Faspirante" method="post" action=""><input type="hidden" name="bandera"> 
				<table width="840" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td width="12%" height="30"><label class="label1">NIT:
				      </label></td>
				    <td height="30" colspan="2"><input name="txtnit" type="text" class="texto1" id="txtnit" size="25" value="<?php echo $nit; ?>"></td>
					</tr>
				  <tr>
				    <td width="12%" height="30"><label class="label1">Nombres:
				      </label></td>
				    <td height="30" colspan="2"><input name="txtnombre" type="text" class="texto1" id="txtnombre" size="25" value="<?php echo $nom; ?>"></td>
				    <td width="15%"><label class="label2">Apellidos:          
				      </label></td>
				    <td width="35%" height="30"><input name="txtapellido" type="text" class="texto1" id="txtapellido" size="25" value="<?php echo $ape; ?>"></td>
				  </tr>
				  <tr>
				    <td height="30"><label class="label1">Sexo:</label></td>
				    <td width="16%" height="30"><label>
				        <INPUT TYPE="radio" NAME="sexo" value="M" <?php echo $ss1; ?> class="styled">
				        <b>Masculino
				        </label></td>
				    <td width="22%"><input type="radio" name="sexo" value="F" <?php echo $ss2; ?> class="styled">
			        <b>Femenino</td>
				    <td height="30"><label class="label2">Edad (a&ntilde;os):
				      </label></td>
				    <td height="30"><input name="edad" type="text" class="texto1" id="edad" value="<?php echo $edad; ?>" onKeyPress="return validar(event)" size="5" maxlength="2"></td>
				  </tr>
			</table>
		<table width="840" border="0" cellspacing="0" cellpadding="0">
		<tr>
		    <td height="30"><label class="label2">Profesorado al que aspira ingresar:</label></td>
		    <td height="30"><select name="prof" class="texto1">
              <option value="">Seleccione Profesorado</option>
				<?php
					$sqlXX="SELECT * FROM tb_profesorados;";
					$resultXX = mysqli_query($conexion,$sqlXX);
					while($rowXX=mysqli_fetch_array($resultXX))
					{
						if($prof==$rowXX['cod'])
						{
							echo "<option value=".$rowXX['cod']." Selected >".$rowXX['nombre']."</option>";
						}
						else
						{
							echo "<option value=".$rowXX['cod'].">".$rowXX['nombre']."</option>";
						}
					}
				?>
            </select></td>
		  </tr>
		</table>
	    <input type="button" name="Submit" value="Actualizar" class="button" onclick= "guardar(Faspirante)" />
		<input type="button" name="Submit" value="Salir" class="button" onClick="volver();" />
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
if(isset($_POST['bandera'])){
$tiempo = time();
$fecha = date ( "Y/m/j" , $tiempo); 

$nit=$_POST['txtnit'];
$nombre=$_POST['txtnombre'];
$apellido=$_POST['txtapellido'];
$sex=$_POST['sexo'];
$edad=$_POST['edad'];
$prof=$_POST['prof'];

if($_POST['bandera']=="guardar")
{
	$sql="UPDATE tb_aspirantes SET nit='$nit',nombre='$nombre', apellido='$apellido', sexo='$sex', edad='$edad', profesorado='$prof' WHERE idaspirante='$cod';";
	$result = @mysqli_query($conexion,$sql) or die (mysqli_error($conexion));
	mysqli_close($conexion);

	echo'<script type="text/JavaScript">';
	echo'{';
		echo'location.href="act_aspirante.php";';
	echo'}';
	echo'</script>';
}
}//fin isset
?>
