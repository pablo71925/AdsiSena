<?php
	include "electric/Pokemon.php";
	include "fire/Pokemon.php";
	include "water/Pokemon.php";

	use \electric\Pokemon as Pke;
	use \fire\Pokemon     as Pkf;
	use \water\Pokemon    as Pkw;

	$pk1 = new Pke();
	$pk2 = new Pkf();
	$pk3 = new Pkw();

	echo $pk1->getPokemon();
	echo "<hr>";
	echo $pk2->getPokemon();
	echo "<hr>";
	echo $pk3->getPokemon();

