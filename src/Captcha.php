<?php
class Captcha {
	
	public function __construct($pattern, $left, $operator, $right) {
		$this->pattern = $pattern;
		$this->left = $left;
		$this->right = $right;
		$this->operator = $operator;
	}
	function getLeft() {
		if ($this->pattern == "2") {
			$stringOperand = new StringOperand ( $this->left );
			return $stringOperand->getValue ();
		}
		$integerOperand = new IntegerOperand ( $this->left );
		return $integerOperand->getValue ();
	}
	function getRight() {
		if ($this->pattern == "2") {
			$integerOperand = new IntegerOperand ( $this->right );
			return $integerOperand->getValue ();
		}
		$stringOperand = new StringOperand ( $this->right );
		return $stringOperand->getValue ();
	}
	function getOperator() {
		$operator = new Operator($this->operator);
		return $operator->getValue();
	}
	function toString(){
		return $this->getLeft() . $this->getOperator() . $this->getRight();
	}
}
?>
