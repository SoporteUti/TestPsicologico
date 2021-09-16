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
		var ss = getCookie('SOtis');
		var mm = getCookie('MOtis');
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
		var ss = getCookie('SOtis');
		var mm = getCookie('MOtis');
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
			Sexy.alert('TE QUEDAN 5 MINUTOS PARA FINALIZAR TU PRUEBA OTIS...');
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
		setCookie('MOtis',minutos);
		setCookie('SOtis',segundos);
		
		if(minutos==30 && segundos==0)
		{
			deleteCookie('SOtis');
			deleteCookie('MOtis');
			document.Fotis.sal.value="salir";
			document.Fotis.bandera.value="guardar";
	        document.Fotis.submit();
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
//		document.Fotis.m.value=minutos;
//		document.Fotis.s.value=segundos;
		document.Fotis.atras.value="";
		document.Fotis.bandera.value="guardar";
        document.Fotis.submit();
	}
	function anterior()
	{
//		document.Fotis.m.value=minutos;
//		document.Fotis.s.value=segundos;
		document.Fotis.atras.value="atras";
		document.Fotis.bandera.value="guardar";
        document.Fotis.submit();
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
	<td>
		<center>
			<!--INICIO DEL CONTENIDO-->
			<form name="Fotis" method="POST">
			<?php
				echo'<table border="0"><tr><td>';
				echo'<img src="img/otis.gif"></td><td width="50"></td>';	
				echo'<td> <table background="img/reloj.jpg" width="113" height="50"><tr><td>';
				echo'<p STYLE="margin-left: 15px; color:#FFFFFF;  width:68; height:30; font:Times New Roman, Times, serif; font-size:30px" id="tiempo">00:00</p>';
				echo'</td></tr></table></td></tr></table>';
							
//				echo'<input type="hidden" name="m" value="'.$_SESSION[m].'">';
//				echo'<input type="hidden" name="s" value="'.$_SESSION[s].'">';
				
/*				echo $_SESSION[m]."<br>";*/
//				$nn=$_GET['numpage'];
				$nn=$_SESSION[numpageotis];
				if($nn == null)
				{
					$nn=0;
					echo'<script type="text/JavaScript">';
					echo'{';
						echo'ini();';
						echo'sigue();';
						//echo'document.Fotis.boton.value="00:00";';
					echo'}';
					echo'</script>';
				}
				else if($nn<=2)
				{
					echo'<script type="text/JavaScript">';
					echo'{';
						echo'nuevo(Fotis);';
						echo'sigue();';
					echo'}';
					echo'</script>';
				}
				include("conexion.php");	
				$OpcionOTIS1="";
				$OpcionOTIS2="";
				$OpcionOTIS3="";
				$OpcionOTIS4="";
				$OpcionOTIS5="";
				echo'<input type="hidden" name="bandera">';
				echo'<input type="hidden" name="atras" value="">';
				echo'<input type="hidden" name="numpages" value='.$_SESSION[numpageotis].'>';
				echo'<input type="hidden" name="sal">';
				echo '<center>';
				echo'<div id="Layer1" style="width:850px; height:400px; overflow: scroll;">';
				for($i=1; $i<=25; $i++)
				{
					$id = $i + ($nn * 25);
					///AQUI EMPIEZAN LAS PREGUNTAS DEL OTIS/
					//$sql0 = "SELECT * FROM $tabla0 ORDER BY idotis asc";
					$sql0 = "SELECT idotis,preguntas FROM tb_otis WHERE idotis='$id';";
					$result0 = mysql_query($sql0, $conexion);
					if($row=mysql_fetch_array($result0))
					{
						echo'<table border="0" width="600"><tr><td>';
						echo'<fieldset>';
						echo'<legend>'.$row["idotis"].'</legend>';
						echo'<table border="0" width="800">';
						echo '<tr><td width="20">&nbsp;</td><td colspan="5" align="left"><font size="5">'.utf8_encode(nl2br($row["preguntas"])).'</td>';
						echo'</tr></table>';
						$sql1="SELECT * FROM tb_opcotis WHERE idotis=".$row["idotis"].";";
						$result1 = mysql_query($sql1, $conexion);
						if($row1=mysql_fetch_array($result1))
						{
							//EMPIEZA PARA VER CUAL ESTA SELECCIONADO DE LAS OPCIONES
							//AQUI SE LE TIENE QUE AGREGAR EL CODIGO DEL ASPIRANTE A LA CONSULTA 
							$sqlx = "SELECT respuesta FROM tb_respotis WHERE idotis=".$row["idotis"]."  AND idaspirante=$cod AND idnum_prue=$num_prue;";
							$resultx = mysql_query($sqlx, $conexion);
							if($rowx=mysql_fetch_array($resultx))
							{
								echo'<input type="hidden" name="inser" value="1">';
								if(eregi($rowx["respuesta"], "A"))
								{
									$OpcionOTIS1="checked";
									$OpcionOTIS2="";
									$OpcionOTIS3="";
									$OpcionOTIS4="";
									$OpcionOTIS5="";
								}
								else if(eregi($rowx["respuesta"], "B"))
								{
									$OpcionOTIS1="";
									$OpcionOTIS2="checked";
									$OpcionOTIS3="";
									$OpcionOTIS4="";
									$OpcionOTIS5="";									
								}
								else if(eregi($rowx["respuesta"], "C"))
								{
									$OpcionOTIS1="";
									$OpcionOTIS2="";
									$OpcionOTIS3="checked";
									$OpcionOTIS4="";
									$OpcionOTIS5="";
								}
								else if(eregi($rowx["respuesta"], "D"))
								{
									$OpcionOTIS1="";
									$OpcionOTIS2="";
									$OpcionOTIS3="";
									$OpcionOTIS4="checked";
									$OpcionOTIS5="";
								}
								else if(eregi($rowx["respuesta"], "E"))
								{
									$OpcionOTIS1="";
									$OpcionOTIS2="";
									$OpcionOTIS3="";
									$OpcionOTIS4="";
									$OpcionOTIS5="checked";
								}
								else
								{
									$OpcionOTIS1="";
									$OpcionOTIS2="";
									$OpcionOTIS3="";
									$OpcionOTIS4="";
									$OpcionOTIS5="";
								}
							}
							mysql_free_result($resultx) or die (mysql_error());
							//FIN 
							echo'<table border="0" width="800">';
							if($row1["idotis"]=="16" || $row1["idotis"]=="19" || $row1["idotis"]=="22" || $row1["idotis"]=="24" || $row1["idotis"]=="32" || $row1["idotis"]=="38" || $row1["idotis"]=="40" || $row1["idotis"]=="46" || $row1["idotis"]=="47" || $row1["idotis"]=="50" || $row1["idotis"]=="53" || $row1["idotis"]=="55" || $row1["idotis"]=="62" || $row1["idotis"]=="68")
							{
echo'<tr><td width="3%"><td align="left" width="100%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="A" '.$OpcionOTIS1.' class="styled" /><b>'.utf8_encode($row1["A"]);	
echo'<tr><td width="3%"><td align="left" width="100%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="B" '.$OpcionOTIS2.' class="styled" /><b>'.utf8_encode($row1["B"]);	
echo'<tr><td width="3%"><td align="left" width="100%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="C" '.$OpcionOTIS3.' class="styled" /><b>'.utf8_encode($row1["C"]);
echo'<tr><td width="3%"><td align="left" width="100%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="D" '.$OpcionOTIS4.' class="styled" /><b>'.utf8_encode($row1["D"]);
echo'<tr><td width="3%"><td align="left" width="100%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="E" '.$OpcionOTIS5.' class="styled" /><b>'.utf8_encode($row1["E"]);
							}
							else
							{
echo'<tr><td width="3%">';
echo'<td align="left" width="20%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="A" '.$OpcionOTIS1.' class="styled" /><b>'.utf8_encode($row1["A"]);	
echo'<td align="left" width="20%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="B" '.$OpcionOTIS2.' class="styled" /><b>'.utf8_encode($row1["B"]);
echo'<td align="left" width="20%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="C" '.$OpcionOTIS3.' class="styled" /><b>'.utf8_encode($row1["C"]);
echo'<td align="left" width="20%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="D" '.$OpcionOTIS4.' class="styled" /><b>'.utf8_encode($row1["D"]);
echo'<td align="left" width="20%"><INPUT TYPE=radio NAME="OTIS'.$row1["idotis"].'" value="E" '.$OpcionOTIS5.' class="styled" /><b>'.utf8_encode($row1["E"]);
							}
						}
						echo'</td></tr>';
						echo'</table>';
						echo'</fieldset>';
						echo'</td></tr></table>';
					}
					mysql_free_result($result0);
					//FIN DE LAS PREGUNTAS DEL OTIS//
				}
				if($nn!=0 && $nn<3)
				{
					echo'<INPUT TYPE="button" NAME="Anterior" value="<<Anterior" class="boton" onclick="anterior();">&nbsp;&nbsp;';	
				}
				if($nn==2)
				{
					echo'<INPUT TYPE="button" NAME="Finalizar" value="<<Finalizar>>" class="boton" onclick="guardar();">&nbsp;&nbsp;';
				}
				if($nn<2)
				{
					echo'<INPUT TYPE="button" NAME="Siguiente" value="Siguiente>>" class="boton" onclick="guardar();">';
				}
				echo'</div>';
				echo'</center>';
			?>
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
			$ppotis = array($_POST["OTIS1"],$_POST["OTIS2"],$_POST["OTIS3"],$_POST["OTIS4"],$_POST["OTIS5"],$_POST["OTIS6"],$_POST["OTIS7"],$_POST["OTIS8"],$_POST["OTIS9"],$_POST["OTIS10"],$_POST["OTIS11"],$_POST["OTIS12"],$_POST["OTIS13"],$_POST["OTIS14"],$_POST["OTIS15"],$_POST["OTIS16"],$_POST["OTIS17"],$_POST["OTIS18"],$_POST["OTIS19"],$_POST["OTIS20"],$_POST["OTIS21"],$_POST["OTIS22"],$_POST["OTIS23"],$_POST["OTIS24"],$_POST["OTIS25"]);
		}
		if($numpage==1)
		{
			$ppotis = array($_POST["OTIS26"],$_POST["OTIS27"],$_POST["OTIS28"],$_POST["OTIS29"],$_POST["OTIS30"],$_POST["OTIS31"],$_POST["OTIS32"],$_POST["OTIS33"],$_POST["OTIS34"],$_POST["OTIS35"],$_POST["OTIS36"],$_POST["OTIS37"],$_POST["OTIS38"],$_POST["OTIS39"],$_POST["OTIS40"],$_POST["OTIS41"],$_POST["OTIS42"],$_POST["OTIS43"],$_POST["OTIS44"],$_POST["OTIS45"],$_POST["OTIS46"],$_POST["OTIS47"],$_POST["OTIS48"],$_POST["OTIS49"],$_POST["OTIS50"]);
		}	
		if($numpage==2)
		{
			$ppotis = array($_POST["OTIS51"],$_POST["OTIS52"],$_POST["OTIS53"],$_POST["OTIS54"],$_POST["OTIS55"],$_POST["OTIS56"],$_POST["OTIS57"],$_POST["OTIS58"],$_POST["OTIS59"],$_POST["OTIS60"],$_POST["OTIS61"],$_POST["OTIS62"],$_POST["OTIS63"],$_POST["OTIS64"],$_POST["OTIS65"],$_POST["OTIS66"],$_POST["OTIS67"],$_POST["OTIS68"],$_POST["OTIS69"],$_POST["OTIS70"],$_POST["OTIS71"],$_POST["OTIS72"],$_POST["OTIS73"],$_POST["OTIS74"],$_POST["OTIS75"]);
		}	

		for($i=0; $i<25; $i++)
	  	{
			if($ppotis[$i]==null)
			{
				$ppotis[$i]='x';
			}
			$aux1 = $i + 1;
			$aux1 = $aux1 + ($nn * 25);
			if($aux1<=75)
			{
				if($inser=="1")
				{
					$sql = "UPDATE tb_respotis SET respuesta='$ppotis[$i]' WHERE idotis='$aux1' AND idaspirante='$cod' AND idnum_prue='$num_prue';";
					$result = @mysql_query($sql,$conexion) or die (mysql_error());
				}
				else
				{
					$sql = "INSERT INTO tb_respotis (idotis,idaspirante,idnum_prue,respuesta) VALUES($aux1,'$cod','$num_prue','$ppotis[$i]');";
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
			$_SESSION[numpageotis]=$numpage;
			echo'<script type="text/JavaScript">';
			echo'{';
	//			echo'location.href="testotis.php?numpage='.$numpage.'";';
				echo'location.href="testotis.php";';
			echo'}';
			echo'</script>';
		}
		else
		{
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			$numpage = $numpage + 1;
			$_SESSION[numpageotis]=$numpage;
			if($salir=="salir")
			{
				$numpage = 8;
			}
			if($numpage<=2)
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="testotis.php";';
				echo'}';
				echo'</script>';
			}
			else
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="pruebaB.php?var=1";';
				echo'}';
				echo'</script>';
			}
		}
	}
?>