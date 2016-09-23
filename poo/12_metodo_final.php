<?php
  class Vehicle {
    protected $brand;
    protected $refer;
    protected $model;
    protected $color;
    public function __construct($brand, $refer, $model, $color) {
      $this->brand = $brand;
      $this->refer = $refer;
      $this->model = $model;
      $this->color = $color;
    }
    // Una metodo con el modificador "final" no puede sobreescribirse.
    final protected function showVehicle() {
      echo "<li>Marca:      ".$this->brand."</li>";
      echo "<li>Referencia: ".$this->refer."</li>";
    }
  }
  class Car extends Vehicle {
    public function showVehicle() {
      parent::showVehicle();
      echo "<li>Modelo: ".$this->model."</li>";
      echo "<li>Color:  ".$this->color."</li>";
      echo "<br>";
    }
  }
  // Muestra Error:
  // Cannot override final method Vehicle::showVehicle()
  $vw = new Car('Volkswagen', 'Golf GTI', '2015', 'Black');
  $vw->showVehicle();
