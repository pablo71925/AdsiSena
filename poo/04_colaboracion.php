<?php

class Entrenar {
	public function alimentar($comida) {
		echo "<ol>";
		echo "<li> El pokemon se alimento de: ".$comida."</li>";
	}
	public function evolucionar($nombre) {
		echo "<li>".$nombre." ha evolucionado</li>";
		echo "</ol>";
	}
}

class Pokemon {
	private $nombre;
	private $comida;

	public function __construct($nombre, $comida) {
		$this->nombre    = $nombre;
		$this->comida    = $comida;
		// Colaboración de Objetos
		$this->go        = new Entrenar();
	}

	public function adminPokemon() {
  		$this->go->alimentar($this->comida);
  		$this->go->evolucionar($this->nombre);
  }

}
$pk1 = new Pokemon('Pikachu', 'Bayas');
$pk1->adminPokemon();

$pk2 = new Pokemon('Charmander', 'Zanahorias');
$pk2->adminPokemon();