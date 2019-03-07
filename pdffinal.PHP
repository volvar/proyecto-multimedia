<?php
require ('fpdf.php');
include 'conexion.php';

$cont=1;
$rut = $_POST['rut'];
$dv = $_POST['dv'];
$rutf = $rut."-".$dv;
$foto = "";

$sql1 = "SELECT * FROM visita WHERE rut='$rutf' ORDER BY fecha";
$sql2 = "SELECT * FROM persona";

//datos del select
foreach($pdo->query($sql2) as $row){
if ($row['rut'] == $rutf) {
    $foto = $row['foto'];
    }
}
    class PDF extends FPDF
{
// Cabecera de página
function Header()
{   

    // Logo
    
    

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    // Salto de línea
    $this->Ln(20);
}
}
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->cell(190,10,'footer',1);
   
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetRightMargin(12);
$pdf->SetFont('Times','',12);
foreach($pdo->query($sql2) as $row){
if ($row['rut'] == $rutf) {
$pdf->cell(10,10,"Rut: ");
$pdf->cell(10,10,$row['rut']);
$pdf->Ln(10);
$pdf->cell(17,10,"Nombre: ");
$pdf->cell(18,10,$row['nombres']);
$pdf->cell(25,10,$row['apell_pat']);
$pdf->cell(25,10,$row['apell_mat']);
$pdf->Ln(10);
$pdf->cell(20,10,"Telefono: ");
$pdf->cell(60,10,$row['telefono']);
$pdf->Ln(10);
    }
}
$pdf->Ln(40);

//tabla
$pdf->cell(10,10,"N",1);
$pdf->cell(30,10,"Fecha",1);
$pdf->cell(30,10,"entrada",1);
$pdf->cell(30,10,"salida",1);
$pdf->cell(60,10,"observacion",1);
$pdf->Ln(10);
foreach ($pdo->query($sql1) as $row2) {
$pdf->cell(10,10,$cont,1);
$pdf->cell(30,10,$row2['fecha'],1);
$pdf->cell(30,10,$row2['hora_entra'],1);
$pdf->cell(30,10,$row2['hora_sali'],1);
$pdf->cell(60,10,$row2['observacion'],1);
$pdf->Ln(10);
$cont++;
}

//fin tabla
$pdf->Output();
?>