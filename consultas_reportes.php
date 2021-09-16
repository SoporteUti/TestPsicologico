<?php
session_start();
if ($_SESSION['accessadmon'] == false) {
	echo "<script language='javascript'>";
	echo "location.href='login_admon.php';";
	echo "</script>";
}
include("conexion.php");
?>
<html>

<head>
	<title>.::UES::.</title>
	<script src="js/AjaxCode.js"></script>
	<script type="text/javascript" src="glossy/glossy.js"></script>
	<script type="text/javascript" src="js/mootools.js"></script>
	<script type="text/javascript" src="js/mootools/sexyalertbox.v1.2.moo.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="js/mootools/sexyalertbox.css" />
	<link rel="stylesheet" type="text/css" media="all" href="js/css_tablas.css" />

	<script type="text/javascript">
		var checkboxHeight = "25";
		var radioHeight = "25";
		var selectWidth = "190";

		document.write('<style type="text/css">input.styled { display: none; } select.styled { position: relative; width: ' + selectWidth + 'px; opacity: 0; filter: alpha(opacity=0); z-index: 5; }</style>');

		var Custom = {
			init: function() {
				var inputs = document.getElementsByTagName("input"),
					span = Array(),
					textnode, option, active;
				for (a = 0; a < inputs.length; a++) {
					if ((inputs[a].type == "checkbox" || inputs[a].type == "radio") && inputs[a].className == "styled") {
						span[a] = document.createElement("span");
						span[a].className = inputs[a].type;

						if (inputs[a].checked == true) {
							if (inputs[a].type == "checkbox") {
								position = "0 -" + (checkboxHeight * 2) + "px";
								span[a].style.backgroundPosition = position;
							} else {
								position = "0 -" + (radioHeight * 2) + "px";
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
				if (element.checked == true && element.type == "checkbox") {
					this.style.backgroundPosition = "0 -" + checkboxHeight * 3 + "px";
				} else if (element.checked == true && element.type == "radio") {
					this.style.backgroundPosition = "0 -" + radioHeight * 3 + "px";
				} else if (element.checked != true && element.type == "checkbox") {
					this.style.backgroundPosition = "0 -" + checkboxHeight + "px";
				} else {
					this.style.backgroundPosition = "0 -" + radioHeight + "px";
				}
			},
			check: function() {
				element = this.nextSibling;
				if (element.checked == true && element.type == "checkbox") {
					this.style.backgroundPosition = "0 0";
					element.checked = false;
				} else {
					if (element.type == "checkbox") {
						this.style.backgroundPosition = "0 -" + checkboxHeight * 2 + "px";
					} else {
						this.style.backgroundPosition = "0 -" + radioHeight * 2 + "px";
						group = this.nextSibling.name;
						inputs = document.getElementsByTagName("input");
						for (a = 0; a < inputs.length; a++) {
							if (inputs[a].name == group && inputs[a] != this.nextSibling) {
								inputs[a].previousSibling.style.backgroundPosition = "0 0";
							}
						}
					}
					element.checked = true;
				}
			},
			clear: function() {
				inputs = document.getElementsByTagName("input");
				for (var b = 0; b < inputs.length; b++) {
					if (inputs[b].type == "checkbox" && inputs[b].checked == true && inputs[b].className == "styled") {
						inputs[b].previousSibling.style.backgroundPosition = "0 -" + checkboxHeight * 2 + "px";
					} else if (inputs[b].type == "checkbox" && inputs[b].className == "styled") {
						inputs[b].previousSibling.style.backgroundPosition = "0 0";
					} else if (inputs[b].type == "radio" && inputs[b].checked == true && inputs[b].className == "styled") {
						inputs[b].previousSibling.style.backgroundPosition = "0 -" + radioHeight * 2 + "px";
					} else if (inputs[b].type == "radio" && inputs[b].className == "styled") {
						inputs[b].previousSibling.style.backgroundPosition = "0 0";
					}
				}
			},
		}
		window.onload = Custom.init;
	</script>

	<style type="text/css">
		body {
			background: url(img/fondo.png) repeat-x top left #eff3ff;
		}

		fieldset {
			border-width: 1px;
			border-style: solid;
			border-color: #990000;

			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 12px;

			margin: 0px 0px 0px 0px;
			/*	width:330px;*/
			position: relative;
			display: block;
			padding: 0px 0px 0px 0px;
			clear: both;
		}

		fieldset h3 {
			background-color: none;

			border-width: 0px;

			color: #646729;
			font-size: 110%;
			font-weight: 600;

			padding: 3px 5px;
			margin: 0px 0px 2px 0px;

		}

		fieldset legend {
			background-color: #ecefcb;
			border-width: 1px 10px 1px 10px;
			border-color: #990000;
			border-style: solid;
			color: #990000;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 90%;
			padding: 3px 5px;
			width: 140;
		}

		.label2 {
			background-image: url(img/label_bg01.gif);
			background-repeat: no-repeat;
			background-position: left;
			color: #FFFFFF;
			font-size: 90%;
			font-weight: bold;
			border-width: 0px;
			height: 24px;
			text-align: left;
			padding: 0px 0px 0px 5px;
			margin: 0px 0px 0px 5px;
			display: block;
		}

		.texto1 {
			background-color: #ffffff;
			border-width: 1px;
			border-style: solid solid solid solid;
			border-color: #990000;
			color: #323415;
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 105%;
		}

		input:focus {
			background-color: #fbfbf2;
			background-image: url(/icons/pencil.gif);
			background-repeat: no-repeat;
			background-position: right;
		}

		.button {
			background-color: #ecefcb;
			background-image: none;

			border-width: 1px;
			border-style: solid;
			border-color: #323415;

			color: #990000;
			font-weight: bold;
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 100%;

			width: auto;
			padding: 0px 0px 0px 5px;
			margin: 0px 0px 0px 5px;
			clear: both;
		}

		.button:focus {
			background-color: #FFFFFF;
			background-image: none;
			color: #990000;
		}

		span.radio {
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
		if(document.Fcon.prueba[0].checked == false && document.Fcon.prueba[1].checked == false && document.Fcon.prueba[2].checked == false)
		{
			Sexy.alert('ERROR: DEBES DE SELECCIONAR UN TIPO DE PRUEBA PARA CONSULTAR...');
		}
		else if(document.Fcon.profesoradoList.value=="Seleccione un Profesorado")
		{
			Sexy.alert('ERROR: DEBES DE SELECCIONAR UN PROFESORADO...');
		}
		else
		{
			document.Fcon.bandera.value="consulta";
	        document.Fcon.submit();
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
				<td valign="top">
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
		<table cellpadding="0" cellspacing="0" width="910" height="450" background="img/mid2.jpg">
			<tr>
				<td valign="top">
					<center>
						<img src="img/conyrep.gif" border="0">
						<!--INICIO DEL CONTENIDO-->
						<form name="Fcon" action="" method="post">
							<input type="hidden" name="bandera" value="">
							<table border="0" width="880" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<fieldset>
											<legend align="center">Datos a Consultar</legend> <br>
											<table width="871" border="0" cellpadding="0" cellspacing="0">
												<tr>
													<?php
													$PA = "";
													$PB = "";
													$PT = "";
											
													if ($_POST['prueba'] == "A") {
														$PA = "checked";
														$PB = "";
														$PT = "";
													} else if ($_POST['prueba'] == "B") {
														$PA = "";
														$PB = "checked";
														$PT = "";
													} else if ($_POST['prueba'] == "T") {
														$PA = "";
														$PB = "";
														$PT = "checked";
													} else {
														$PA = "";
														$PB = "";
														$PT = "";
													}
													$prof = $_POST['profesoradoList'];
												
													
													//PARA SACAR EL NOMBRE DE LA CARRERA A PROFESORADO
													$sqlXX = "SELECT nombre FROM tb_profesorados WHERE cod='$prof';";
													$resultXX = mysqli_query($conexion,$sqlXX);
													if ($rowXX = mysqli_fetch_array($resultXX)) {
														$pp = $rowXX['nombre'];
													}

													//PARA SACAR EL NOMBRE DE LA FACULTAD
													$rowF = 0;
													$fp = fopen("facultades.csv", "r");
													$ff = substr($prof, 1, 2);
													while ($data = fgetcsv($fp, 1000, ",")) {
														$num = count($data);
														if ($rowF > 0) {
															if ($ff == $data[0]) {
																$fac = $data[1];
															}
														}
														$rowF++;
													}
													fclose($fp);

													?>
													<td width="90" height="30" rowspan="4"><label class="label2">Prueba:</label></td>
													<td width="52" rowspan="4"><b>A</b>
														<input type="radio" name="prueba" value="A" <?php echo $PA; ?> onClick="des(this.form)" class="styled">
													</td>
													<td width="52" rowspan="4"><b>B</b>
														<input type="radio" name="prueba" value="B" <?php echo $PB ?> class="styled">
													</td>
													<td width="100" rowspan="4"><b>Todo</b>
														<input type="radio" name="prueba" value="T" <?php echo $PT ?> class="styled">
													</td>
												</tr>
												<tr>
													<td width="193" height="30" rowspan="2"><label class="label2">Profesorado:</label></td>
									</td>
									<td width="384">
										<select name="profesoradoList" id="profesoradoList" class="texto1" onChange="consultar();" style="width:450px">
											<option>Seleccione un Profesorado</option>

											<?php
											$sqlXX = "SELECT * FROM tb_profesorados;";
											$resultXX = mysqli_query($conexion,$sqlXX);
											while ($rowXX = mysqli_fetch_array($resultXX)) {
												echo "<option value=" . $rowXX['cod'] . ">" . $rowXX['nombre'] . "</option>";
											}
											?>
										</select>
									</td>
								</tr>
							</table>
							</fieldset>
				</td>
			</tr>
		</table>
		</form>
		<!--INICIO PARA MOSTRAR LA TABLA-->
		<?php
		
		if ($_POST['bandera'] == "consulta") {
			echo '<b>PROFESORADO: ' . $pp . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>FACULTAD: ' . $fac;
			echo '<div id="Layer1" style="width:820px; height:215px; overflow: scroll;">';
			echo '<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabla">';
			if ($_POST['prueba'] == "B") {
				echo '<tr>';
				echo '<th width="5%">COD.</td>';
				echo '<th width="19%">APELLIDO</td>';
				echo '<th width="19%">NOMBRE</td>';
				echo '<th width="9%">FECHA</td>';
				echo '<th width="8%">EDAD</td>';
				echo '<th width="5%">SEXO</td>';
				echo '<th width="10%">DIAG. OTIS </td>';
				echo '<th width="10%">DIAG. EPQ </td>';
				echo '<th width="10%">DIAG. FINAL </td>';
				echo '<th width="10%"># PRUEBA</td>';
				echo '</tr>';
			} elseif ($_POST['prueba'] == "A") {
				echo '<tr>';
				echo '<th width="5%">COD.</td>';
				echo '<th width="19%">APELLIDO</td>';
				echo '<th width="19%">NOMBRE</td>';
				echo '<th width="9%">FECHA</td>';
				echo '<th width="8%">EDAD</td>';
				echo '<th width="5%">SEXO</td>';
				echo '<th width="13%">DIAG. RAVEN </td>';
				echo '<th width="10%">DIAG. CEP </td>';
				echo '<th width="10%">DIAG. FINAL </td>';
				echo '<th width="10%"># PRUEBA</td>';
				echo '</tr>';
			} else {
				echo '<tr>';
				echo '<th width="5%">COD.</td>';
				echo '<th width="19%">APELLIDO</td>';
				echo '<th width="19%">NOMBRE</td>';
				echo '<th width="9%">FECHA</td>';
				echo '<th width="8%">EDAD</td>';
				echo '<th width="5%">SEXO</td>';
				echo '<th width="10%">DIAG. FINAL </td>';
				echo '<th width="10%">PRUEBA</td>';
				echo '<th width="10%"># PRUEBA</td>';
				echo '</tr>';
			}
			$id = 0;

			if ($_POST['prueba'] == "B") {
				$consul = 'SELECT idaspirante,apellido,nombre,fecha,edad,sexo,dotis AS d1,depq AS d2,dfinal,prueba_num FROM resultadosb where profesorado="' . $prof . '" order by idaspirante,prueba_num asc;';
				$id = 1;
			} elseif ($_POST['prueba'] == "A") {
				$consul = 'SELECT idaspirante,apellido,nombre,fecha,edad,sexo,draven AS d1,dcep AS d2,dfinal,prueba_num FROM resultadosa where profesorado="' . $prof . '" order by idaspirante,prueba_num asc;';
				$id = 2;
			} elseif ($_POST['prueba'] == "T") {
				$consul = 'SELECT * FROM todos where profesorado="' . $prof . '" order by idaspirante,num_prue asc;';
				$id = 2;
			}
		
			$result0 = mysqli_query($conexion,$consul);
			$i = 0;
			while ($row = mysqli_fetch_array($result0)) {
		?>
				<tr <?php if (($i % 2) == 0) { ?>class="modo1" <?php } else { ?> class="modo2" <?php } ?> onMouseOver="this.className='modo3'" onMouseOut="<?php if (($i % 2) == 0) { ?>this.className='modo1' <?php } else { ?> this.className='modo2'<?php } ?> ">
			<?php
				if ($_POST['prueba'] == "A" || $_POST['prueba'] == "B") {
					echo '<td>' . $row['idaspirante'] . '</td>';
					echo '<td>' . $row['apellido'] . '</td>';
					echo '<td>' . $row['nombre'] . '</td>';
					echo '<td>' . $row['fecha'] . '</td>';
					echo '<td>' . $row['edad'] . '</td>';
					echo '<td>' . $row['sexo'] . '</td>';
					echo '<td>' . $row['d1'] . '</td>';
					echo '<td>' . $row['d2'] . '</td>';
					echo '<td>' . $row['dfinal'] . '</td>';
					echo '<td>' . $row['prueba_num'] . '</td>';
					echo '</tr>';
					$i++;
				} else {
					echo '<td>' . $row['idaspirante'] . '</td>';
					echo '<td>' . $row['apellido'] . '</td>';
					echo '<td>' . $row['nombre'] . '</td>';
					echo '<td>' . $row['fecha'] . '</td>';
					echo '<td>' . $row['edad'] . '</td>';
					echo '<td>' . $row['sexo'] . '</td>';
					echo '<td>' . $row['dfinal'] . '</td>';
					echo '<td>' . $row['prue'] . '</td>';
					echo '<td>' . $row['num_prue'] . '</td>';
					echo '</tr>';
					$i++;
				}
			}
			echo '</table>';
			echo '</div>';
		}

		if ($i != 0) {
			if ($_POST['prueba'] == "A") {
				echo '<a href="reporteA.php?var=' . $prof . '" target="_blank"><img src="img/pdf.png" border="0" width="50" height="50"></a>';
			} else if ($_POST['prueba'] == "B") {
				echo '<a href="reporteB.php?var=' . $prof . '" target="_blank"><img src="img/pdf.png" border="0" width="50" height="50"></a>';
			} else if ($_POST['prueba'] == "T") {
				echo '<a href="reporteT.php?var=' . $prof . '" target="_blank"><img src="img/pdf.png" border="0" width="50" height="50"></a>';
			}
		}

			?>
			<br><a href="administrador.php"><img src="img/volver.jpg" border="0" class="glossy"></a>
			<!--FIN DEL CONTENIDO-->
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