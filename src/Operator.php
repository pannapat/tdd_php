<?php 
class Operator{
	var $value;
	var $operator_arr = array (
			"1" => "+",
			"2" => "*",
			"3" => '-'
	);
	public function __construct($value){
		$this->value = $value;
	}
	public function getValue(){
		return $this->operator_arr[$this->value];
	}
}
?>