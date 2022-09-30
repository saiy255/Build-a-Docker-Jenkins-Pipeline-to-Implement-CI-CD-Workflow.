<?php

class MyClass
{
	/* Private attribute, cannot be accessed directly */
	private $name;
	
	/* Constructor */
	public function __construct()
	{
		$this->name = '';
	}
	
	/* Getter function to read the attribute */
	public function get_name()
	{
		return $this->name;
	}
	
	/* Setter function to change the attribute */
	public function set_name($new_name)
	{
		// if ($this->is_valid_name($new_name))
		// {
		// 	$this->name = $new_name;
		// }
		$this->name = $new_name;
	}
	
	/* Checks if the name is valid */
	// private function is_valid_name($name)
	// {
	// 	$valid = TRUE;
		
	// 	/* Just checks if the string length is between 3 and 16 */
	// 	if (strlen($name) < 3)
	// 	{
	// 		$valid = FALSE;
	// 	}
	// 	else if (strlen($name) > 16)
	// 	{
	// 		$valid = FALSE;
	// 	}
		
	// 	return $valid;
	// }
}

$mc = new MyClass();
$mc->set_name('Sai');
echo $mc->get_name();