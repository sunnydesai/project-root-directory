<?php
class Apple extends IComponent
{
	private $computer;
	public function __construct()
	{
		$this->computer="Apple Macintosh: ";
	}

	public function getComputer()
	{
		return $this->computer;
	}
	public function price()
	{
		return 799;
	}
}
?>