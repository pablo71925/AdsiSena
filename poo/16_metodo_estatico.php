<?php

class Car {
  private $brand;
  private $price;
  private $color;

  public function __construct($b, $p, $c) {
    $this->brand = $b;
    $this->price = $p;
    $this->color = $c;
  }
  public static function showError() {
    echo "<li>Marca:  ".$this->brand."</li>";
    echo "<li>Precio: ".$this->price."</li>";
    echo "<li>Color:  ".$this->color."</li>";
  }
  public static function show($b, $p, $c) {
    echo "<li>Marca:  ".$b."</li>";
    echo "<li>Precio: ".$p."</li>";
    echo "<li>Color:  ".$c."</li>";
  }
}
// Error: Un medoto estático no puede acceder a los
// atributos de su clase
//$cr = new Car('Volkswagen', 48000000, 'Negro');
//$cr->showError();

Car::show('Volkswagen', 48000000, 'Negro');