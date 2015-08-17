<?php

class Bike
{
	public $price;
	public $max_speed;
	public $miles;
	
	public function __construct($price, $speed)
	{
		$this->price = $price;
		$this->max_speed = $speed;
		$this->miles = 0;
	}

	public function displayInfo()
	{
		echo $this->price . "<br>";
		echo $this->max_speed . "<br>";
		echo $this->miles . "<br>";
		return $this;
	}

	public function drive()
	{
		echo "Driving" . "<br>";
		$this->miles += 10;
		return $this;
	}

	public function reverse()
	{
		echo "Reversing" . "<br>";
		//Prevent Negative Value: 
		//Added statement if below or equal to 0 , miles will be 0 
		if ($this->miles <= 0){
			$this->miles == 0;
		} else {
			$this->miles -= 5;
		}
		return $this;
	}
}

$bike1 = new Bike(200,"25mph");
$bike2 = new Bike(350,"35mph");
$bike3 = new Bike(600,"50mph");

$bike1->drive()->drive()->drive()->reverse()->displayInfo();
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();
$bike3->reverse()->reverse()->reverse()->displayInfo();
?>