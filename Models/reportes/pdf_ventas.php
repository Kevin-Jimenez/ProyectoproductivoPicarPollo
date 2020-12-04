<?php
require "fpdf.php";
require "../database.php";

class pdf_ventas extends FPDF{

	   public function header(){
	   	//tipo de letra 
	   	$this -> setfont('Arial','B',20);
	   	//agregar imagen 
		$this -> Image("picar1.png",10,12,50);
		$this -> Image("picar1.png",150,12,50);
		
		//diseño de titulo
		$this -> setfont('Arial','I',30);
		// $this->SetTextColor(225, 72, 35);
		$this -> cell(180,45,"Ventas",0,0,'C');
        $this-> SetDrawColor(225, 72, 35);
		$this-> SetLineWidth(1);
		$this->Line(120,37,80,37);
	   	//salto de linea
		   
		$this->Ln(40);
		$this-> SetFont('Arial', 'B',12);
		$this->SetTextColor(225, 72, 35);
		$this->Cell(20,5,'Direccion: 0 Este1 Cl. 75 Sur, Bogota');
		$this->Ln();
		$this->Cell(20,5,'Celular: 320-996-5992');
		$this -> Ln(20);
	   }

	   public function Encabezado_Tabla(){
	   	$this -> setfont('Arial','B',12);
		$this -> setfillcolor(255, 255, 255);
		// $this->SetTextColor(255, 255, 255);
		$this -> cell(25,10,"Venta",0,0,'C','true');
	   	$this -> cell(25,10,"Mesa",0,0,'C','true');
	   	$this -> cell(30,10,"Fecha",0,0,'C','true');
		$this -> cell(35,10,"Inicio del pedido",0,0,'C','true');
		$this -> cell(30,10,"Fin del pedido",0,0,'C','true');
		$this -> cell(40,10,"Valor pagado",0,0,'C','true');
		$this-> SetDrawColor(225, 72, 35);
		$this-> SetLineWidth(1);
		$this->Line(10,83,195,83);
		$this -> Ln(2);
	   }

	   public function Cuerpo_Tabla($pdo){
		$this -> setfont('Arial','I',10);
		$this->SetLineWidth(0.2);
		$this -> setfillcolor(225, 225, 225 );	
		$this->SetTextColor(40, 40, 40);
		$this->SetDrawColor(255, 255, 255);
	   	$stm = $pdo -> Query("SELECT * FROM ventas");
	   	while ($data = $stm -> fetch(PDO::FETCH_OBJ))
	   	{
			$this -> Ln(10);
			$this -> setfillcolor(225, 225, 225 );
		    $this -> cell(25,10,$data->id_venta,1,0,'C','true');
	   		$this -> cell(25,10,$data->id_mesa,1,0,'C','true');
	   		$this -> cell(30,10,$data->fecha_p,1,0,'C','true');
			$this -> cell(35,10,$data->inicio_p,1,0,'C','true');
			$this -> cell(30,10,$data->fin_p,1,0,'C','true');
			$this -> setfillcolor(203, 243, 178 );   
			$this -> cell(40,10,$data->precio_p,1,0,'C','true');
	   			
	   }
	}
	function Footer()
	{
		// Go to 1.5 cm froom bootm
		$this->SetY(-10);
		// Select Arial italic B
		$this->setfont('Arial','I',14);
		$this->SetTextColor(1,1,1);
		$this->cell(250,0,"Picar Pollo, Restaurante- Fruteria",0,0,'c');
		// Print centered page numbre
		$this->SetY(-15);
		$this->SetX(-30);
		$this->AliasNbPages();

		$this->Write(5, $this->PageNo(). '/{nb}');
	}
}

$pdf = new pdf_ventas();
$pdf -> AliasNbPages(); 
$pdf -> AddPage('P','A4',0);
$pdf -> Encabezado_Tabla();
$pdf -> Cuerpo_Tabla($pdo);
$pdf -> Output();

?>