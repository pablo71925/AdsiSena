<?php

namespace water;

class Pokemon {
	private $name   = "Squirtle";
	private $weight = "28 kg";
	private $height = "0.6 mt";
	private $pc     = 210;

	public function getPokemon() {
		return "Nombre: ".$this->name. ", Peso: ".$this->weight. ", Altura: ".$this->height. ", Puntos Combate: ".$this->pc;
	}
}