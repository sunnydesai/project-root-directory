<?php
/**
* Myclass2
* provide a description of the class here.....
*/
class Myclass2 {

	
	
	public function __construct() {
		print __METHOD__. '::' . __LINE__.'<br />';
	
	}
	
	public function __destruct() {
		print __METHOD__. '::' . __LINE__.'<br />';
		
	}

}