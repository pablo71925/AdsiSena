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
      echo "<li>Modelo:     ".$this->model."</li>";
      echo "<li>Color:      ".$this->color."</li>";
      echo "<br>";
    }
  }
  class Car extends Vehicle {
    public function __construct() {
      parent::__construct('Renault', '4', '1980', 'Red');
      $this->showVehicle();
    }
  }
  $cr = new Car('Volkswagen', 'Golf GTI', '2015', 'Black');