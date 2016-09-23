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
    protected function showVehicle() {
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
  $cr = new Car('Renault', 'Clio 2', '2015', 'Red');
  $cr->showVehicle();
  $cr = new Car('Volkswagen', 'Golf GTI', '2016', 'Black');
  $cr->showVehicle();
  $cr = new Car('Audi', 'Q3', '2017', 'White');
  $cr->showVehicle();