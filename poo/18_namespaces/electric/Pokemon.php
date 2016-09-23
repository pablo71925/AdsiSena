<?php

namespace electric;


class Pokemon {
	private $name   = "Pikachu";
	private $weight = "20 kg";
	private $height = "0.5 mt";
	private $pc     = 230;

	public function getPokemon() {
		return "Nombre: ".$this->name. ", Peso: ".$this->weight. ", Altura: ".$this->height. ", Puntos Combate: ".$this->pc;
	}
}