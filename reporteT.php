<?php
require('fpdf/fpdf.php');
include("conexion.php");
$prof = $_GET['var'];

//PARA SACAR EL NOMBRE DE LA CARRERA A PROFESORADO
	$sqlXX="SELECT nombre FROM tb_profesorados WHERE cod='$prof';";
	$resultXX = mysql_query($sqlXX, $conexion);
	if($rowXX=mysql_fetch_array($resultXX))
	{
		$pp=$rowXX['nombre'];
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
   var $left = 35.6;
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
		$this->SetX(17);
	    $this->Cell(25,5,"UNIDAD DE INGRESO UNIVERSITARIO");
	    $this->Ln(5);
		$this->SetX(17);
	    $this->Cell(25,5,$title3);
	    $this->Ln(5);
		$this->SetY(15);$this->SetX(220);
		$this->Cell(0,1,'Fecha: '.date("d/m/y"),0,1,'C');
		$this->SetY(15);$this->SetX(120);
		$this->Cell(25,5,"DEPARTAMENTO DE PSICOLOGIA");
	    $this->Ln(5);$this->SetX(115);
		$this->Cell(50,5,"UNIDAD DE EVALUACION PSICOLOGICA");
		$this->SetFont('Arial','B',11);
		$this->Ln(10);$this->SetX(55);
	    $this->Cell(25,5,"RESULTADO DE LA EVALUACIÓN PSICOLÓGICA A ASPIRANTES A INGRESAR A LOS PROFESORADOS");
		$this->SetFont('Arial','',10);
		$this->Ln(10);$this->SetX(25);
	    $this->Cell(20,5,$title);
		$this->SetX(150);
	    //$this->Cell(25,5,$title2);
		$this->Image('img/ct2.jpg',35,45,210,16,'');
		$this->SetFont('Arial','B',10);
		//codigo
		$this->SetY(50);$this->SetX(39.5);
		$this->Cell(25,5,'ID');
		//NOMBRES
		$this->SetY(40);$this->SetX(87);$this->Cell(0,20,'N O M B R E S',0,1);
		$this->SetY(47);$this->SetX(62);$this->Cell(0,20,'APELLIDOS',0,1);
		$this->SetY(47);$this->SetX(115);$this->Cell(0,20,'NOMBRES',0,1);
		//FECHA
		$this->SetY(40);$this->SetX(158);$this->Cell(0,20,'FECHA',0,1);
		$this->SetY(44);$this->SetX(162);$this->Cell(0,20,'DE',0,1);
		$this->SetY(48);$this->SetX(156.5);$this->Cell(0,20,'EXAMEN',0,1);
		//EDAD
		$this->SetY(53);$this->SetX(181);
		$this->Cell(0,0,'EDAD',0,30);
		//SEXO
		$this->SetY(53);$this->SetX(197);
		$this->Cell(0,0,'SEXO',0,30);
		$this->SetY(50);$this->SetX(213.5);
		$this->Cell(0,0,'DIAGNOSTICO',0,30);
		$this->SetY(56);$this->SetX(222);
		$this->Cell(0,0,'FINAL',0,30);
		$this->Rotate(0);
		$this->SetY(60.2);
		$this->SetX(35.6);
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
		$this->SetY(190);$this->SetX(19);
		$this->Cell(0,20,'REFERENCIAS: ',0,1);
		$this->SetFont('Arial','',8);
		$this->SetY(190);$this->SetX(42);
		$this->Cell(0,20,'M=Masculino / F=Femenino / A=Aprobado / R=Reprobado',0,1);
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

// create table'.$prof.'
$i=0;
$columns = array();      
$consul='SELECT * FROM todos where profesorado="'.$prof.'" order by apellido,num_prue asc';
$result0 = mysql_query($consul, $conexion);
while($row=mysql_fetch_array($result0))
{
$i++;
//row['idaspirante']
$col = array();
	$col[] = array('text' => $i, 'width' => '12.3', 'height' => '5', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['apellido'], 'width' => '51.2', 'height' => '5', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['nombre'], 'width' => '52.8', 'height' => '5', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['fecha'], 'width' => '27', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['edad'], 'width' => '16.7', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$col[] = array('text' => $row['sexo'], 'width' => '16', 'height' => '5', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');       
	$col[] = array('text' => $row['dfinal'], 'width' => '32.5', 'height' => '5', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '10', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '0,0,0', 'linewidth' => '0.4', 'linearea' => 'LTBR');
	$columns[] = $col;
}
$pdf->WriteTable($columns);
$pdf->Output();
?> 