<?php

class CatalogoMusica {
  private $nom_disquera;
  private $nom_artista = array();
  private $nom_album   = array();


  public function __construct($n_disc) {
    $this->nom_disquera = $n_disc;
  }

  public function setCatalogo($n_art, $n_alb) {
    $this->nom_artista[] = $n_art;
    $this->nom_album[]   = $n_alb;
  }

  public function getCatalogo() {
    echo "=================================================<br>";
    echo '<strong>Nombre Disquera:</strong> '.$this->nom_disquera."</br>";
    echo '<strong>Número de Artistas:</strong> '.sizeof($this->nom_artista)."</br>";
    $cont = 0;
    foreach ($this->nom_artista as $artist) {
      echo '-----------------------------------------------<br>';
      echo '<strong>Artista: </strong> '.$artist.'<br>'; 
      echo '<strong>Album:   </strong> '.$this->nom_album[$cont].'<br>';
      $cont++;
    }
    echo "=================================================<br>";
    //var_dump($this->nom_artista);
    //var_dump($this->nom_album);
  }
}

$msc = new CatalogoMusica('Total Music');
$msc->setCatalogo('Type of Negative', 'Slow Deep And Hard');
$msc->setCatalogo('Metallica', 'Kill Em All');
$msc->setCatalogo('Moonspell', 'WolfHeart');
$msc->setCatalogo('GreenDay', 'Dookie');
$msc->setCatalogo('Limpbizkit', 'Boiler');
$msc->setCatalogo('Korn', 'Issues');
$msc->getCatalogo();