<?php
	session_start();

	$num_prue=$_GET['var1'];;
	$cod=$_GET['var'];;
	require('fpdf/fpdf.php');
	include("conexion.php");
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
$title2='Vicerrectoria Acad�mica';
$title3='Unidad de Ingreso Universitario';
$title4='RESULTADO DE EVALUACI�N PSICOL�GICA';
$tiempo = time();
$anno = date ( "Y" , $tiempo);
$anno= $anno + 1; 
$title5='A�O ACAD�MICO '.$anno;

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
	mysqli_free_result($result0);

//PARA SACAR EL NOMBRE DE LA CARRERA A PROFESORADO
	$sqlXX="SELECT nombre FROM tb_profesorados WHERE cod='$prof';";
	$resultXX = mysqli_query($conexion,$sqlXX);
	if($rowXX=mysqli_fetch_array($resultXX))
	{
		$pp=utf8_decode($rowXX['nombre']);
	}
//PARA SACAR EL NOMBRE DEL ENCARGADO DE LA EVALUACION
	$sqlXX="SELECT nombre FROM tb_admon;";
	$resultXX = mysqli_query($conexion,$sqlXX);
	if($rowXX=mysqli_fetch_array($resultXX))
	{
		$lic=$rowXX['nombre'];
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

$tex0='El suscrito encargado de realizar la Prueba Psicol�gica a los aspirantes a estudiar las carreras de PROFESORADO  en la Facultad ';
$tex1=', Ingreso ';
$tex2 = '. CERTIFICA QUE: ';
$tex3 = $tex0.$fac.$tex1.$anno.$tex2;
$pdf->MultiCell(0,5,$tex3);

$pdf->SetFont('Times','B',12);
if($ff==1){ $pdf->SetY(106);$pdf->SetX(33);}else {$pdf->SetY(106);}
$pdf->Cell(0,-5,''.strtoupper($ape).',  '.strtoupper($name),0,1);

$pdf->SetFont('Times','',12);
$pdf->SetY(110);
$pdf->Cell(0,20,'G�nero: '.$ss,0,1);

$pdf->Cell(0,10,'Aspirante a ingresar al Profesorado en:',0,1);

$pdf->SetX(20);
$pdf->MultiCell(0,5,'- '.$pp);
$pdf->Ln();
$pdf->SetX(0);
$pdf->SetX(20);

$pdf->Cell(0,15,'C�digo: '.$prof);

$pdf->SetX(0);
$pdf->SetX(20);
$pdf->Ln(20);
$tex="Se someti� a la Prueba Psicol�gica de Personalidad e Inteligencia tal como lo dispone el Ministerio de Educaci�n.";
$pdf->MultiCell(0,5,$tex);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$consul="SELECT if(dfinal='A','APTO','NO APTO') as dd FROM todos WHERE idaspirante='$cod' AND num_prue='$num_prue';";
	$result0 = mysqli_query($conexion,$consul);
	if($row=mysqli_fetch_array($result0))
	{
		$dfinalpdf=$row['dd'];
	}
	mysqli_free_result($result0);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$pdf->Cell(0,20,'Obteniendo un resultado de: '.$dfinalpdf.'.',0,1);

///////////////////////////////////////FECHA EN LETRAS///////////////////////////////////////////////////////////////////////////////////////////////
$ddia = date("d"); 
if($ddia==1){ $diax="al primer d�a del mes de"; }				elseif($ddia==2){ $diax="a los dos d�as del mes de"; }
elseif($ddia==3){ $diax="a los tres d�as del mes de"; } 		elseif($ddia==4){ $diax="a los cuatro d�as del mes de"; }
elseif($ddia==5){ $diax="a los cinco d�as del mes de"; }		elseif($ddia==6){ $diax="a los seis d�as del mes de"; }
elseif($ddia==7){ $diax="a los siete d�as del mes de"; }		elseif($ddia==8){ $diax="a los ocho d�as del mes de"; }
elseif($ddia==9){ $diax="a los nueve d�as del mes de"; }		elseif($ddia==10){ $diax="a los diez d�as del mes de"; }
elseif($ddia==11){ $diax="a los once d�as del mes de"; }		elseif($ddia==12){ $diax="a los doce d�as del mes de"; }
elseif($ddia==13){ $diax="a los trece d�as del mes de"; }		elseif($ddia==14){ $diax="a los catorce d�as del mes de"; }
elseif($ddia==15){ $diax="a los quince d�as del mes de"; }		elseif($ddia==16){ $diax="a los dieciseis d�as del mes de"; }
elseif($ddia==17){ $diax="a los diecisiete d�as del mes de"; }	elseif($ddia==18){ $diax="a los dieciocho d�as del mes de"; }	
elseif($ddia==19){ $diax="a los diecinueve d�as del mes de"; }	elseif($ddia==20){ $diax="a los veinte d�as del mes de"; }	
elseif($ddia==21){ $diax="a los veintiuno d�as del mes de"; }	elseif($ddia==22){ $diax="a los veintidos  d�as del mes de"; }	
elseif($ddia==23){ $diax="a los veintitres d�as del mes de"; }	elseif($ddia==24){ $diax="a los veinticuatro d�as del mes de"; }	
elseif($ddia==25){ $diax="a los veinticinco d�as del mes de"; }	elseif($ddia==26){ $diax="a los veintiseis d�as del mes de"; }	
elseif($ddia==27){ $diax="a los veintisiete d�as del mes de"; }	elseif($ddia==28){ $diax="a los veintiocho d�as del mes de"; }	
elseif($ddia==29){ $diax="a los veintinueve d�as del mes de"; }	elseif($ddia==30){ $diax="a los treinta d�as del mes de"; }	
elseif($ddia==31){ $diax="a los treinta y uno d�as del mes de";}
$mm ="".date("m"); 
if($mm == "01"){ $mesx=" enero"; }			elseif($mm == "02"){ $mesx=" febrero"; }
elseif($mm == "03"){ $mesx=" marzo"; }		elseif($mm == "04"){ $mesx=" abril"; }
elseif($mm == "05"){ $mesx=" mayo"; }		elseif($mm == "06"){ $mesx=" junio"; }
elseif($mm == "07"){ $mesx=" julio"; }		elseif($mm == "08"){ $mesx=" agosto"; }
elseif($mm == "09"){ $mesx=" septiembre"; }elseif($mm == "10"){ $mesx=" octubre"; }
elseif($mm == "11"){ $mesx=" noviembre"; }	elseif($mm == "12"){ $mesx=" diciembre"; }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$anno= $anno - 1; 
$tex="Y, para los usos que fuere �til se extiende la presente certificaci�n en la Ciudad Universitaria ".$diax." ".$mesx." de $anno.";
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
$tex="ENCARGADO DE REALIZAR LA EVALUACI�N PSICOL�GICA A LOS ASPIRANTES A";
$ww=$pdf->GetStringWidth($tex)+6;
   	$pdf->SetX((210-$ww)/2);
    $pdf->Cell($ww,10,$tex);
$pdf->Ln(5);
$tex="ESTUDIAR PROFESORADO";
$ww=$pdf->GetStringWidth($tex)+6;
   	$pdf->SetX((210-$ww)/2);
    $pdf->Cell($ww,10,$tex);
$nombreArchivo="Resultado_Prueba_Psicologica_".$anno."_".$cod.".pdf";
$pdf->Output($nombreArchivo,'i');	
?>