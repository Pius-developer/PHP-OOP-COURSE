<?php
// create a class say checkout basket
class basket
{
	// creating public properties

	public $itemscost;

	public $shippingcost;

	public function calculatetotal(){

		$total = $this->itemscost + $this->shippingcost;

		return $total;

	}

}
// instantiate the class (object)

$basket = new basket();

// Setting values to the properties

$basket ->itemscost = 50;

$basket->shippingcost =100;

// var dumping our object values


var_dump($basket->calculatetotal());


?>
