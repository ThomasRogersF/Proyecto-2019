
        <?php
      
require 'pdf/fpdf.php';


class PDF extends FPDF
{
    function Header()
        {   
        
            $this->Image('../img/logo2.png', 10,2,150 );
            $this->SetFont('Arial','B',14);
            $this->Ln(10);
            $this->Cell(35,10, 'ASISTENCIAS',1,1,'l');
            $this->Ln(10);
            $this->Cell(75 ,10, '',0,0,'C');
            $this->Ln(10);
            $this->Cell(50 ,10, 'Fecha de Emision:',0,0,'l');
            $this->cell(0,10,date('d/m/Y'),0,1,'L');
            $this->SetTextColor(0, 0, 0);

        }
    function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I', 10);
            $this->Cell(0,10, 'Pagina Nro. '.$this->PageNo().'',0,0,'C' );
        }
}
    
    ?>