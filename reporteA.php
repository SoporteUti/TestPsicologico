<?php
require('fpdf/fpdf.php');
include("conexion.php");
$prof = $_GET['var'];

//PARA SACAR EL NOMBRE DE LA CARRERA A PROFESORADO
	$sqlXX="SELECT nombre FROM tb_profesorados WHERE cod='$prof';";
	$resultXX = mysql_query($sqlXX, $conexion);
	if($rowXX=mysql_fetch_array($resultXX))
	{
		$pp=utf8_decode($rowXX['nombre']);
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

class MYPDF extends FPDF
{
   // Margins
   var $left = 17;
   var $right = 10;
   var $top = 94.5;
   var $bottom = 10;

	function Header()
	{
		global $title;
		global $title2;
		global $title3;
		global $title4;
		global $title5;
		
		
		$this->SetFont('Arial','',10);
		$this->SetY(15);
		$this->SetX(17);	
	    $this->Cell(25,5,"UNIVERSIDAD DE EL SALVADOR");
	    $this->Ln(5);
	    $this->Cell(25,5,"UNIDAD DE INGRESO UNIVERSITARIO");
	    $this->Ln(5);
	    $this->Cell(25,5,$title3);
	    $this->Ln(5);
		$this->SetY(15);$this->SetX(245);
		$this->Cell(0,1,'Fecha: '.date("d/m/y"),0,1,'C');
		$this->SetY(15);$this->SetX(120);
		$this->Cell(25,5,"DEPARTAMENTO DE PSICOLOGIA");
	    $this->Ln(5);$this->SetX(115);
		$this->Cell(50,5,"UNIDAD DE EVALUACION PSICOLOGICA");
		
		$this->SetFont('Arial','B',11);
		$this->Ln(10);$this->SetX(55);
	    $this->Cell(25,5,"RESULTADO DE LA EVALUACIÓN PSICOLÓGICA A ASPIRANTES A INGRESAR A LOS PROFESORADOS");

		$this->SetFont('Arial','',11);
		$this->Ln(10);$this->SetX(17);
	    $this->Cell(25,5,$title);
		
		$this->SetX(150);
	    //$this->Cell(25,5,$title2);
		
		$this->Image('img/cb.jpg',15.2,45,260,50,'');
		
		$this->SetFont('Arial','B',10);
		//codigo
		$this->SetY(80);$this->SetX(22);
		$this->Rotate(90);
		$this->Cell(25,5,'CODIGO');
		//NOMBRES
		$this->Rotate(0);
		$this->SetY(40);$this->SetX(55);$this->Cell(0,20,'N O M B R E S',0,1);
		$this->SetY(60);$this->SetX(37);$this->Cell(0,20,'APELLIDOS',0,1);
		$this->SetY(60);$this->SetX(75);$this->Cell(0,20,'NOMBRES',0,1);
		//FECHA
		$this->SetY(55);$this->SetX(108);$this->Cell(0,20,'FECHA',0,1);
		$this->SetY(60);$this->SetX(111);$this->Cell(0,20,'DE',0,1);
		$this->SetY(65);$this->SetX(107);$this->Cell(0,20,'EXAMEN',0,1);
		//EDAD
		$this->SetY(95);$this->SetX(132);
		$this->Rotate(90);
		$this->Cell(0,0,'EDAD (AÑOS CUMPLIDOS)',0,30);
		//SEXO
		$this->SetY(70);$this->SetX(136.5);
		$this->Rotate(0);
		$this->Cell(0,0,'SEXO',0,30);
		//INTELIGENCIA
		$this->SetY(40);$this->SetX(149);$this->Cell(0,20,'INTELIGENCIA',0,1);
		$this->SetY(85);$this->SetX(145);
		$this->Rotate(90);
		$this->Cell(0,20,'PERCENTIL',0,1);
		$this->SetY(88);$this->SetX(160);
		$this->Rotate(90);
		$this->Cell(0,20,'DIAGNOSTICO',0,1);
		//PERSONALIDAD
		$this->Rotate(0);
		$this->SetY(40);$this->SetX(198);$this->Cell(0,20,'PERSONALIDAD',0,1);
		$this->SetY(46);$this->SetX(180);$this->Cell(0,20,'FACTORES (PERCENTILES)',0,1);
		//FACTORES
		$this->SetFont('Arial','B',8);
		$this->SetY(92);$this->SetX(172);
		$this->Rotate(90);
		$this->Cell(0,20,'CONTROL EMOCIONAL',0,1);
		$this->SetY(87);$this->SetX(185);
		$this->Rotate(90);
		$this->Cell(0,20,'EXTRAVERSION',0,1);
		$this->SetY(87);$this->SetX(197);
		$this->Rotate(90);
		$this->Cell(0,20,'PARANOIDISMO',0,1);
		$this->SetY(85);$this->SetX(210);
		$this->Rotate(90);
		$this->Cell(0,20,'SINCERIDAD',0,1);
		$this->SetY(95.3);$this->SetX(220);
		$this->Rotate(90);
		$this->Cell(0,20,'CAPACIDAD DE DECISION',0,1);
		$this->SetY(85);$this->SetX(232);
		$this->Rotate(90);
		$this->SetFont('Arial','B',10);
		$this->Cell(0,20,'DIAGNOSTICO',0,1);
		$this->SetY(95);$this->SetX(245);
		$this->Rotate(90);
		$this->SetFont('Arial','B',13);
		$this->Cell(0,20,'DIAGNOSTICO FINAL',0,1);
		$this->SetY(85);$this->SetX(256);
		$this->Rotate(90);
		$this->SetFont('Arial','B',10);
		$this->Cell(0,20,'PRUEBA NUMERO',0,1);
//		$this->Image('cc.jpg',10,45,280,50,'');
		$this->Rotate(0);
		$this->SetY(94.3);
		$this->SetX(17);
   }
       
   // Create Table
   function WriteTable($tcolums)
   {
      // go through all colums
      for ($i = 0; $i < sizeof($tcolums); $i++)
      {
         $current_col = $tcolums[$i];
         $height = 0;
         
         // get max height of current col
         $nb=0;
         for($b = 0; $b < sizeof($current_col); $b++)
         {
            // set style
            $this->SetFont($current_col[$b]['font_name'], $current_col[$b]['font_style'], $current_col[$b]['font_size']);
            $color = explode(",", $current_col[$b]['fillcolor']);
            $this->SetFillColor($color[0], $color[1], $color[2]);
            $color = explode(",", $current_col[$b]['textcolor']);
            $this->SetTextColor($color[0], $color[1], $color[2]);            
            $color = explode(",", $current_col[$b]['drawcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            $this->SetLineWidth($current_col[$b]['linewidth']);
                        
            $nb = max($nb, $this->NbLines($current_col[$b]['width'], $current_col[$b]['text']));            
            $height = $current_col[$b]['height'];
         }  
         $h=$height*$nb;
         
         
         // Issue a page break first if needed
         $this->CheckPageBreak($h);
         
         // Draw the cells of the row
         for($b = 0; $b < sizeof($current_col); $b++)
         {
            $w = $current_col[$b]['width'];
            $a = $current_col[$b]['align'];
            
            // Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            
            // set style
            $this->SetFont($current_col[$b]['font_name'], $current_col[$b]['font_style'], $current_col[$b]['font_size']);
            $color = explode(",", $current_col[$b]['fillcolor']);
            $this->SetFillColor($color[0], $color[1], $color[2]);
            $color = explode(",", $current_col[$b]['textcolor']);
            $this->SetTextColor($color[0], $color[1], $color[2]);            
            $color = explode(",", $current_col[$b]['drawcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            $this->SetLineWidth($current_col[$b]['linewidth']);
            
            $color = explode(",", $current_col[$b]['fillcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            
            
            // Draw Cell Background
            $this->Rect($x, $y, $w, $h, 'FD');
            
            $color = explode(",", $current_col[$b]['drawcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            
            // Draw Cell Border
            if (substr_count($current_col[$b]['linearea'], "T") > 0)
            {
               $this->Line($x, $y, $x+$w, $y);
            }            
            
            if (substr_count($current_col[$b]['linearea'], "B") > 0)
            {
               $this->Line($x, $y+$h, $x+$w, $y+$h);
            }            
            
            if (substr_count($current_col[$b]['linearea'], "L") > 0)
            {
               $this->Line($x, $y, $x, $y+$h);
            }
                        
            if (substr_count($current_col[$b]['linearea'], "R") > 0)
            {
               $this->Line($x+$w, $y, $x+$w, $y+$h);
            }
            
            
            // Print the text
            $this->MultiCell($w, $current_col[$b]['height'], $current_col[$b]['text'], 0, $a, 0);
            
            // Put the position to the right of the cell
            $this->SetXY($x+$w, $y);         
         }
         
         // Go to the next line
         $this->Ln($h);          
      }                  
   }
	//rotar texto 
    function Rotate($angle,$x=-1,$y=-1) {

        if($x==-1)
            $x=$this->x;
        if($y==-1)
            $y=$this->y;
        if($this->angle!=0)
            $this->_out('Q');
        $this->angle=$angle;
        if($angle!=0)

        {
            $angle*=M_PI/180;
            $c=cos($angle);
            $s=sin($angle);
            $cx=$x*$this->k;
            $cy=($this->h-$y)*$this->k;
            
            $this->_out(sprintf('q %.5f %.5f %.5f %.5f %.2f %.2f cm 1 0 0 1 %.2f %.2f cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
        }
    }
	
   // If the height h would cause an overflow, add a new page immediately
   function CheckPageBreak($h)
   {
      if($this->GetY()+$h>$this->PageBreakTrigger)
         $this->AddPage($this->CurOrientation);
   }


   // Computes the number of lines a MultiCell of width w will take
   function NbLines($w, $txt)
   {
      $cw=&$this->CurrentFont['cw'];
      if($w==0)
         $w=$this->w-$this->rMargin-$this->x;
      $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
      $s=str_replace("\r", '', $txt);
      $nb=strlen($s);
      if($nb>0 and $s[$nb-1]=="\n")
         $nb--;
      $sep=-1;
      $i=0;
      $j=0;
      $l=0;
      $nl=1;
      while($i<$nb)
      {
         $c=$s[$i];
         if($c=="\n")
         {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
         }
         if($c==' ')
            $sep=$i;
         $l+=$cw[$c];
         if($l>$wmax)
         {
            if($sep==-1)
            {
               if($i==$j)
                  $i++;
            }
            else
               $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
         }
         else
            $i++;
      }
      return $nl;
   }
	//Pie de página
	function Footer()
	{
	//	$this->SetY(-15);$this->SetX(-15);
		$this->SetFont('Arial','b',8);
		$this->SetY(188);$this->SetX(19);
		$this->Cell(0,20,'REFERENCIAS: ',0,1);
		$this->SetFont('Arial','',8);
		$this->SetY(191);$this->SetX(19);
		$this->Cell(0,20,'M=Masculino / F=Femenino / S=Superior / STM=Superior al termino medio / TM= Termino medio / ITM=Inferior al termino medio / D=Deficiente / AP= Apto / NA=No apto / A=Aprobado / R=Reprobado',0,1);
    	$this->SetY(-15);
	    $this->SetFont('Arial','I',8);
    	$this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
	}  
}

$pdf=new MYPDF('L','mm','letter');
$tiempo = time();
$anno = date ( "Y" , $tiempo);
$anno= $anno + 1; 
$title3='AÑO: '.$anno;

$title='PROFESORADO: '.$pp;
$title2='FACULTAD: '.$fac;

$title4='RESULTADO DE EVALUACIÓN PSICOLÓGICA';
$title5='AÑO ACADÉMICO '.$anno;

$pdf->AliasNbPages();
$pdf->SetMargins($pdf->left, $pdf->top, $pdf->right); 
$pdf->AddPage();

$columns = array();      
$i=0;
$consul='SELECT * FROM resultadosa where profesorado="'.$prof.'" order by idaspirante,prueba_num;';
$result0 = mysql_query($consul, $conexion);
while($row=mysql_fetch_array($result0))
{
$col = array();
	$col[] = array('text' => $row['idaspirante'], 'width' => '12.2', 'height' => '5', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => utf8_decode($row['apellido']), 'width' => '38.6', 'height' => '5', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => utf8_decode($row['nombre']), 'width' => '37', 'height' => '5', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['fecha'], 'width' => '22.1', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['edad'], 'width' => '10.3', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['sexo'], 'width' => '10.4', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');       
	$col[] = array('text' => $row['praven'], 'width' => '14.3', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['draven'], 'width' => '14.2', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['pcep_c'], 'width' => '12.3', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['pcep_e'], 'width' => '12.1', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['pcep_p'], 'width' => '11.95', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['pcep_s'], 'width' => '12.3', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['pcep_x'], 'width' => '11.2', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['dcep'], 'width' => '12.1', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['dfinal'], 'width' => '13.8', 'height' => '5', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
		$col[] = array('text' => $row['prueba_num'], 'width' => '10', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$columns[] = $col;
}

// Draw Table   

$pdf->WriteTable($columns);
$pdf->Output();

?> 