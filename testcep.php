<?php
session_start();

	if($_SESSION[access]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='index.php';";
    	echo "</script>";
	}
	else
	{	
		$cod      = $_SESSION[cod];
		$nombre   = $_SESSION[nombre];
		$apellido = $_SESSION[apellido]; 
//		$minutosX  = $_SESSION[m];
//		$segundosX = $_SESSION[s];
		$numpageX = $_SESSION[numpagecep];
		$num_prue = $_SESSION[num_prue];
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
		padding: 0px 5px;
		margin-left:0;
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
		var ss = getCookie('SCep');
		var mm = getCookie('MCep');
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
		var ss = getCookie('SCep');
		var mm = getCookie('MCep');
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
		if(minutos==25 && segundos==0 && aux==0) 
		{
			Sexy.alert('TE QUEDAN 5 MINUTOS PARA FINALIZAR TU PRUEBA CEP...');
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
		setCookie('MCep',minutos);
		setCookie('SCep',segundos);
		
		if(minutos==30 && segundos==0) 
		{
			minutos=0;
			segundos=0;
			setCookie('MCep',minutos);
			setCookie('SCep',segundos);
			deleteCookie('SCep');
			deleteCookie('MCep');
			document.Fcep.sal.value="salir";
			document.Fcep.bandera.value="guardar";
	        document.Fcep.submit();
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
		document.Fcep.atras.value="";
		document.Fcep.bandera.value="guardar";
        document.Fcep.submit();
	}
	function anterior()
	{
		document.Fcep.atras.value="atras";
		document.Fcep.bandera.value="guardar";
        document.Fcep.submit();
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
<table cellpadding="0" cellspacing="0" width="910" height="480" background="img/mid2.jpg">
<tr>
	<td valign="top">
		<center>
			<!--INICIO DEL CONTENIDO-->
			<form name="Fcep" method="POST">
			<?php
				echo'<table border="0"><tr><td>';
				echo'<img src="img/cep.gif"></td><td width="50"></td>';	
				echo'<td> <table background="img/reloj.jpg" width="113" height="50"><tr><td>';
				echo'<p STYLE="margin-left: 15px; color:#FFFFFF;  width:68; height:30; font:Times New Roman, Times, serif; font-size:30px" id="tiempo">00:00</p>';
				echo'</td></tr></table></td></tr></table>';
				
//				echo'<input type="hidden" name="m" value="'.$_SESSION[m].'">';
//				echo'<input type="hidden" name="s" value="'.$_SESSION[s].'">';
				//echo'<INPUT TYPE="button" NAME="boton"><br>';
	//			$nn=$_GET['numpage'];
				$nn=$_SESSION[numpagecep];
				if($nn == null)
				{
					$nn=0;
					$f=50;
					echo'<script type="text/JavaScript">';
					echo'{';
						echo'ini();';
						echo'sigue();';
	//					echo'document.Fcep.boton.value="00:00";';
					echo'}';
					echo'</script>';
				}
				else if($nn<2)
				{
					$f=50;
					echo'<script type="text/JavaScript">';
					echo'{';
						echo'nuevo(Fcep);';
						echo'sigue();';
					echo'}';
					echo'</script>';
				}
				else if($nn==2)
				{
					$f=56;
					echo'<script type="text/JavaScript">';
					echo'{';
						echo'nuevo(Fcep);';
						echo'sigue();';
					echo'}';
					echo'</script>';
				}
				$OpcionCEP1="";
				$OpcionCEP2="";
				$OpcionCEP3="";
				include("conexion.php");
				echo'<input type="hidden" name="atras" value="">';
				echo'<input type="hidden" name="bandera">';
				echo'<input type="hidden" name="numpages" value='.$nn.'>';
				echo'<input type="hidden" name="sal">';
				echo '<center>';
				echo'<div id="Layer1" style="width:850px; height:400px; overflow: scroll;">';
				for($i=1; $i<=$f; $i++)
				{
					$id = $i + ($nn * 50);
					//AQUI EMPIEZA LAS PREGUNTAS DEL CEP//
					$sql0 = "SELECT * FROM tb_cep WHERE idcep=$id;";
					$result0 = mysql_query($sql0, $conexion);
					if($row=mysql_fetch_array($result0))
					{
						//EMPIEZA PARA VER CUAL ESTA SELECCIONADO DE LAS OPCIONES
						//AQUI SE LE TIENE QUE AGREGAR EL CODIGO DEL ASPIRANTE A LA CONSULTA 
						$sqlx = "SELECT respuesta FROM tb_respcep WHERE idcep='$id' AND idaspirante=$cod AND idnum_prue=$num_prue;";
						$resultx = mysql_query($sqlx, $conexion);
						if($rowx=mysql_fetch_array($resultx))
						{
							echo'<input type="hidden" name="inser" value="1">';
							if(eregi($rowx["respuesta"], "1"))
							{
								$OpcionCEP1="checked";
								$OpcionCEP2="";
								$OpcionCEP3="";
							}
							else if(eregi($rowx["respuesta"], "2"))
							{
								$OpcionCEP1="";
								$OpcionCEP2="checked";
								$OpcionCEP3="";
							}
							else if(eregi($rowx["respuesta"], "3"))
							{
								$OpcionCEP1="";
								$OpcionCEP2="";
								$OpcionCEP3="checked";
							}
							else
							{
								$OpcionCEP1="";
								$OpcionCEP2="";
								$OpcionCEP3="";
							}
						}
						mysql_free_result($resultx) or die (mysql_error());
						//FIN DE LA BUSQUEDA
						echo'<table border="0" width="700"><tr><td>';
						echo'<fieldset>';
						echo'<legend>'.$row["idcep"].'</legend>';
						$aux3++;
						echo'<table border="0" width="700">';
						echo '<tr><td width="20">&nbsp;</td><td align="left" colspan="4" width="680"><font size="5">'.utf8_encode($row["preguntas"]).'</td>';
						echo'<tr><td></td>';
						echo'<td align="left" width="100"><b>Si<INPUT TYPE=radio NAME="CEP'.$row["idcep"].'" value="1" '.$OpcionCEP1.' class="styled"/></td>';
						echo'<td align="left" width="100"><b>?<INPUT TYPE=radio NAME="CEP'.$row["idcep"].'" value="2"  '.$OpcionCEP2.' class="styled"/></td>';
						echo'<td align="left" width="100"><b>No<INPUT TYPE=radio NAME="CEP'.$row["idcep"].'" value="3" '.$OpcionCEP3.' class="styled"/></td>';
						echo'<td width="300">&nbsp;</td></tr>';
						echo'</table>';
						echo'</fieldset>';
						echo'</td></tr></table>';
					}
					mysql_free_result($result0) or die (mysql_error());
					//FIN DE PREGUNTAS CEP//

				}//fin del filtro que solo deja pasar 10 numeros
				if($nn!=0 && $nn<3)
				{
					echo'<INPUT TYPE="button" NAME="Anterior" value="<<Anterior" class="boton" onclick="anterior();">';	
				}
				if($nn==2)
				{
					echo'<INPUT TYPE="button" NAME="Finalizar" value="<<Finalizar>>" class="boton" onclick="guardar();">';
				}
				if($nn<2)
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
	include('conexion.php');
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
			$ppcep = array($_POST['CEP1'],$_POST['CEP2'],$_POST['CEP3'],$_POST['CEP4'],$_POST['CEP5'],$_POST['CEP6'],$_POST['CEP7'],$_POST['CEP8'],$_POST['CEP9'],$_POST['CEP10'],$_POST['CEP11'],$_POST['CEP12'],$_POST['CEP13'],$_POST['CEP14'],$_POST['CEP15'],$_POST['CEP16'],$_POST['CEP17'],$_POST['CEP18'],$_POST['CEP19'],$_POST['CEP20'],$_POST['CEP21'],$_POST['CEP22'],$_POST['CEP23'],$_POST['CEP24'],$_POST['CEP25'],$_POST['CEP26'],$_POST['CEP27'],$_POST['CEP28'],$_POST['CEP29'],$_POST['CEP30'],$_POST['CEP31'],$_POST['CEP32'],$_POST['CEP33'],$_POST['CEP34'],$_POST['CEP35'],$_POST['CEP36'],$_POST['CEP37'],$_POST['CEP38'],$_POST['CEP39'],$_POST['CEP40'],$_POST['CEP41'],$_POST['CEP42'],$_POST['CEP43'],$_POST['CEP44'],$_POST['CEP45'],$_POST['CEP46'],$_POST['CEP47'],$_POST['CEP48'],$_POST['CEP49'],$_POST['CEP50']);
			$fin = 50;
		}
		if($numpage==1)
		{
			$ppcep = array($_POST['CEP51'],$_POST['CEP52'],$_POST['CEP53'],$_POST['CEP54'],$_POST['CEP55'],$_POST['CEP56'],$_POST['CEP57'],$_POST['CEP58'],$_POST['CEP59'],$_POST['CEP60'],$_POST['CEP61'],$_POST['CEP62'],$_POST['CEP63'],$_POST['CEP64'],$_POST['CEP65'],$_POST['CEP66'],$_POST['CEP67'],$_POST['CEP68'],$_POST['CEP69'],$_POST['CEP70'],$_POST['CEP71'],$_POST['CEP72'],$_POST['CEP73'],$_POST['CEP74'],$_POST['CEP75'],$_POST['CEP76'],$_POST['CEP77'],$_POST['CEP78'],$_POST['CEP79'],$_POST['CEP80'],$_POST['CEP81'],$_POST['CEP82'],$_POST['CEP83'],$_POST['CEP84'],$_POST['CEP85'],$_POST['CEP86'],$_POST['CEP87'],$_POST['CEP88'],$_POST['CEP89'],$_POST['CEP90'],$_POST['CEP91'],$_POST['CEP92'],$_POST['CEP93'],$_POST['CEP94'],$_POST['CEP95'],$_POST['CEP96'],$_POST['CEP97'],$_POST['CEP98'],$_POST['CEP99'],$_POST['CEP100']);
			$fin = 50;
		}
		if($numpage==2)
		{
$ppcep = array($_POST['CEP101'],$_POST['CEP102'],$_POST['CEP103'],$_POST['CEP104'],$_POST['CEP105'],$_POST['CEP106'],$_POST['CEP107'],$_POST['CEP108'],$_POST['CEP109'],$_POST['CEP110'],$_POST['CEP111'],$_POST['CEP112'],$_POST['CEP113'],$_POST['CEP114'],$_POST['CEP115'],$_POST['CEP116'],$_POST['CEP117'],$_POST['CEP118'],$_POST['CEP119'],$_POST['CEP120'],$_POST['CEP121'],$_POST['CEP122'],$_POST['CEP123'],$_POST['CEP124'],$_POST['CEP125'],$_POST['CEP126'],$_POST['CEP127'],$_POST['CEP128'],$_POST['CEP129'],$_POST['CEP130'],$_POST['CEP131'],$_POST['CEP132'],$_POST['CEP133'],$_POST['CEP134'],$_POST['CEP135'],$_POST['CEP136'],$_POST['CEP137'],$_POST['CEP138'],$_POST['CEP139'],$_POST['CEP140'],$_POST['CEP141'],$_POST['CEP142'],$_POST['CEP143'],$_POST['CEP144'],$_POST['CEP145'],$_POST['CEP146'],$_POST['CEP147'],$_POST['CEP148'],$_POST['CEP149'],$_POST['CEP150'],$_POST['CEP151'],$_POST['CEP152'],$_POST['CEP153'],$_POST['CEP154'],$_POST['CEP155'],$_POST['CEP156']);
			$fin = 56;
		}

		for($i=0; $i<$fin; $i++)
	  	{
			if($ppcep[$i]==null)
			{
				$ppcep[$i]=0;
			}
			$aux1 = $i + 1;
			$aux1 = $aux1 + ($numpage * 50);
			if($aux1<=156)
			{
				if($inser=="1")
				{
					$sql = "UPDATE tb_respcep SET respuesta='$ppcep[$i]' WHERE idcep='$aux1' AND idaspirante='$cod' AND idnum_prue='$num_prue';";
					$result = @mysql_query($sql,$conexion) or die (mysql_error());
				}
				else
				{
					$sql = "INSERT INTO tb_respcep (idcep,idaspirante,idnum_prue,respuesta) VALUES($aux1,'$cod','$num_prue','$ppcep[$i]');";
					$result = @mysql_query($sql,$conexion) or die (mysql_error());
				}
			}
	  	}
		mysql_close();
		if ($aux2=='atras')
		{
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			$numpage = $numpage - 1;
			$_SESSION[numpagecep]=$numpage;
			echo'<script type="text/JavaScript">';
			echo'{';
				echo'location.href="testcep.php";';
			echo'}';
			echo'</script>';
		}
		else
		{
			$numpage = $numpage + 1;
			$_SESSION[numpagecep]=$numpage;
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			if($salir=="salir")
			{
				$numpage = 16;
			}
			if($numpage<=2)
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="testcep.php";';
				echo'}';
				echo'</script>';
			}
			else
			{
				$_SESSION[testcep]=false;
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="pruebaA.php?var=2";';
				echo'}';
				echo'</script>';
			}
		}
	}
?>