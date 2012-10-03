<?php
/**
* Myclass
* provide a description of the class here.....
*/
class Myclass extends Factory{

	/**
	* factory
	*
	*description of the method.
	*
	* @access public
	*@param void
	* @return Myclass Returns a new instance of Myclass.
	*/

	public static function factory() {
	
		print __METHOD__. '::' . __LINE__.'<br />';
		return new Myclass();
	}
	
	protected function __construct() {
		print __METHOD__. '::' . __LINE__.'<br />';
	
	}
	
	public function __destruct() {
		print __METHOD__. '::' . __LINE__.'<br />';
		
	}

}