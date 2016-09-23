<?php

class Photo {
  private $title;
  private $description;
  private $url;

  public function __construct($t, $d, $u) {
    $this->title       = $t;
    $this->description = $d;
    $this->url         = $u;
  }
  public function showPhoto() {
    echo "Título:      ".$this->title;
    echo "Descripción: ".$this->description;
    echo "Ruta:        ".$this->url;
  }
}
$photo1 = new Photo('Landscape', 'Nice view over jungle...', 'photos/landscape.png');
$photo2 = clone($photo1);
$photo2->showPhoto();
