<?php
session_start();
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css"/>

<SCRIPT LANGUAGE="JavaScript">
var sraven = getCookie('SRaven');
var mraven = getCookie('MRaven');
if (sraven!=null || mraven!=null) 
{
	deleteCookie('SRaven');
	deleteCookie('MRaven');
}
var sotis = getCookie('SOtis');
var motis = getCookie('MOtis');
if (sotis != null || motis != null) 
{
	deleteCookie('SOtis');
	deleteCookie('MOtis');
}	
var scep = getCookie('SCep');
var mcep = getCookie('MCep');
if (scep != null || mcep != null) 
{
	deleteCookie('SCep');
	deleteCookie('MCep');
}
var sepq = getCookie('SEpq');
var mcep = getCookie('MEpq');
if (sepq != null || mepq != null) 
{
	deleteCookie('SEpq');
	deleteCookie('MEpq');
}

function getCookie(name)
	{
  		var cname = name + "=";               
  		var dc = document.cookie;             
  		if (dc.length > 0) 
		{              
    		begin = dc.indexOf(cname);       
    		if (begin != -1) 
			{           
      			begin += cname.length;       
      			end = dc.indexOf(";", begin);
      			if (end == -1) end = dc.length;
        		return unescape(dc.substring(begin, end));
    		} 
  		}
  		return null;
	}
	function setCookie(name, value, expires, path, domain, secure) 
	{
  		document.cookie = name + "=" + escape(value) + 
  		((expires == null) ? "" : "; expires=" + expires.toGMTString()) +
  		((path == null) ? "" : "; path=" + path) +
  		((domain == null) ? "" : "; domain=" + domain) +
  		((secure == null) ? "" : "; secure");
	}
	function deleteCookie( name, path, domain ) 
	{
		if ( getCookie( name ) ) document.cookie = name + '=' +
			( ( path ) ? ';path=' + path : '') +
			( ( domain ) ? ';domain=' + domain : '' ) +
			';expires=Thu, 01-Jan-1970 00:00:01 GMT';
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
	width:220;
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
	width:200;
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
	function salir()
	{
		location.href="rev_pruebas.php";
	}
	function ingresar()
	{
		if (document.Flogin.cod.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL N° DEL ASPIRANTE...');
			document.Flogin.cod.focus();
		}
		if (document.Flogin.ano.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR EL AÑO AL QUE ASPIRA...');
			document.Flogin.ano.focus();
		}
		else
		{
			document.Flogin.bandera.value="ingresar";
	        document.Flogin.submit();
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
		<center><br><br>
			<!--INICIO DEL CONTENIDO-->
			<form name="Flogin" method="post" action="">
			<input type="hidden" name="bandera"> 
			<center>
			<table width="400"><tr><td>
			  <fieldset>
			  <legend align="center">Volver hacer la prueba	</legend> <br>
			  <table width="424" border="0" cellpadding="0" cellspacing="0">
			  <tr>
				  <td width="159" height="30"><label for="lbnombre" class="label2">N° de Aspirante:</label></td>
			  	  <td width="201" height="30"><input name="cod" type="text" class="texto1" id="cod" /> </td>
				 
				</tr>
			  <tr>
			  <td width="159" height="30"><label for="lbnombre" class="label2">Año de Ingreso:</label></td>
			  <td width="201" height="30"><input name="ano" type="text" class="texto1" id="ano" maxlength="4" /> </td>
			  </tr>
			  
			  <tr>
			    <td colspan="2">			      
			      <div align="center">
			        <input type="button" name="Submit" value="Ingresar" class="button" onclick= "ingresar(Flogin)" /> &nbsp;&nbsp;&nbsp;&nbsp;
			        <input type="button" name="Salir" value="Salir" class="button" onclick= "salir()" />
			        </div></td></tr>
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
if(isset($_POST['bandera'])){
$aspi=$_POST['cod'];
$ano=$_POST['ano'];
$flag=false;
	$sqlx="SELECT idaspirante FROM tb_aspirantes WHERE idaspirante='$aspi' AND ano='$ano';";
	$result3 = mysqli_query($conexion,$sqlx);
	if($row=mysqli_fetch_array($result3))
	{
		$idaspirante=$row['idaspirante'];
	}
	$result3 = @mysqli_query($conexion,$sqlx);
	
if($_POST['bandera']=="ingresar")
{
	$sqlx="SELECT * FROM tb_auxresultados WHERE num_prue=1 AND idaspirante='$idaspirante';";
	$result3 = mysqli_query($conexion,$sqlx);
	if($row=mysqli_fetch_array($result3))
	{
		$flag=true;
	}
	$result3 = @mysqli_query($conexion,$sqlx);
	
	if($flag==true)
	{
		$sql="SELECT * FROM tb_aspirantes WHERE idaspirante='$aspi' AND ano='$ano';";
		$result0 = mysqli_query($conexion,$sql);
		if($row=mysqli_fetch_array($result0))
		{
			$_SESSION["access"] = true;
			$_SESSION["cod"] = $row['idaspirante'];
			$_SESSION["nombre"] = $row['nombre']; 
			$_SESSION["apellido"] = $row['apellido']; 
			$_SESSION["nit"] = $row['nit'];
			$_SESSION["s"] = 0;
			$_SESSION["m"] = 0;
			$_SESSION["numpageotis"] = 0;
			$_SESSION["numpageepq"] = 0;
			$_SESSION["numpageraven"] = 0;
			$_SESSION["numpagecep"] = 0;
			$_SESSION["num_prue"] = 2;
			//para que el aspirante solo pueda realizar una sola vez cada prueba
			$_SESSION["testotis"] = true;
			$_SESSION["testepq"] = true;
			$_SESSION["testraven"] = true;
			$_SESSION["testcep"] = true;
		
			echo'<script type="text/JavaScript">';
			echo'{';
				echo'location.href="pruebas.php";';
			echo'}';
			echo'</script>';
		}
		else
		{
			$_SESSION["acce"] = false;
			echo'<script type="text/JavaScript">';
			echo'{';
				echo'alert("ERROR: ASPIRANTE NO REGISTRADO...");';
			echo'}';
			echo'</script>';
		}
	}
	else
	{
			echo'<script type="text/JavaScript">';
			echo'{';
				echo"alert('ERROR: NO HA REALIZADO NINGUNA PRUEBA O YA REALIZO LAS 2 PRUEBAS PERMITIDAS POR EL SISTEMA...');";
			echo'}';
			echo'</script>';	
	}
}
}//fin isset
?>