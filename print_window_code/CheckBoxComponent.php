<?php
/**
 * checkBox组件类，实现组件抽象类；
 */
include_once('./Componest.php');
class CheckBoxComponent extends Componest
{
	public function __construct($name){
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print CheckBox('.$this->name.")\r\n";
	}
}