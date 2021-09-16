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
		$numpageX = $_SESSION[numpageepq];
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
		padding: 0em 1em;
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
		margin:0px 0px 10px 10px;
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
		var ss = getCookie('SEpq');
		var mm = getCookie('MEpq');
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
		var ss = getCookie('SEpq');
		var mm = getCookie('MEpq');
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
		if(minutos==20 && segundos==0 && aux==0) 
		{
			Sexy.alert('TE QUEDAN 5 MINUTOS PARA FINALIZAR TU PRUEBA EPQ...');
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

		setCookie('MEpq',minutos);
		setCookie('SEpq',segundos);
		
		if(minutos==25 && segundos==0)
		{
			deleteCookie('SEpq');
			deleteCookie('MEpq');
			document.Fepq.sal.value="salir";
			document.Fepq.bandera.value="guardar";
	        document.Fepq.submit();
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
//		document.Fepq.m.value=minutos;
//		document.Fepq.s.value=segundos;
		document.Fepq.atras.value="";
		document.Fepq.bandera.value="guardar";
        document.Fepq.submit();
	}
	function anterior()
	{
//		document.Fepq.m.value=minutos;
//		document.Fepq.s.value=segundos;
		document.Fepq.atras.value="atras";
		document.Fepq.bandera.value="guardar";
        document.Fepq.submit();
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
		<form name="Fepq" method="POST">
		<?php			
			echo'<table border="0"><tr><td>';
			echo'<img src="img/epq.gif"></td><td width="50"></td>';	
			echo'<td> <table background="img/reloj.jpg" width="113" height="50"><tr><td>';
			echo'<p STYLE="margin-left: 15px; color:#FFFFFF;  width:68; height:30; font:Times New Roman, Times, serif; font-size:30px" id="tiempo">00:00</p>';
			echo'</td></tr></table></td></tr></table>';			
//			echo'<input type="hidden" name="m" value="'.$_SESSION[m].'">';
//			echo'<input type="hidden" name="s" value="'.$_SESSION[s].'">';
	//		$nn=$_GET['numpage'];
			$nn=$_SESSION[numpageepq];
			if($nn == null)
			{
				$nn=0;
				$f=25;
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'ini();';
					echo'sigue();';
					//echo'document.Fepq.boton.value="00:00";';
				echo'}';
				echo'</script>';
			}
			else if($nn<3)
			{
				$f=25;
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'nuevo(Fepq);';
					echo'sigue();';
				echo'}';
				echo'</script>';
			}
			else
			{
				$f=19;
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'nuevo(Fepq);';
					echo'sigue();';
				echo'}';
				echo'</script>';
			}
			include("conexion.php");	
			$OpcionEPQ1="";
			$OpcionEPQ2="";
			//echo'<form name="Fepq" method="POST">';
			echo'<input type="hidden" name="bandera">';
			echo'<input type="hidden" name="atras" value="">';
			echo'<input type="hidden" name="numpages" value='.$nn.'>';
			echo'<input type="hidden" name="sal">';
			echo '<center>';
			echo'<div id="Layer1" style="width:800px; height:400px; overflow: scroll;">';
			for($i=1; $i<=$f; $i++)
			{
				$id = $i + ($nn * 25);
					//AQUI EMPIEZA LAS PREGUNTAS DEL EPQ//
					//$sql0 = "SELECT * FROM tb_epq ORDER BY idepq asc";			
					$sql0 = "SELECT * FROM tb_epq WHERE idepq='$id';";
					$result0 = mysql_query($sql0, $conexion);
					if($row=mysql_fetch_array($result0))
					{
						//EMPIEZA PARA VER CUAL ESTA SELECCIONADO DE LAS OPCIONES
						//AQUI SE LE TIENE QUE AGREGAR EL CODIGO DEL ASPIRANTE A LA CONSULTA 
						$sqlx = "SELECT respuesta FROM tb_respepq WHERE idepq='$id' AND idaspirante=$cod AND idnum_prue=$num_prue;";
						$resultx = mysql_query($sqlx, $conexion);
						if($rowx=mysql_fetch_array($resultx))
						{
							echo'<input type="hidden" name="inser" value="1">';
							if(eregi($rowx["respuesta"], "1"))
							{
								$OpcionEPQ1="checked";
								$OpcionEPQ2="";
							}
							else if(eregi($rowx["respuesta"], "0"))
							{
								$OpcionEPQ1="";
								$OpcionEPQ2="checked";
							}
							else
							{
								$OpcionEPQ1="";
								$OpcionEPQ2="";
							}
						}
						mysql_free_result($resultx) or die (mysql_error());
						echo'<table border="0" width="750"><tr><td>';
						echo'<fieldset>';					
						echo'<legend>'.$row["idepq"].'</legend>';
						echo'<table border="0">';
						echo '<tr><td width="20">&nbsp;</td><td width="720" align="left" colspan="3"><font size="5">'.utf8_encode($row["preguntas"]).'</td>';
						echo'<tr><td></td><td align="left" with="100"><INPUT TYPE=radio NAME="EPQ'.$row["idepq"].'" value="1" '.$OpcionEPQ1.' class="styled" /><b>Si</td>';
						echo'<td align="left" with="100"><INPUT TYPE=radio NAME="EPQ'.$row["idepq"].'" value="0" '.$OpcionEPQ2.' class="styled" /><b>No</td>';
						echo'<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>';
						echo'</fieldset>';
						echo'</td></tr></table>';
					}
					mysql_free_result($result0) or die (mysql_error());
					//FIN DE PREGUNTAS EPQ//
			}//fin del filtro que solo deja pasar 10 numeros
			if($nn!=0 && $nn<4)
			{
				echo'<INPUT TYPE="button" NAME="Anterior" value="<<Anterior" class="boton" onclick="anterior();">&nbsp;&nbsp;';	
			}
			if($nn==3)
			{
				echo'<INPUT TYPE="button" NAME="Finalizar" value="<<Finalizar>>" class="boton" onclick="guardar();">&nbsp;&nbsp;';
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
			$ppepq = array($_POST['EPQ1'],$_POST['EPQ2'],$_POST['EPQ3'],$_POST['EPQ4'],$_POST['EPQ5'],$_POST['EPQ6'],$_POST['EPQ7'],$_POST['EPQ8'],$_POST['EPQ9'],$_POST['EPQ10'],$_POST['EPQ11'],$_POST['EPQ12'],$_POST['EPQ13'],$_POST['EPQ14'],$_POST['EPQ15'],$_POST['EPQ16'],$_POST['EPQ17'],$_POST['EPQ18'],$_POST['EPQ19'],$_POST['EPQ20'],$_POST['EPQ21'],$_POST['EPQ22'],$_POST['EPQ23'],$_POST['EPQ24'],$_POST['EPQ25']);
			$fin = 25;
		}
		if($numpage==1)
		{
			$ppepq = array($_POST['EPQ26'],$_POST['EPQ27'],$_POST['EPQ28'],$_POST['EPQ29'],$_POST['EPQ30'],$_POST['EPQ31'],$_POST['EPQ32'],$_POST['EPQ33'],$_POST['EPQ34'],$_POST['EPQ35'],$_POST['EPQ36'],$_POST['EPQ37'],$_POST['EPQ38'],$_POST['EPQ39'],$_POST['EPQ40'],$_POST['EPQ41'],$_POST['EPQ42'],$_POST['EPQ43'],$_POST['EPQ44'],$_POST['EPQ45'],$_POST['EPQ46'],$_POST['EPQ47'],$_POST['EPQ48'],$_POST['EPQ49'],$_POST['EPQ50']);
			$fin = 25;
		}	
		if($numpage==2)
		{
			$ppepq = array($_POST['EPQ51'],$_POST['EPQ52'],$_POST['EPQ53'],$_POST['EPQ54'],$_POST['EPQ55'],$_POST['EPQ56'],$_POST['EPQ57'],$_POST['EPQ58'],$_POST['EPQ59'],$_POST['EPQ60'],$_POST['EPQ61'],$_POST['EPQ62'],$_POST['EPQ63'],$_POST['EPQ64'],$_POST['EPQ65'],$_POST['EPQ66'],$_POST['EPQ67'],$_POST['EPQ68'],$_POST['EPQ69'],$_POST['EPQ70'],$_POST['EPQ71'],$_POST['EPQ72'],$_POST['EPQ73'],$_POST['EPQ74'],$_POST['EPQ75']);
			$fin = 25;
		}	
		if($numpage==3)
		{
			$ppepq = array($_POST['EPQ76'],$_POST['EPQ77'],$_POST['EPQ78'],$_POST['EPQ79'],$_POST['EPQ80'],$_POST['EPQ81'],$_POST['EPQ82'],$_POST['EPQ83'],$_POST['EPQ84'],$_POST['EPQ85'],$_POST['EPQ86'],$_POST['EPQ87'],$_POST['EPQ88'],$_POST['EPQ89'],$_POST['EPQ90'],$_POST['EPQ91'],$_POST['EPQ92'],$_POST['EPQ93'],$_POST['EPQ94']);
			$fin = 19;
		}

		for($i=0; $i<$fin; $i++)
	  	{
			if($ppepq[$i]==null)
			{
				$ppepq[$i]=3;
			}			
			$aux1 = $i + 1;
			$aux1 = $aux1 + ($nn * 25);
			if($aux1<=94)
			{
				if($inser=="1")
				{
					$sql = "UPDATE tb_respepq SET respuesta='$ppepq[$i]' WHERE idepq='$aux1' AND idaspirante='$cod' AND idnum_prue='$num_prue';";
					$result = @mysql_query($sql,$conexion) or die (mysql_error());
				}
				else
				{
					$sql1 = "INSERT INTO tb_respepq (idepq,idaspirante,idnum_prue,respuesta) VALUES($aux1,'$cod','$num_prue','$ppepq[$i]');";
					$result1 = @mysql_query($sql1,$conexion) or die (mysql_error());
				}
			}
	  	}
		mysql_close();
		if ($aux2=='atras')
		{
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			$numpage = $numpage - 1;
			$_SESSION[numpageepq]=$numpage;
			echo'<script type="text/JavaScript">';
			echo'{';
				echo'location.href="testepq.php";';
			echo'}';
			echo'</script>';
		}
		else
		{
			$numpage = $numpage + 1;
			$_SESSION[numpageepq]=$numpage;
//			$_SESSION[m]=$minutos;
//			$_SESSION[s]=$segundos;
			if($salir=="salir")
			{
				$numpage = 10;
			}
			if($numpage<=3)
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="testepq.php";';
				echo'}';
				echo'</script>';
			}
			else
			{
				echo'<script type="text/JavaScript">';
				echo'{';
					echo'location.href="pruebaB.php?var=2";';
				echo'}';
				echo'</script>';
			}
		}
	}
?>