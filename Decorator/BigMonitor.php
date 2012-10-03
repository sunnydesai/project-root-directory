<?php
class BigMonitor extends IComponent 
{
	private  $computer;
	public function __construct(IComponent $computer) 
	{
		$this->computer = $computer;
	}
	public function getComputer() 
	{
		return $this->computer->getComputer() . "<br/>&nbsp;&nbsp; Big Monitor ";
	}
	public function price() 
	{
		return 325 + $this->computer->price();
	}
}
?>
