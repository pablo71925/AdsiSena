<?php
abstract class DataBase {
  protected $conx;
  protected $host;
  protected $user;
  protected $pass;
  protected $nmbd;

  public function __construct($h, $u, $p, $b) {
    $this->host = $h;
    $this->user = $u;
    $this->pass = $p;
    $this->nmbd = $b;
  }
  public function connection() {
    $this->conx = mysqli_connect($this->host, $this->user, $this->pass, $this->nmbd);
    if($this->conx) { echo "<li>Se ha conectado a la BD con exito!</li>"; }
  }
  public function __destruct() {
    mysqli_close($this->conx);
    echo "<li>Se ha desconectado de la BD con exito!</li>";
  }
}
class User extends DataBase {
  public function __construct($h, $u, $p, $b) {
    parent::__construct($h, $u, $p, $b);
    parent::connection();
  }
}
$user = new User('localhost', 'root', 'admin', 'adsi901197');
