<?php require('../PDF/fpdf.php');

class PDF extends FPDF {

    // Cabecera de página
    function Header() {
        $this->SetFillColor(99, 185, 255);
        $this->Rect(0, 0, 220, 50, 'F');
        $this->SetY(25);
        $this->SetFont('Arial', 'B', 30);
        $this->SetTextColor(255, 255, 255);
        //$this->Write(5, 'LEMUA');
    }

    // Pie de página
    function Footer() {
        $this->SetFillColor(99, 185, 255);
        $this->Rect(0, 250, 220, 50, 'F');
        $this->SetY(-20);
        $this->SetFont('Arial', 'B', 12);
        $this->SetTextColor(255, 255, 255);
        $this->SetX(120);
        $this->Write(5, 'Lemua');
        $this->Ln(7);
        $this->SetFont('Arial', '', 12);
        $this->SetX(120);
        $this->Write(5, 'Les 3 amis@gmail.com');
        $this->SetX(120);
        $this->Ln();
        $this->SetX(120);
        $this->Write(5, '(55) 7889-8787');
        $this->SetFont('Arial', 'I', 12);
        $this->SetY(-15);
        $this->Cell(50, 10, utf8_decode('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

function SetCurrency(float $valor, string $signo='$'):string {
    return $signo.number_format($valor, 2, '.', '');
}


//--- para consulta
include("Conexion.php");
$link=Conectarse();

$codigo=$_REQUEST['id'];
$var_consulta="SELECT * FROM cuenta WHERE idCliente=$codigo";
$consulta_cliente="SELECT nombre,apellidos, telefono, sucursal FROM clientes WHERE id=$codigo";

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, "Spanish");
$fecha=date('d/F/Y  g:i:s a');
$pdf=new PDF('P', 'mm', 'letter', true);
$pdf->AddPage('portrait', 'letter');
$pdf->AliasNBPages();
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetY(8);
$pdf->SetX(120);
$pdf->Write(5, utf8_decode('DETALLES DEL ENVÍO '));
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 11);
$pdf->SetX(120);
$pdf->Write(5, 'ID Cliente: '.$codigo);


$var_query2=$link->query($consulta_cliente);

while ($var_fila=$var_query2->fetch_array()) {
    $nombre=$var_fila[0];
    $apellidos=$var_fila[1];
    $tel=$var_fila[2];
    $suc=$var_fila[3];
}

$cliente=$nombre.' '.$apellidos;
$telefono="(".substr($tel, 0, 2).")"." ".substr($tel, 2, 4)."-".substr($tel, 6, 4);
$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Cliente: '.utf8_decode($cliente));
$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Sucursal: '.utf8_decode($suc));
$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Telefono: '.$telefono);
$pdf->Ln(7);
$pdf->SetX(120);
$pdf->Write(5, 'Fecha de Pedido: '.$fecha);
$pdf->SetTextColor(0, 0, 0);

$pdf->Image('../PDF/imagenes/logo.png', 10, 10, 50);
$pdf->SetY(60);

$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(79, 78, 77);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(65, 10, 'NOMBRE PRODUCTO', 0, 0, 'C', 1);
$pdf->Cell(33, 10, 'PRECIO', 0, 0, 'C', 1);
$pdf->Cell(30, 10, 'CANTIDAD', 0, 0, 'C', 1);
$pdf->Cell(33, 10, 'EXTRA', 0, 0, 'C', 1);
$pdf->Cell(33, 10, 'SUBTOTAL', 0, 1, 'C', 1);

$pdf->SetLineWidth(0.5);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetDrawColor(80, 80, 80);
$total=0;
$totalP=0;
$extra=0;
$var_query=$link->query($var_consulta);

while ($var_fila=$var_query->fetch_array()) {
    $V2=$var_fila[2];
    $V3=$var_fila[3];
    $V4=$var_fila[4];
    $V5=$var_fila[5];
    $V6=$var_fila[6];

    $pdf->Cell(65, 10, utf8_decode($V2), 'B', 0, 'L', 0);
    $pdf->Cell(33, 10, SetCurrency($V3), 'B', 0, 'C', 0);
    $pdf->Cell(30, 10, $V4, 'B', 0, 'C', 0);
    $pdf->Cell(33, 10, SetCurrency($V5), 'B', 0, 'C', 0);
    $pdf->Cell(33, 10, SetCurrency($V6), 'B', 1, 'C', 0);

    // Creación del objeto de la clase heredada
    $totalP+=$V4;
    $extra+=$V5;
    $total+=$V6;
}


$pdf->Cell(65, 10, 'TOTAL', 0, 0);
$pdf->Cell(33, 10, '', 0, 0, 'C');
$pdf->Cell(30, 10, $totalP, 0, 0, 'C');
$pdf->Cell(33, 10, SetCurrency($extra), 0, 0, 'C');
$pdf->Cell(33, 10, SetCurrency($total), 0, 0, 'C');
$pdf->Output('Ticket_'.$nombre.'_ID '.$codigo.'.pdf', 'I');
?>