<?php

  class Pokemon {
    protected $name;
    protected $type;

    public function __construct($n) {
      $this->name = $n;
    }
    public function type($t) {
      if($t instanceof Electric) {
        $this->type = 'Electric';
      }
      if($t instanceof Fire) {
        $this->type = 'Fire';
      }
      if($t instanceof Fly) {
        $this->type = 'Fly';
      }
    }
    public function show() {
      echo "<li>Nombre: ".$this->name."</li>";
      echo "<li>Tipo:   ".$this->type."</li>";
      echo "<hr>";
    }
  }
  class Electric  extends Pokemon { }
  class Fire      extends Pokemon { }
  class Fly       extends Pokemon { }

  $pk1 = new Electric('Pikachu');
  $pk1->type($pk1);
  $pk1->show();

  $pk2 = new Fire('Charmander');
  $pk2->type($pk2);
  $pk2->show();

  $pk3 = new Fly('Pidgeot');
  $pk3->type($pk3);
  $pk3->show();
