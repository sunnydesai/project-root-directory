<?php
class Dell extends IComponent 
{
	private $computer;
	public function __construct() 
	{
		$this->computer="Dell Computer: ";
	}
	
	public function getComputer()
	{
		return $this->computer;
	}
	public function price() 
	{
		return 599;
	}
}
?>