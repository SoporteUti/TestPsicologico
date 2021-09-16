<?php
session_start();
?>
<html>
<head>
<title>.::UES::.</title>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css"/>
<link rel="stylesheet" type="text/css" media="all" href="js/css_tablas.css"/>
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
		width:200px;
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
		location.href="administrador.php";
	}
	function buscar()
	{
		if (document.Flogin.cod.value=="")
 		{
			Sexy.alert('DEBE ESCRIBIR LOS APELLIDOS DEL ASPIRANTE...');
			document.Flogin.cod.focus();
		}
		else
		{
			document.Flogin.bandera.value="buscar";
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
		<center>
			<!--INICIO DEL CONTENIDO-->
			<?php
				include("conexion.php");
			if(isset($_POST['cod'])){
				$codigo='%'.$_POST['cod'].'%';
				$codi=$_POST['cod'];
			  
				if($_POST['bandera']=="buscar"){
			   	$consul="SELECT idaspirante,nit,apellido,nombre,edad,sexo, profesorado FROM tb_aspirantes where apellido like '$codigo' or nombre like '$codigo';";
				}else{
				$consul='SELECT idaspirante,nit,apellido,nombre,edad,sexo,profesorado FROM tb_aspirantes;';
				}
			}else{
				$codi='';
				$consul='SELECT idaspirante,nit,apellido,nombre,edad,sexo,profesorado FROM tb_aspirantes;';	
			}	
			
			?>
			<form name="Flogin" method="post" action="">
			<input type="hidden" name="bandera"> 
			<center>
			<table width="711">
			  <tr><td>
			  <fieldset>
			  <legend align="center">Verificaci&oacute;n de Notas</legend> <br>
			  <table width="642" border="0" cellpadding="0" cellspacing="0">
			  <tr>
				  <td width="289" height="30"><label for="lbnombre" class="label2">Apellidos del Aspirante:</label></td>
			  	  <td width="218" height="30"><input name="cod" type="text" class="texto1" id="cod" value="<?php echo $codi; ?>" placeholder="Buscar"/></td>
			      <td width="68"><input type="button" name="Submit" value="Buscar" class="button" onClick= "buscar(Flogin)" /></td>
			      <td width="10">&nbsp;</td>
			      <td width="57"><input type="button" name="Salir" value="Salir" class="button" onClick= "salir()" /></td>
			  </tr>
			  </table>
			  </fieldset>
			  </td></tr></table>
<div id="Layer1" style="width:820px; height:260px; overflow: scroll;">
<table border="0" cellpadding="0" cellspacing="0" class="tabla">
<tr>
<th>Codigo</th>
<th>NIT</th>
<th>Apellidos</th>
<th>Nombres</th>
<th>Edad</th>
<th>sexo</th>
<th>Profesorado</th>
<th>Ver</th>
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
echo'<td>'.$row['idaspirante'].'</td>';
echo'<td>'.$row['nit'].'</td>';
echo'<td>'.$row['apellido'].'</td>';
echo'<td>'.$row['nombre'].'</td>';
echo'<td>'.$row['edad'].'</td>';
echo'<td>'.$row['sexo'].'</td>';
echo'<td>'.$row['profesorado'].'</td>';
echo'<td><a href="rev.php?var='.$row['idaspirante'].'"><img src="img/lupa.gif" border="0" width="20" height="20"></a></td>';
echo'</tr>';
}
mysqli_free_result($result0);
?>
</table>
</div>

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