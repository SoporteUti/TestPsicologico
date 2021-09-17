<?php
session_start();
?>
<html>
<head>
<title>.::UES::.</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
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

function validar(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;//Tecla de retroceso (para poder borrar)
	patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 



//para validar eel NIT

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
	width:350px;
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
	width:158;	
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
	width:150;	
}
.texto1
{
	background-color:#ffffff;
	border-width: 1px;
	border-style: solid solid solid solid;
	border-color:#990000;
	color:#323415;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:100%;
}
input
{
	background-color:#FFFFFF;	
	width:180px;
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
		if (document.Flogin.txtaspirante.value=="")
 		{
//		 	alert('DEBE ESCRIBIR EL NOMBRE DE USUARIO..');
			Sexy.alert('DEBE ESCRIBIR EL NUMERO DE ASPIRANTE...');
			document.Flogin.txtaspirante.focus();
		}
		else if (document.Flogin.txtnit2.value=="")
		{
// 			alert('DEBE ESCRIBIR LA CONTRASE�A..');
			Sexy.alert('DEBE ESCRIBIR SU NUMERO DE NIT....');
			document.Flogin.txtnit2.focus();
		}
		else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(document.Flogin.txtnit2.value)) ) 
		{
			Sexy.alert('DEBES DE ESCRIBIR CORRECTAMENTE EL NUMERO DE NIT, FORMATO:###-######-###-#...');
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
	
//para llamarlo onkeyup="mascara(this,'-',patron,true)" 
var patron = new Array(4,6,3,1)
var patron2 = new Array(1,3,3,3,3)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
	val = d.value
	largo = val.length
	val = val.split(sep)
	val2 = ''
	for(r=0;r<val.length;r++){
		val2 += val[r]	
	}
	if(nums){
		for(z=0;z<val2.length;z++){
			if(isNaN(val2.charAt(z))){
				letra = new RegExp(val2.charAt(z),"g")
				val2 = val2.replace(letra,"")
			}
		}
	}
	val = ''
	val3 = new Array()
	for(s=0; s<pat.length; s++){
		val3[s] = val2.substring(0,pat[s])
		val2 = val2.substr(pat[s])
	}
	for(q=0;q<val3.length; q++){
		if(q ==0){
			val = val3[q]
		}
		else{
			if(val3[q] != ""){
				val += sep + val3[q]
				}
		}
	}
	d.value = val
	d.valant = val
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
			<table border="0" width="300">
			<tr><td>
			  <fieldset>
			  <legend align="center">Iniciar Evaluacion</legend> <br>
			  <table width="351" border="0" cellpadding="0" cellspacing="0">
			  <tr>
				  <td width="146"  height="30"><label for="lbnombre" class="label2">
					N� Aspirante:</label></td>
			  	  <td width="201"  height="30">
					<input name="txtaspirante" type="text" class="texto1" id="txtaspirante" onKeyPress="return validar(event)" size="6"  maxlength="6"/> </td>
			  </tr>
			  <tr>
			  	<td height="30"><label for="ape" class="label2">NIT:</label></td>
			  	<td height="30"><input name="txtnit2" type="text" class="texto1" id="txtnit2" size="30"  maxlength="17"  />	</td>
			</tr>
			  <tr>
			  <td colspan="2"><center><input type="button" name="Submit" value="Ingresar" class="button" onclick= "ingresar(Flogin)" />			<input type="button" name="Submit" value="Salir" class="button" onClick="volver();" /></center></td>
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
if (isset($_POST['bandera'])) {

$tiempo = time();
$fecha = date ( "Y/m/j" , $tiempo); 

include("conexion.php");
$naspirante=$_POST['txtaspirante'];
$nit2=$_POST['txtnit2'];
$flag=false;

if($_POST['bandera']=="ingresar")
{
		$sql="SELECT * FROM tb_aspirantes WHERE idaspirante='$naspirante' AND nit='$nit2';";
		$result0 = mysqli_query($conexion,$sql);
		if($row=mysqli_fetch_array($result0))
		{
			$cod_asp=$row['idaspirante']; 
			
			$sqlXX="SELECT * FROM tb_auxresultados WHERE idaspirante=$cod_asp;";
			$resultXX = mysqli_query($conexion,$sqlXX);
			if($rowXX=mysqli_fetch_array($resultXX))
			{
				$flag=true;
			}	
			if($flag==false)
			{
				$sql2 = "update tb_aspirantes set fecha='$fecha' where idaspirante=$cod_asp;";
				$result2 = @mysqli_query($conexion,$sql2);
				
				$_SESSION["access"] = true;
				$_SESSION["cod"] = $row['idaspirante'];
				$_SESSION["nombre"] = $row['nombre']; 
				$_SESSION["apellido"] = $row['apellido']; 
				$_SESSION["nit"] = $row['nit'];
				$_SESSION["numpageotis"] = 0;
					$_SESSION["numpageepq"] = 0;
				$_SESSION["numpageraven"] = 0;
				$_SESSION["numpagecep"] = 0;
				$_SESSION["num_prue"] = 1;
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
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'alert("Ya realizaste la evaluci�n....");';
				echo'}';
				echo'</script>';
			}
		}
			else
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'alert("Datos incorrectos....");';
				echo'}';
				echo'</script>';
			}
}
}//fin isset
?>