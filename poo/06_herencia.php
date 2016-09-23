<?php
class Operation {
	protected $n1;
	protected $n2;

	public function setNumbers($n1, $n2) {
		$this->n1 = $n1;
		$this->n2 = $n2;
	}
}

class Product extends Operation {
	public function getResult() {
		return ($this->n1 * $this->n2);
	}
}

$prd = new Product();
$prd->setNumbers(5, 8);
echo "El producto es: ".$prd->getResult();

