<?php

abstract class Animal {
  protected $type;
  protected $name;
  protected $age;

  public function __construct($t, $n, $a) {
    $this->type = $t;
    $this->name = $n;
    $this->age  = $a;
  }
  public abstract function showAnimal();
}
class Mammal extends Animal {
  public function showAnimal() {
    echo "
      <li>Tipo:   ".$this->type."</li>
      <li>Nombre: ".$this->name."</li>
      <li>Edad:   ".$this->age."</li>
    ";
  }
}
$mm = new Mammal('Dog', 'Troski', '10');
$mm->showAnimal();