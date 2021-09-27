<?php
	session_start();
	if($_SESSION["acce"]==false) 
	{
		echo "<script language='javascript'>";
	    echo"location.href='index.php';";
    	echo "</script>";
	}
	else
	{	
		$cod = $_SESSION["cod"];
		$num_prue = $_SESSION["num_prue"];
	}
	
	/*if($_SESSION["testraven"]==true || $_SESSION["testcep"]==true)  
	{
		echo "<script language='javascript'>";
	    echo"location.href='error_pruebaB.php';";
    	echo "</script>";
	}*///no se porque da error aqui
  
//	$num_prue=1;
//	$cod="0001";
	require('fpdf/fpdf.php');
	include("conexion.php");
	include("resultraven.php");
	include("resultcep.php");
//	$cod ="0001";

class PDF extends FPDF
{
	function PDF($orientation='P',$unit='mm',$format='letter')
	{
		//Llama al constructor de la clase padre
		$this->FPDF($orientation,$unit,$format);
	}
	function Header()
	{
		global $title;
		global $title2;
		global $title3;
		global $title4;
		global $title5;
	    $this->Image('img/minebn.jpg',15,12,30,0,'');
		$this->SetFont('Times','B',15);
		$h=25;
		$w=$this->GetStringWidth($title)+6;
    	$this->SetX((210-$w)/2);
	    $this->Cell($w,$h,$title);
	    $this->Ln(7);

		$w=$this->GetStringWidth($title2)+6;
    	$this->SetX((210-$w)/2);
	    $this->Cell($w,$h,$title2);
	    $this->Ln(7);
		
		$w=$this->GetStringWidth($title3)+6;
    	$this->SetX((210-$w)/2);
	    $this->Cell($w,$h,$title3);
	    $this->Ln(20);
		
		$w=$this->GetStringWidth($title4)+6;
    	$this->SetX((210-$w)/2);
	    $this->Cell($w,$h,$title4);
	    $this->Ln(7);
		
		$w=$this->GetStringWidth($title5)+6;
    	$this->SetX((210-$w)/2);
	    $this->Cell($w,$h,$title5);
	    $this->Ln(20);
	}
}
$pdf=new PDF();
$title='UNIVERSIDAD DE EL SALVADOR';
$title2= utf8_decode('Vicerrectoria Académica');
$title3='Unidad de Ingreso Universitario';
$title4=utf8_decode('RESULTADO DE EVALUACIÓN PSICOLÓGICA');
$tiempo = time();
$anno = date ( "Y" , $tiempo);
$anno= $anno + 1; 
$title5=utf8_decode('AÑO ACADÉMICO '.$anno);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	$consul="SELECT nombre,apellido, if(sexo='M','Masculino','Femenino') as sex,profesorado FROM tb_aspirantes WHERE idaspirante='$cod';";
	$result0 = mysqli_query($conexion,$consul);
	if($row=mysqli_fetch_array($result0))
	{
		$name = utf8_decode($row['nombre']);
		$ape = utf8_decode($row['apellido']);
		$ss = $row['sex'];
		$prof = $row['profesorado'];
	}

//PARA SACAR EL NOMBRE DE LA CARRERA A PROFESORADO
	$sqlXX="SELECT nombre FROM tb_profesorados WHERE cod='$prof';";
	$resultXX = mysqli_query( $conexion,$sqlXX);
	if($rowXX=mysqli_fetch_array($resultXX))
	{
		$pp=utf8_decode($rowXX['nombre']);
	}
//PARA SACAR EL NOMBRE DEL ENCARGADO DE LA EVALUACION
	$sqlXX="SELECT nombre FROM tb_admon;";
	$resultXX = mysqli_query($conexion,$sqlXX);
	if($rowXX=mysqli_fetch_array($resultXX))
	{
		$lic=utf8_decode($rowXX['nombre']);
	}
	
//PARA SACAR EL NOMBRE DE LA FACULTAD
$rowF = 0;
$fp = fopen ("facultades.csv","r");
$ff = substr($prof,1,2);
while ($data = fgetcsv ($fp, 1000, ",")) 
{ 
	$num = count ($data); 
	if ($rowF>0)
	{
		if($ff==$data[0])
		{
			$fac=$data[1]; 
		}
	}
	$rowF++; 
}
fclose ($fp);


$pdf->SetMargins(20,10);
$pdf->AddPage();

$pdf->SetFont('Times','',12);
$pdf->Cell(0,20,'Aspirante No.: '.$cod,0,1);

$tex0=utf8_decode('El suscrito encargado del realizar la Prueba Psicológica a los aspirantes a estudiar las carreras de PROFESORADO  en la Facultad ');
$tex1=', Ingreso ';
$tex2 = '. CERTIFICA QUE: ';
$tex3 = $tex0.$fac.$tex1.$anno.$tex2;
$pdf->MultiCell(0,5,$tex3);

$pdf->SetFont('Times','B',12);
if($ff==1){ $pdf->SetY(106);$pdf->SetX(33);}else {$pdf->SetY(106);}
$pdf->Cell(0,-5,''.strtoupper($ape).'  '.strtoupper($name),0,1);

$pdf->SetFont('Times','',12);
$pdf->SetY(110);
$pdf->Cell(0,20,utf8_decode('Género: '.$ss),0,1);

$pdf->Cell(0,10,'Aspirante a ingresar al Profesorado en:',0,1);

$pdf->SetX(20);
$pdf->MultiCell(0,5,'- '.$pp);
$pdf->Ln();
$pdf->SetX(0);
$pdf->SetX(20);

$pdf->Cell(0,15,utf8_decode('Código: '.$prof));

$pdf->SetX(0);
$pdf->SetX(20);
$pdf->Ln(20);
$tex=utf8_decode("Se sometió a la Prueba Psicológica de Personalidad e Inteligencia tal como los dispone el Ministerio de Educación.");
$pdf->MultiCell(0,5,$tex);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$consul="SELECT if(dfinal='A','APTO','NO APTO') as dd FROM tb_resultadosa WHERE idaspirante='$cod' AND prueba_num='$num_prue';";
	$result0 = mysqli_query($conexion,$consul);
	if($row=mysqli_fetch_array($result0))
	{
		$dfinalpdf=$row['dd'];
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$pdf->Cell(0,20,'Obteniendo un resultado de: '.$dfinalpdf.'.',0,1);

///////////////////////////////////////FECHA EN LETRAS///////////////////////////////////////////////////////////////////////////////////////////////
$ddia = date("d"); 
if($ddia==1){ $diax=utf8_decode("al primer día del mes de"); }  elseif($ddia==2){ $diax=utf8_decode("a los dos días del mes de"); }
elseif($ddia==3){ $diax=utf8_decode("a los tres días del mes de"); } 		elseif($ddia==4){ $diax=utf8_decode("a los cuatro días del mes de"); }
elseif($ddia==5){ $diax=utf8_decode("a los cinco días del mes de"); }		elseif($ddia==6){ $diax=utf8_decode("a los seis días del mes de"); }
elseif($ddia==7){ $diax=utf8_decode("a los siete días del mes de"); }		elseif($ddia==8){ $diax=utf8_decode("a los ocho días del mes de"); }
elseif($ddia==9){ $diax=utf8_decode("a los nueve días del mes de"); }		elseif($ddia==10){ $diax=utf8_decode("a los diez días del mes de"); }
elseif($ddia==11){ $diax=utf8_decode("a los once días del mes de"); }		elseif($ddia==12){ $diax=utf8_decode("a los doce días del mes de"); }
elseif($ddia==13){ $diax=utf8_decode("a los trece días del mes de"); }		elseif($ddia==14){ $diax=utf8_decode("a los catorce días del mes de"); }
elseif($ddia==15){ $diax=utf8_decode("a los quince días del mes de"); }		elseif($ddia==16){ $diax=utf8_decode("a los dieciseis días del mes de"); }
elseif($ddia==17){ $diax=utf8_decode("a los diecisiete días del mes de"); }	elseif($ddia==18){ $diax=utf8_decode("a los dieciocho días del mes de"); }	
elseif($ddia==19){ $diax=utf8_decode("a los diecinueve días del mes de"); }	elseif($ddia==20){ $diax=utf8_decode("a los veinte días del mes de"); }	
elseif($ddia==21){ $diax=utf8_decode("a los veintiuno días del mes de"); }	elseif($ddia==22){ $diax=utf8_decode("a los veintidos  días del mes de"); }	
elseif($ddia==23){ $diax=utf8_decode("a los veintitres días del mes de"); }	elseif($ddia==24){ $diax=utf8_decode("a los veinticuatro días del mes de"); }	
elseif($ddia==25){ $diax=utf8_decode("a los veinticinco días del mes de"); }	elseif($ddia==26){ $diax=utf8_decode("a los veintiseis días del mes de"); }	
elseif($ddia==27){ $diax=utf8_decode("a los veintisiete días del mes de"); }	elseif($ddia==28){ $diax=utf8_decode("a los veintiocho días del mes de"); }	
elseif($ddia==29){ $diax=utf8_decode("a los veintinueve días del mes de"); }	elseif($ddia==30){ $diax=utf8_decode("a los treinta días del mes de"); }	
elseif($ddia==31){ $diax=utf8_decode("a los treinta y uno días del mes de");}
$mm ="".date("m"); 
if($mm == "01"){ $mesx=" enero"; }			elseif($mm == "02"){ $mesx=" febrero"; }
elseif($mm == "03"){ $mesx=" marzo"; }		elseif($mm == "04"){ $mesx=" abril"; }
elseif($mm == "05"){ $mesx=" mayo"; }		elseif($mm == "06"){ $mesx=" junio"; }
elseif($mm == "07"){ $mesx=" julio"; }		elseif($mm == "08"){ $mesx=" agosto"; }
elseif($mm == "09"){ $mesx=" septiembre"; }elseif($mm == "10"){ $mesx=" octubre"; }
elseif($mm == "11"){ $mesx=" noviembre"; }	elseif($mm == "12"){ $mesx=" diciembre"; }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$tex=utf8_decode("Y, para los usos que fuere útil se extiende la presente certificación en la Ciudad Universitaria ").$diax." ".$mesx." de $anno.";
$pdf->MultiCell(0,5,$tex);

$pdf->Ln(10);
$tex="F: _______________________________________________";
$ww=$pdf->GetStringWidth($tex)+6;
   	$pdf->SetX((210-$ww)/2);
    $pdf->Cell($ww,10,$tex);
$pdf->Ln(5);
$tex= strtoupper($lic).' No. JVPP 970, EL SALVADOR, C.A.';
$ww=$pdf->GetStringWidth($tex)+6;
   	$pdf->SetX((210-$ww)/2);
    $pdf->Cell($ww,10,$tex);
$pdf->Ln(5);
$tex=utf8_decode("ENCARGADO DE REALIZAR LA EVALUACIÓN PSICOLÓGICA A LOS ASPIRANTES A");
$ww=$pdf->GetStringWidth($tex)+6;
   	$pdf->SetX((210-$ww)/2);
    $pdf->Cell($ww,10,$tex);
$pdf->Ln(5);
$tex="ESTUDIAR PROFESORADO";
$ww=$pdf->GetStringWidth($tex)+6;
   	$pdf->SetX((210-$ww)/2);
    $pdf->Cell($ww,10,$tex);
	
$pdf->Output();	
?>