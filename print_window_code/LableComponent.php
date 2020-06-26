<?php
/**
 * Lable组件类，实现组件抽象类；
 */
include_once('./Componest.php');
class LableComponent extends Componest
{
	public function __construct($name){
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print Lable('.$this->name.")\r\n";
	}
}