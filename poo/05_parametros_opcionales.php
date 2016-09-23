<?php

class Pokemon {
  private $nombre;
  private $tipo;
  private $genero;

  public function __construct($nombre, $tipo = 'Tierra', $genero = 'Masculino') {
    $this->nombre = $nombre;
    $this->tipo   = $tipo;
    $this->genero = $genero;
  }

  public function getPokemon() {
    echo "<ul>";
    echo "<li> Nombre: ".$this->nombre."</li>";
    echo "<li> Tipo:   ".$this->tipo."</li>";
    echo "<li> Genero: ".$this->genero."</li>";
    echo "</ul>";
  }
}

$pk1 = new Pokemon('Pikachu', 'Trueno', 'Hembra');
$pk1->getPokemon();

$pk2 = new Pokemon('Charmander', 'Fuego');
$pk2->getPokemon();

$pk3 = new Pokemon('Bulbasour');
$pk3->getPokemon();