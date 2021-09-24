<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" media="all" href="js/css_tablas.css"/>
<script src="js/AjaxCode.js"></script>
<title>.::UES::.</title>
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
fieldset
{
	border-width:1px;
	border-style:solid;
	border-color:#990000;
	background:#FFFFFF;	
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
	margin:0px 0px 0px 0px;
	position:relative;
	display:block;
	padding: 0px 0px 0px 0px;
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
	width:140;	
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
	padding:0px 0px 0px 5px;
	margin:0px 0px 0px 5px;
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
	function consultar()
	{
		document.Fcon.bandera.value="consulta";
        document.Fcon.submit();
	}
</script>
</head>

<body>
<center>
<form name="Fcon" action="" method="post">
<table width="300" cellpadding="0" cellspacing="0">
<tr>
	<td><center>
		<fieldset>
		<legend align="center">Consultar por</legend>
		<br>
		<table width="230" cellpadding="0" cellspacing="0">
		<tr>
		 <td width="80" height="30"><label for="fec" class="label2">Fecha:</label></td>
		 <td width="60">
		 	<select name="fec" class="texto1" onChange="consultar();">
			<option value=""></option>
				<?php
					include("conexion.php");
					$ss="SELECT distinct(fecha) FROM tb_aspirantes;";
					$result0 = mysqli_query($conexion,$ss);
					while($row=mysqli_fetch_array($result0))
					{
						echo'<option value="'.$row['fecha'].'">'.$row['fecha'].'</option>';	
					}
				?>
			</select>
            
			<input type="hidden" name="bandera">
		 </td>
		</tr>
		</table>
		<br>
		</fieldset>
		</center>
	</td>
</tr>
</table>
<div id="Layer1" style="width:820px; height:460px; overflow: scroll;">
<table border="0" cellpadding="0" cellspacing="0" class="tabla">
<tr>
<th>Id</th>
<th>Codigo</th>
<th>Apellidos</th>
<th>Nombres</th>
<th>Edad</th>
<th>sexo</th>
<th>Aciertos</th>
<th>Resultado</th>
<th>Prueba</th>
<th>#</th>
<th>Profesorado</th>
<th>Print</th>
</tr>
<?php
include("conexion.php");
if(isset($_REQUEST["bandera"])){
	
$bandera=$_REQUEST["bandera"];

if($_POST['bandera']=="consulta")
{
	$fecha=$_POST['fec'];
	$consul='SELECT idaspirante,apellido,nombre,edad,sexo,dfinal,prue,num_prue,profesorado FROM todos where fecha="'.$fecha.'";';
}

}else{
	$consul='SELECT idaspirante,apellido,nombre,edad,sexo,dfinal,prue,num_prue,profesorado FROM todos;';
}

$result0 = mysqli_query($conexion,$consul);
$i=0;
while($row=mysqli_fetch_array($result0))
{
?>						
<tr <?php if (($i%2)==0) {?>class="modo1" <?php }else {?> class="modo2" <?php } ?> onMouseOver="this.className='modo3'" onMouseOut="<?php if (($i%2)==0) {?>this.className='modo1' <?php } else { ?> this.className='modo2'<?php } ?> ">
<?php	
	if($row['prue']=="A")
	{
		$sql='SELECT COUNT(*) AS num FROM tb_respraven t1 INNER JOIN tb_raven t2 ON t1.idraven=t2.idraven AND t1.respuesta=t2.respuesta 
      	WHERE t1.idaspirante='.$row['idaspirante'].' AND  t1.idnum_prue='.$row['num_prue'].';';
		$rrr = mysqli_query($conexion,$sql);
		if($rowX=mysqli_fetch_array($rrr))
		{
			$numcep = $rowX['num'];
		}
	}
	else
	{
		$sql='SELECT COUNT(*) AS num FROM tb_respotis t1 INNER JOIN tb_otis t2 ON t1.idotis=t2.idotis AND t1.respuesta=t2.respuesta 
		WHERE t1.idaspirante='.$row['idaspirante'].' AND  t1.idnum_prue='.$row['num_prue'].';';
		$rrr = mysqli_query($conexion,$sql);
		if($rowX=mysqli_fetch_array($rrr))
		{
			$numcep = $rowX['num'];
		}
	}
//if($row['prue']=="A" && $numcep>=29 && $numcep<=37){
$i++;
echo'<td>'.$i.'</td>';
echo'<td>'.$row['idaspirante'].'</td>';
echo'<td>'.$row['apellido'].'</td>';
echo'<td>'.$row['nombre'].'</td>';
echo'<td>'.$row['edad'].'</td>';
echo'<td>'.$row['sexo'].'</td>';
echo'<td>'.$numcep.'</td>';
echo'<td>'.$row['dfinal'].'</td>';
echo'<td>'.$row['prue'].'</td>';
echo'<td>'.$row['num_prue'].'</td>';
echo'<td>'.$row['profesorado'].'</td>';
echo'<td><a href="resultadosT.php?var='.$row['idaspirante'].'&var1='.$row['num_prue'].'" target="_blank"><img src="img/pdf.png" border="0" width="20" height="20"></a></td>';
echo'</tr>';
//}
}
mysqli_free_result($result0);
?>
</table>
</div>
</form>
</center>
</body>
</html>
