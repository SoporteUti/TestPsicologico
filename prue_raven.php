<?php
	session_start();
	if($_SESSION[acce]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='index.php';";
    	echo "</script>";
	}
	else
	{
		$cod = $_SESSION[cod];
		$num_prue = $_SESSION[num_prue];
	}
//	echo $_SESSION[cod];
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="glossy/glossy.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/css_tablas1.css"/>
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
		padding: 0em 2em;
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
		margin:0px 0px 10px 0px;
		top: -12px;
	}
	.boton
	{
        background-color:#bc3114;
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
			<?php
				include('conexion.php');
				$consul='select apellido,nombre from tb_aspirantes where idaspirante="'. $cod .'";';
				$result0 = mysql_query($consul, $conexion);
				if($row=mysql_fetch_array($result0))
				{
					$nom = $row['apellido'].' '.$row['nombre'];
				}
				echo'<table width="80%" border="0" cellpadding="0" cellspacing="0">';
				echo'<tr><td rowspan="5"><img src="img/raven.gif"></td></tr>';
				echo'<tr><td rowspan="5" width="30%"></td></tr>';				
				echo'<tr><td colspan="5"><b>ASPIRANTE: '. strtoupper($nom) .'</td></tr>';
				echo'<tr>';
				echo'<td width="40%" style=" border:1px solid #000000"><b>PERCENTIL</td>';
$sql="SELECT praven FROM resultadosa where idaspirante='$cod' AND  prueba_num='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numcep = $row['praven'];
}
mysql_free_result($result) or die (mysql_error());
				echo'<td width="20%" style=" border:1px solid #000000"><b><center>'.$numcep.'</td>';
				echo'<td width="60%">&nbsp;</td>';
				echo'</tr>';
				echo'<tr>';
				echo'<td width="10%" style=" border:1px solid #000000"><b>ACIERTOS</td>';
$sql="SELECT COUNT(*) AS num FROM tb_respraven t1 INNER JOIN tb_raven t2 ON t1.idraven=t2.idraven AND t1.respuesta=t2.respuesta WHERE t1.idaspirante='$cod' AND  t1.idnum_prue='$num_prue';";
$result = mysql_query($sql, $conexion);
if($row=mysql_fetch_array($result))
{
	$numcep = $row['num'];
}
mysql_free_result($result) or die (mysql_error());
echo'<td style=" border:1px solid #000000"><b><center>'.$numcep.'</td>';
echo'</tr>';
echo'</table>';
				
				echo'<table width="80%" border="0" cellspacing="0" cellpadding="0"  class="tabla">';
	           	echo'<tr>';
	            echo'<th width="6%">ID.</td>';
       		    echo'<th width="60%">PREGUNTAS</td>';
	            echo'<th width="5%">RESPUESTAS</td>';
				echo'</tr></table>';
				echo'<div id="Layer1" style="width:700px; height:260px; overflow: scroll;">';
				echo'<table width="80%" border="0" cellspacing="0" cellpadding="0"  class="tabla">';			
$consul='select t1.idraven c1,t2.preguntas c2,t1.respuesta c3 from tb_respraven as t1 inner join tb_raven as t2 on t1.idraven=t2.idraven where t1.idaspirante="'. $cod .'" and t1.idnum_prue="'. $num_prue. '";';
				$result0 = mysql_query($consul, $conexion);
				$i=0;
				while($row=mysql_fetch_array($result0))
				{
			?>						
<tr <?php if (($i%2)==0) {?>class="modo1" <?php }else {?> class="modo2" <?php } ?> onMouseOver="this.className='modo3'" onMouseOut="<?php if (($i%2)==0) {?>this.className='modo1' <?php } else { ?> this.className='modo2'<?php } ?> ">
			<?php	
					echo'<td width="5%">'.$row['c1'].'</td>';
			        echo'<td width="49%">'.$row['c2'].'</td>';
					echo'<td width="8%">'.$row['c3'].'</td>';
			        echo'</tr>';
					$i++;
				}
			echo'</table>';
			echo'</div>';
			echo'<a href="rev_pruebaA.php?var='.$num_prue.'"><img src="img/volver.jpg" border="0" class="glossy"></a>';
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