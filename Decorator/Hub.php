<?php
class Hub extends IComponent 
{
	private  $computer;
	public function __construct(IComponent $computer) 
	{
		$this->computer = $computer;
	}
	public function getComputer() 
	{
		return $this->computer->getComputer() . "<br/>&nbsp;&nbsp; USB Hub ";
	}
	public function price() 
	{
		return 82 + $this->computer->price();
	}
}
?>
