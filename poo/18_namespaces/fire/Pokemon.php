<?php

namespace fire;

class Pokemon {
	private $name   = "Charmander";
	private $weight = "32 kg";
	private $height = "0.7 mt";
	private $pc     = 280;

	public function getPokemon() {
		return "Nombre: ".$this->name. ", Peso: ".$this->weight. ", Altura: ".$this->height. ", Puntos Combate: ".$this->pc;
	}
}