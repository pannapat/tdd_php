<?php 
class FizzBuzz{

	var $arr = array(
			
	);
	public function getCount($value){
		if($value==3 || $value == 6)
			return "Fizz";
		if($value==5)
			return "Buzz";
		if($value==15)
			return $this->getCount(3).$this->getCount(5);
		return $value;
	}
	
	
	
}
?>