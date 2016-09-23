<?php

class tablaHTML {
	private $nf;
	private $nc;

	public function __construct($nf, $nc) {
		$this->nf = $nf;
		$this->nc = $nc;		
	}

	public function crearTabla() {
		$this->inicioTabla();
		$this->llenarTabla();
		$this->finalTabla();
	}

	private function inicioTabla() {
		echo "<table style='border: 4px solid #ccc'>";
	}

	private function llenarTabla(){
		for ($i=1; $i <= $this->nf ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <= $this->nc ; $j++) { 
				echo "<td style='border: 1px dotted #ddd; padding: 10px'>";
				echo "f".$i."c".$j."</td>";
			}
			echo "</tr>";			
		}
	}

	private function finalTabla() {
		echo "</table>";
	}
}

$tbl = new tablaHTML(20,10);
$tbl->crearTabla();