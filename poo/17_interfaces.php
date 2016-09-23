<?php

/*
Las interfaces de objetos permiten crear código con el cual especificamos qué métodos deben ser
implementados por una clase, sin tener que definir cómo estos métodos son manipulados.

Las interfaces son definidas utilizando la palabra clave interface, de la misma forma que con
clases estándar, pero sin métodos que tengan su contenido definido.

Todos los métodos declarados en una interfaz deben ser públicos, ya que ésta es la naturaleza
de una interfaz.

Para implementar una interfaz, se utiliza el operador implements. Todos los métodos en una
interfaz deben ser implementados dentro de la clase; el no cumplir con esta regla resultará
en un error fatal. Las clases pueden implementar más de una interfaz si se deseara,
separándolas cada una por una coma.
*/

interface iPokemon {
    public function setPk($name, $type, $pc);
    public function getPk();
}

class Pokemon implements iPokemon {
    private $name;
    private $type;
    private $pc;

    public function setPk($name, $type, $pc) {
        $this->name = $name;
        $this->type = $type;
        $this->pc   = $pc;
    }
    public function getPk() {
        return "Name: ".$this->name." <br>TYPE: ".$this->type." <br>PC: ".$this->pc;
    }
}
$pk = new Pokemon;
$pk->setPk('Pikachu', 'Electric', 230);
echo $pk->getPk();
echo "<hr>";
$pk->setPk('Bullbasour', 'Plant', 210);
echo $pk->getPk();