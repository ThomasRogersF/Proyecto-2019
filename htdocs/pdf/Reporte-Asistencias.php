<?php   

if(isset($_POST['submit']))
{

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];   

include 'PDF.php';
require '../includes/dbh.inc.php';

$sql="SELECT * FROM asistencia1 where tiempo_entrada BETWEEN '$fecha1' and '$fecha2' ORDER BY ID DESC";
$result = mysqli_query($conn , $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',0);
$pdf->Cell(20,6,'Id U',1,0,'C',0);
$pdf->Cell(40,6,'Nombre',1,0,'C',0);
$pdf->Cell(40,6,'Fecha de ingreso',1,0,'C',0);
$pdf->Cell(30,6,'Entrada',1,0,'C',0);
$pdf->Cell(30,6,'Salida',1,1,'C',0);

while($row = $result->fetch_assoc())
{
$pdf->Cell(20,6,$row['ID'],1,0,'C',0);
$pdf->Cell(20,6,$row['id_usuario'],1,0,'C',0);
$pdf->Cell(40,6,$row['usuario_nombre'],1,0,'C',0);
$pdf->Cell(40,6,$row['tiempo_entrada'],1,0,'C',0);
$pdf->Cell(30,6,$row['hora'],1,0,'C',0);
$pdf->Cell(30,6,$row['hora2'],1,1,'C',0); 
    
}
   
    
}
    
			
if(isset($_POST['submit2']))
{

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];   
$id=$_POST['id'];    

include 'PDF.php';
require '../includes/dbh.inc.php';

$sql="SELECT * FROM asistencia1 where tiempo_entrada BETWEEN '$fecha1' and '$fecha2'  and id_usuario='$id' ORDER BY ID DESC";
$result = mysqli_query($conn , $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',0);
$pdf->Cell(20,6,'Id U',1,0,'C',0);
$pdf->Cell(40,6,'Nombre',1,0,'C',0);
$pdf->Cell(40,6,'Fecha de ingreso',1,0,'C',0);
$pdf->Cell(30,6,'Entrada',1,0,'C',0);
$pdf->Cell(30,6,'Salida',1,1,'C',0);

while($row = $result->fetch_assoc())
{
$pdf->Cell(20,6,$row['ID'],1,0,'C',0);
$pdf->Cell(20,6,$row['id_usuario'],1,0,'C',0);
$pdf->Cell(40,6,$row['usuario_nombre'],1,0,'C',0);
$pdf->Cell(40,6,$row['tiempo_entrada'],1,0,'C',0);
$pdf->Cell(30,6,$row['hora'],1,0,'C',0);
$pdf->Cell(30,6,$row['hora2'],1,1,'C',0); 
    
}
}

     



$pdf->Output("Asistencias.pdf", 'I');

?>
