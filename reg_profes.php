<?php
	session_start();
	if($_SESSION["accessadmon"]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='login_admon.php';";
    	echo "</script>";
	}
	else
	{
		$nombreadmon   = $_SESSION["nombreadmon"];
		$apellidoadmon = $_SESSION["apellidoadmon"]; 
		$id = $_SESSION["idadmon"];
	}
include("conexion.php");
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css"/>
<link rel="stylesheet" type="text/css" media="all" href="js/css_tablas.css"/>
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
	width:200;
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
	function canc()
	{
		location.href="reg_profes.php";
	}
	function guardar()
	{
		if (document.Fcarr.codigo.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL CODIGO...');
		}
		else if (document.Fcarr.nombre.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL NOMBRE...');
		}
		else
		{
			document.Fcarr.bandera.value="guardar";
	        document.Fcarr.submit();
		}
	}
	function actualizar()
	{
		if (document.Fcarr.codigo.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL CODIGO...');
		}
		else if (document.Fcarr.nombre.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL NOMBRE...');
		}
		else if(document.Fcarr.comprobarcod.value!=document.Fcarr.codigo.value)
		{
			Sexy.alert('NO PUEDE MODIFICAR EL CODIGO, SI QUIERE CAMBIARLO DEBE DE ELIMINARLO PRIMERO Y DESPUES VOLVER A REGISTRAR NUEVAMENTE LA CARRERA DE PROFESORADO...');
		}
		else
		{
			document.Fcarr.bandera.value="actualizar";
	        document.Fcarr.submit();
		}
	}
	function eli()
	{
		if (document.Fcarr.codigo.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL CODIGO DE LA CARRERA A ELIMINAR...');
		}
		else
 		{
			document.Fcarr.bandera.value="eliminar";
	        document.Fcarr.submit();
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
		<img src="img/carr_profe.gif" border="0">
			<!--INICIO DEL CONTENIDO-->
			<?php
				include("conexion.php");
				$flag=false; $ccod="";$nom2="";
				if(isset($_GET['var'])){
				$ccod=$_GET['var'];
				if($ccod==null){$flag=false; $ccod="";$nom2="";}
				else 
				{
					$flag=true;
					$ssql="SELECT cod,nombre FROM tb_profesorados WHERE cod='$ccod';";
					$result3 = mysqli_query($conexion,$ssql);
					if($row=mysqli_fetch_array($result3))
					{
						$nom2=''.$row['nombre'];
					}
					mysqli_free_result($result3);
				}
			}//fin isset
				$consul='SELECT cod,nombre FROM tb_profesorados ORDER BY cod ASC;';
			?>
			<table width="840" border="0" cellpadding="0" cellspacing="0">
			  <tr><td>
			<fieldset>
			  <form name="Fcarr" method="post" action="">
		      <input type="hidden" name="bandera">
			  <input type="hidden" name="comprobarcod" value="<?php echo''.$ccod; ?>">
		        </p>
				<table width="232"><tr><td>
				<fieldset>
				<table height="30" width="230" border="0" cellpadding="0" cellspacing="0">
				<tr><td colspan="3"><b>Datos de la Carrera a Registrar...</td></tr>
				<tr>
				<td width="64">
					<label class="label1">CODIGO:</label>
				</td>
				<td width="19">
				<input name="codigo" type="text" class="texto1" size="8" maxlength="6" value="<?php echo ''.$ccod; ?>">
				</td>
				</tr>
				<tr>
				<td width="64" height="30">
					<label class="label1">NOMBRE:</label>
				</td>
				<td colspan="2">
					<input name="nombre" type="text" class="texto1" size="50" value="<?php echo ''.$nom2; ?>">
				</td>
				</tr>
	
				</table>
				<table>
				<tr>
				<td>
				<?php
					if($flag==false)
					{
						echo'<input type="button" name="reg" value="Registrar" class="button2" onclick= "guardar()" />';
						echo'<input type="reset" name="cancelar" value="Cancelar" class="button2"/>';
						echo'<input type="button" name="sal" value="Salir" class="button2" onclick= "salir()" />';						
					}
					else 
					{
						echo'<input type="button" name="act" value="Actualizar" class="button2" onclick= "actualizar()" />';
						echo'<input type="button" name="eliminar" value="Eliminar" class="button2" onclick= "eli()"/>';
						echo'<input type="button" name="cancelar" value="Cancelar" class="button2" onclick= "canc()" />';
						echo'<input type="button" name="sal" value="Salir" class="button2" onclick= "salir()" />';							
					}
				?>
				</td>
				</tr>
				</table>
				</fieldset></td></tr></table>
				<center>
				<fieldset>
			    <table width="790" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td height="30" colspan="5"><strong>Listado de las Carreras Registradas...</strong></td>
				    </tr>
				  <tr>
				  <td>
 <div id="Layer1" style="width:820px; height:150px; overflow: scroll;">
<table border="0" cellpadding="0" cellspacing="0" class="tabla">
<tr>
<th width="80">Codigo</th>
<th width="580">Nombre</th>
<th width="30">Ver</th>
</tr>

<?php
$result0 = mysqli_query($conexion,$consul);
$i=0;
while($row=mysqli_fetch_array($result0))
{
?>						
<tr <?php if (($i%2)==0) {?>class="modo1" <?php }else {?> class="modo2" <?php } ?> onMouseOver="this.className='modo3'" onMouseOut="<?php if (($i%2)==0) {?>this.className='modo1' <?php } else { ?> this.className='modo2'<?php } ?> ">
<?php	
$i++;
echo'<td width="80">'.$row['cod'].'</td>';
echo'<td>'.$row['nombre'].'</td>';
echo'<td><a href="reg_profes.php?var='.$row['cod'].'"><img src="img/lupa.gif" border="0" width="20" height="20"></a></td>';
echo'</tr>';
}
mysqli_free_result($result0);
?>

</table>
</div>

				  </td>
				  </tr>
			</table></fieldset>
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
$cod=$_POST['codigo'];
$nom=$_POST['nombre'];
$flag=false;
if($_POST['bandera']=="guardar")
{
	//var_dump($cod);
	$sqlx="SELECT * FROM tb_profesorados WHERE cod='$cod';";
	$result3 = mysqli_query($conexion,$sqlx);
	if($row=mysqli_fetch_array($result3))
	{
		$flag=true;
	}
	$result3 = @mysqli_query($conexion,$sqlx);

	if($flag==false)
	{
		$sql = "INSERT INTO tb_profesorados (cod,nombre) VALUES('$cod','$nom');";
		$result = @mysqli_query($conexion,$sql);
		
		echo'<script type="text/JavaScript">';
		echo'{';
			echo"location.href='reg_profes.php';";
		echo'}';
		echo'</script>';
		$result = @mysqli_query($conexion,$sql);
		
	}
	else
	{
		echo'<script type="text/JavaScript">';
		echo'{';
			echo"alert('CODIGO DE CARRERA A PROFESORADO YA ESTA REGISTRADO...');";
		echo'}';
		echo'</script>';
	}
}
if($_POST['bandera']=="actualizar")
{
	$sql = "UPDATE tb_profesorados SET nombre='$nom' WHERE cod='$cod';";
	$result = @mysqli_query($conexion,$sql);
	
	echo'<script type="text/JavaScript">';
	echo'{';
		echo"location.href='reg_profes.php?var=$cod';";
	echo'}';
	echo'</script>';
}
if($_POST['bandera']=="eliminar")
{
	$sqlx="SELECT * FROM tb_aspirantes WHERE profesorado='$cod';";
	$result3 = mysqli_query($conexion,$sqlx);
	while($row=mysqli_fetch_array($result3))
	{
		$flag=true;
	}
	$result3 = @mysqli_query($conexion,$sqlx);

	if($flag==false)
	{	
		$sql = "DELETE FROM tb_profesorados WHERE cod='$cod';";
		$result = @mysqli_query($conexion,$sql);
	
		echo'<script type="text/JavaScript">';
		echo'{';
			echo"location.href='reg_profes.php';";
		echo'}';
		echo'</script>';
	}
	else
	{
		echo'<script type="text/JavaScript">';
		echo'{';
			echo"alert('NO PUEDES ELIMINAR ESTE CARRERA PORQUE HAY ASPIRANTES INSCRITOS EN ELLA...');";
		echo'}';
		echo'</script>';
	}
}

}//fin isset
?>