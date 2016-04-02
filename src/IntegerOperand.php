<?php 

	class IntegerOperand extends Operand{
		var $value;
		function __construct($value){
			$this->value = $value;
		}
		function getValue(){
			return $this->value;
		}
	}

?>