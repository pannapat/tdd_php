<?php 

	class StringOperand extends Operand{
		var $value;
		var $value_arr = array (
				"1" => "One",
				"2" => "Two",
				"3" => "Three",
				"4" => "Four",
				"5" => "Five",
				"6" => "Six",
				"7" => "Seven",
				"8" => "Eight",
				"9" => "Nine"
		);
		function __construct($value){
			$this->value = $value;
		}
		
		function getValue(){
			return $this->value_arr[$this->value];
		}
	}

?>