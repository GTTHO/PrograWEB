<?php
include_once 'connection.php';
include_once '../fpdf/fpdf.php';
$table = 'tabla43';

class PDF extends FPDF
{

    function Header()
{
    $this->SetFont('Arial','B',13);
    $this->Cell(60);
    $this->Cell(60,10,'Lista de Inventario',1,0,'C');
    $this->Ln(20);
}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbConn();
$connString = $db->getConexion();
$display_heading = array('id'=>'ID', 'nombre'=> 'Nombre', 'marca'=> 'Marca', 'precio'=> 'Precio de Compra','cantidad'=> 'Cantidad Comprada',);

$result = mysqli_query($connString, "SELECT id, nombre, marca, precio, cantidad FROM $table") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM $table");

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {
$pdf->Cell(35,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,12,$column,1);
}
$pdf->Output();
?>
 