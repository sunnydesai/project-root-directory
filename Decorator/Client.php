<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('IComponent.php');
include_once('Decorator.php');
include_once('Dell.php');
include_once('Apple.php');
include_once('Terabyte.php');
include_once('BigMonitor.php');
include_once('Hub.php');

class Client
{
	
	private $computerNow;
	private $accessory;
	private $n;
	
	public function __construct()
	{	
		$computer=$_POST['query'];
		
		if($computer=="apple")
		{
			$this->computerNow = new Apple();
		}
		else
		{
			$this->computerNow = new Dell();
		}
		
	if(!empty($_POST['accessories']))
		{
			$this->accessory=$_POST['accessories'];
			$this->n=count($this->accessory);
			$this->accessorize();
		}

		print $this->computerNow->getComputer() . "<br/>&nbsp;&nbsp;<strong>Total= $" . $this->computerNow->price() . "</strong><p/>";	
	}
	
	private function accessorize()
	{
		for($a=0; $a < $this->n; $a++)
		{
			switch($this->accessory[$a])
			{
				case "bigmonitor":
					$this->computerNow =new BigMonitor($this->computerNow);
					break;
				case "terabyte":
					$this->computerNow =new Terabyte($this->computerNow);
					break;
				case "hub":
					$this->computerNow =new Hub($this->computerNow);					
			}
		} 
	}
}
$goClient=new Client()
?>