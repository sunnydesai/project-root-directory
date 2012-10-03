<?php
class Terabyte extends Decorator 
{
	private  $computer;
	public function __construct(IComponent $computer) 
	{
		$this->computer = $computer;
	}
	public function getComputer() 
	{
		return $this->computer->getComputer() . "<br/>&nbsp;&nbsp; Terabyte ";
	}
	public function price() 
	{
		return 129 + $this->computer->price();
	}
}
?>