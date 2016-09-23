<?php

class Persona {
	// Atributos Públicos
	public $nombre;
	public $apellido;

	// Métodos Públicos
	public function setNombreCompleto($nombre, $apellido) {
		$this->nombre   = $nombre;
		$this->apellido = $apellido;
	}
	public function getNombreCompleto() {
		return $this->nombre.' '.$this->apellido;
	}
}

$persona1 = new Persona();
$persona1->setNombreCompleto('Homero', 'Simpson');
echo 'Persona 1: '.$persona1->getNombreCompleto();

$persona2 = new Persona();
$persona2->setNombreCompleto('Listbet', 'Rowoski');
echo '<br>Persona 2: '.$persona2->getNombreCompleto();