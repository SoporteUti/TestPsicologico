<?php
	session_start();
	
	if($_SESSION["access"]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='index.php';";
    	echo "</script>";
	}
	else
	{
	   

		$cod      = $_SESSION["cod"];
		$nombre   = $_SESSION["nombre"];
		$apellido = $_SESSION["apellido"]; 
//		$minutosX  = $_SESSION[m];
//		$segundosX = $_SESSION[s];
		$numpageX = $_SESSION["numpageraven"];
		$num_prue = $_SESSION["num_prue"];
	}

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

<SCRIPT LANGUAGE="JavaScript">
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
	body
	{
		background:url(img/fondo.png) repeat-x top left #eff3ff;
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
	FIELDSET 
	{
		-moz-border-radius: 10px;
		-webkit-border-radius: 10x;
		border-radius: 10px;
		background-color:#FFFFFF;
		border-style:solid;
		border-color:#bc3114;;
		padding: 0em 0em;
	}
	fieldset legend
	{	
		background-color:#f5ecdb;
		border-width:3px 3px 3px 3px;
		border-color:#bc3114;
		border-style:solid;
		color:#bf311b;
		font-weight:bold;
		font-size:90%;
		padding:3px 5px;
		margin:0px 0px 10px 20px;
		top: -12px;
	}
	.boton
	{
        background-color:#990000;
		background-image:none;
	
		border-width:1px;
		border-style:solid;
		border-color:#323415;
	
		color:#ffff99;
		font-weight:bold;
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
	
		width:auto;
		padding:2px 14px;
		margin:15px 0px 0px 20px;
		clear:both;
    }
	.boton:focus
	{
		background-color:#FFFFFF;
		background-image:none;
		color:#bc3114;
	}
</style>

<Script language="javascript">
function checkKeyCode(evt)
{

var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if(event.keyCode==116)
{
evt.keyCode=0;
return false
}
}
document.onkeydown=checkKeyCode;
</script>

<script type="text/JavaScript">
	function ini()
	{
		var ss = getCookie('SRaven');
		var mm = getCookie('MRaven');
		aux=0;
		if (ss== null) 
		{
			minutos=0; segundos=0;
		}
		else
		{
			minutos=mm; segundos=ss;
		}
		puntos=true;
	}
	function nuevo()
	{
		var ss = getCookie('SRaven');
		var mm = getCookie('MRaven');
		if (ss== null) 
		{
			minutos=0; segundos=0;
		}
		else
		{
			minutos = mm;
			segundos=ss;
		}
		puntos=true;
		aux=0;
	}
	function Tiempo() 
	{
		if(minutos==40 && segundos==0 && aux==0) 
		{
			Sexy.alert('TE QUEDAN 5 MINUTOS PARA FINALIZAR TU PRUEBA RAVEN...');
			aux=1;
		}
		if(puntos) 
		{
			++segundos;
		}
		if(segundos==60) 
		{ 
			segundos=0; 
			++minutos 
		}
		cad="";
		if(minutos<10) 
		{
			cad+="0";
		}
		cad=cad+minutos;
		if(puntos) 
		{
			cad+=":"; 
		}
		else
		{
			cad+=" ";
		}
		if(segundos<10) 
		{
			cad+="0";
		}
		cad=cad+segundos;
		puntos=!puntos;
		setCookie('MRaven',minutos);
		setCookie('SRaven',segundos);

		if(minutos==45 && segundos==0)
		{
			minutos==0;
			segundos=0;
			setCookie('MRaven',minutos);
			setCookie('SRaven',segundos);
			deleteCookie('SRaven');
			deleteCookie('MRaven');
			document.Fraven.sal.value="salir";
			document.Fraven.bandera.value="guardar";
	        document.Fraven.submit();
		}
		else
		{
			document.getElementById('tiempo').innerHTML = cad;
		}
	}
	var id;
	function sigue() 
	{ 
		id=setInterval("Tiempo()",500) 
	}
	function guardar()
	{
		document.Fraven.atras.value="";
		document.Fraven.bandera.value="guardar";
        document.Fraven.submit();
	}
	function anterior()
	{
		document.Fraven.atras.value="atras";
		document.Fraven.bandera.value="guardar";
        document.Fraven.submit();
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
<table cellpadding="0" cellspacing="0" width="1100" background="img/topR.png">
<tr>
	<td>
		<center>
				&nbsp;
		</center>
	</td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" width="1100" height="480" background="img/midenR.png">
<tr>
	<td>
		<center>
			<!--INICIO DEL CONTENIDO-->
			
			
			<form name="Fraven" method="POST">
			<?php
			echo'<table border="0"><tr><td>';
			echo'<img src="img/raven.gif"></td><td width="113"></td>';	
			echo'<td> <table background="img/reloj.jpg" width="113" height="50"><tr><td>';
			echo'<p STYLE="margin-left: 15px; color:#FFFFFF;  width:68; height:30; font:Times New Roman, Times, serif; font-size:30px" id="tiempo">00:00</p>';
			echo'</td></tr></table></td></tr></table>';
			
//			echo'<input type="hidden" name="m" value="'.$_SESSION[m].'">';
//			echo'<input type="hidden" name="s" value="'.$_SESSION[s].'">';
			//echo'<INPUT TYPE="button" NAME="boton"><br>';
			//$nn=$_GET['numpage'];
			$nn=$_SESSION["numpageraven"];
			if($nn == null)
			{
				$nn=0;
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'ini();';
					echo'sigue();';
					//echo'document.Fraven.boton.value="00:00";';
				echo'}';
				echo'</script>';
			}
			else
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'nuevo(Fraven);';
					echo'sigue();';
				echo'}';
				echo'</script>';
			}
			$OpcionRAVEN1="";
			$OpcionRAVEN2="";
			$OpcionRAVEN3="";
			$OpcionRAVEN4="";
			$OpcionRAVEN5="";
			$OpcionRAVEN6="";
			$OpcionRAVEN7="";
			$OpcionRAVEN8="";
			include("conexion.php");
			echo'<input type="hidden" name="bandera">';
			echo'<input type="hidden" name="atras" value="">';
			echo'<input type="hidden" name="numpages" value='.$nn.'>';
			echo'<input type="hidden" name="sal">';
			echo '<center>';
			echo'<div id="Layer1" style="width:1050px; height:400px; overflow: scroll;">';
			for($i=1; $i<=15; $i++)
			{
				$id = $i + ($nn * 15);
				///AQUI EMPIEZAN LAS PREGUNTAS DEL RAVEN/
				$sql0 = "SELECT * FROM tb_raven WHERE idraven=$id;";
				$result0 = mysqli_query($conexion,$sql0);
				if($row=mysqli_fetch_array($result0))
				{
					//EMPIEZA PARA VER CUAL ESTA SELECCIONADO DE LAS OPCIONES
					//AQUI SE LE TIENE QUE AGREGAR EL CODIGO DEL ASPIRANTE A LA CONSULTA 
					$sqlx = "SELECT respuesta FROM tb_respraven WHERE idraven='$id' AND idaspirante=$cod  AND idnum_prue=$num_prue;";
					$resultx = mysqli_query($conexion,$sqlx);
					if($rowx=mysqli_fetch_array($resultx))
					//var_dump($rowx);
					{
						echo'<input type="hidden" name="inser" value="1">';
						if($rowx["respuesta"]=="1")
						{
							$OpcionRAVEN1="checked";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="2")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="checked";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="3")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="checked";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="4")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="checked";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="5")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="checked";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="6")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="checked";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="7")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="checked";
							$OpcionRAVEN8="";
						}
						else if($rowx["respuesta"]=="8")
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="checked";
						}
						else
						{
							$OpcionRAVEN1="";
							$OpcionRAVEN2="";
							$OpcionRAVEN3="";
							$OpcionRAVEN4="";
							$OpcionRAVEN5="";
							$OpcionRAVEN6="";
							$OpcionRAVEN7="";
							$OpcionRAVEN8="";
						}
					}
					mysqli_free_result($resultx);
						//FIN DE LA BUSQUEDA
						echo'<table border="0" width="900"><tr><td>';
						echo'<fieldset>';
						echo'<legend>'.$row["preguntas"].'</legend>';
						echo'<table border="0" width="900" cellspacing=0 cellpadding=0>';
						echo'<tr><td>';						
						if($row["idraven"]<=24)
						{
							echo'<table border="0" width="375" cellspacing=0 cellpadding=0>';
							echo'<tr><td>&nbsp;</td>';
							echo'<td><img src="imgraven/'.$row["preguntas"].'.jpg" width="375" height="250"/></td>';
							echo'<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td></tr>';
							echo'</table>';
							echo'<td>';
							echo'<table border="0" width="525" cellspacing=0 cellpadding=0>';
							echo'<tr>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(1).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(2).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(3).jpg" width="120" height="80"/></td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td height="60">';
							echo'    <INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="1" '.$OpcionRAVEN1.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="2" '.$OpcionRAVEN2.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="3" '.$OpcionRAVEN3.' class="styled" /></td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
							echo'<tr>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(4).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(5).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(6).jpg" width="120" height="80"/></td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="4" '.$OpcionRAVEN4.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="5" '.$OpcionRAVEN5.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="6" '.$OpcionRAVEN6.' class="styled" /></td>';
							echo'</tr>';
							echo'<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
							echo'</table>';
						}
						else
						{
							echo'<table border="0" width="375" cellspacing=0 cellpadding=0>';
							echo'<tr><td>&nbsp;</td>';
							echo'<td><img src="imgraven/'.$row["preguntas"].'.jpg" width="375" height="250"/></td>';
							echo'<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td></tr>';
							echo'</table>';
							echo'<td>';
							echo'<table border="0" width="525" cellspacing=0 cellpadding=0>';
							echo'<tr>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(1).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(2).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(3).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(4).jpg" width="120" height="80"/></td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td height="60"><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="1" '.$OpcionRAVEN1.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="2" '.$OpcionRAVEN2.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="3" '.$OpcionRAVEN3.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="4" '.$OpcionRAVEN4.' class="styled" /></td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
							echo'<tr>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(5).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(6).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(7).jpg" width="120" height="80"/></td>';
							echo'<td>&nbsp;</td>';
							echo'<td rowspan="3"><img src="imgraven/'.$row["preguntas"].'(8).jpg" width="120" height="80"/></td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="5" '.$OpcionRAVEN5.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="6" '.$OpcionRAVEN6.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="7" '.$OpcionRAVEN7.' class="styled" /></td>';
							echo'<td><INPUT TYPE=radio NAME="RAVEN'.$row["idraven"].'" value="8" '.$OpcionRAVEN8.' class="styled" /></td>';
							echo'</tr>';
							echo'<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
							echo'</table>';
						}
						echo'</table>';
						echo'</fieldset>';
						echo'</td></tr></table>';
					}
					mysqli_free_result($result0);
					//FINAL DE LAS PREGUNTAS RAVEN

				}//fin del filtro que solo deja pasar 10 numeros
			if($nn!=0 && $nn<4)
			{
				echo'<INPUT TYPE="button" NAME="Anterior" value="<<Anterior" class="boton" onclick="anterior();">';	
			}
			if($nn==3)
			{
				echo'<INPUT TYPE="button" NAME="Finalizar" value="<<Finalizar>>" class="boton" onclick="guardar();">';
			}
			if($nn<3)
			{
				echo'<INPUT TYPE="button" NAME="Siguiente" value="Siguiente>>" class="boton" onclick="guardar();">';
			}
			echo'</div>';
			echo'</center></form>';
?>
			<!--FIN DEL CONTENIDO-->			
		</center>
	</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="1100" background="img/bajoR.png">
<tr>
	<td height="64">
		<center>

		</center>
	</td>
</tr>
</table>
</center>
</body>
</html>
<?php
	include('conexion.php');
	if(isset($_POST['bandera'])){
	$aux1=$_POST['bandera'];
	$aux2=$_POST['atras'];
//	$minutos=$_POST['m'];
//	$segundos=$_POST['s'];
	$numpage=$_POST['numpages'];
	$salir=$_POST['sal'];
	$inser=$_POST['inser'];
				
	if ($aux1=='guardar')
	{
		if($numpage==0)
		{
			$ppraven = array($_POST["RAVEN1"],$_POST["RAVEN2"],$_POST["RAVEN3"],$_POST["RAVEN4"],$_POST["RAVEN5"],$_POST["RAVEN6"],$_POST["RAVEN7"],$_POST["RAVEN8"],$_POST["RAVEN9"],$_POST["RAVEN10"],$_POST["RAVEN11"],$_POST["RAVEN12"],$_POST["RAVEN13"],$_POST["RAVEN14"],$_POST["RAVEN15"]);
		}
		if($numpage==1)
		{
			$ppraven = array($_POST["RAVEN16"],$_POST["RAVEN17"],$_POST["RAVEN18"],$_POST["RAVEN19"],$_POST["RAVEN20"],$_POST["RAVEN21"],$_POST["RAVEN22"],$_POST["RAVEN23"],$_POST["RAVEN24"],$_POST["RAVEN25"],$_POST["RAVEN26"],$_POST["RAVEN27"],$_POST["RAVEN28"],$_POST["RAVEN29"],$_POST["RAVEN30"]);
		}
		if($numpage==2)
		{
			$ppraven = array($_POST["RAVEN31"],$_POST["RAVEN32"],$_POST["RAVEN33"],$_POST["RAVEN34"],$_POST["RAVEN35"],$_POST["RAVEN36"],$_POST["RAVEN37"],$_POST["RAVEN38"],$_POST["RAVEN39"],$_POST["RAVEN40"],$_POST["RAVEN41"],$_POST["RAVEN42"],$_POST["RAVEN43"],$_POST["RAVEN44"],$_POST["RAVEN45"]);
		}
		if($numpage==3)
		{
			$ppraven = array($_POST["RAVEN46"],$_POST["RAVEN47"],$_POST["RAVEN48"],$_POST["RAVEN49"],$_POST["RAVEN50"],$_POST["RAVEN51"],$_POST["RAVEN52"],$_POST["RAVEN53"],$_POST["RAVEN54"],$_POST["RAVEN55"],$_POST["RAVEN56"],$_POST["RAVEN57"],$_POST["RAVEN58"],$_POST["RAVEN59"],$_POST["RAVEN60"]);
		}

		for($i=0; $i<15; $i++)
	  	{
			if($ppraven[$i]==null)
			{
				$ppraven[$i]="x";
			}

			$aux1 = $i + 1;			
			$aux1 = $aux1 + ($nn * 15);
			if($aux1<=60)
			{
				if($inser=="1")
				{
					$sql = "UPDATE tb_respraven SET respuesta='$ppraven[$i]' WHERE idraven='$aux1' AND idaspirante='$cod' AND idnum_prue='$num_prue';";
					$result = @mysqli_query($conexion,$sql);
				}
				else
				{
					$sql1 = "INSERT INTO tb_respraven (idraven,idaspirante,idnum_prue,respuesta) VALUES($aux1,'$cod','$num_prue','$ppraven[$i]');";
					//var_dump($sql1);
					$result1 = @mysqli_query($conexion,$sql1);
				}
			}
	  	}
		mysqli_close($conexion);
		if ($aux2=='atras')
		{
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			$numpage = $numpage - 1;
			$_SESSION["numpageraven"]=$numpage;
			echo'<script type="text/JavaScript">';
			echo'{';
				echo'location.href="testraven.php";';
			echo'}';
			echo'</script>';
		}
		else
		{
			$numpage = $numpage + 1;
			$_SESSION["numpageraven"]=$numpage;
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			if($salir=="salir")
			{
				$numpage = 12;
			}
			if($numpage<=3)
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="testraven.php";';
				echo'}';
				echo'</script>';
			}
			else
			{
				$_SESSION["testraven"]=false;
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="pruebaA.php?var=1";';
				echo'}';
				echo'</script>';
			}
		}
	}
}//fin isset
?>
