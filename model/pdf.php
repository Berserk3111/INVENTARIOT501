<?php 

require ("../../fpdf.php");

class PDF extends FPDF
{

    function Header(){
        $this->Image('https://secmotic.com/wp-content/uploads/imagotipo-positivo-3.png',0,5,30);
        $this->SetFont('Arial','B',40);
        $this->Cell(30);
        $this->Cell(140,10,'JAND Tecnologia',0,0,'C');
        $this->Ln(40);
    }

    
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
    }







}



?>