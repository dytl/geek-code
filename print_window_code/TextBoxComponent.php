<?php
/**
 * TextBox组件类，实现组件抽象类；
 */
include_once('./Componest.php');
class TextBoxComponent extends Componest
{
	public function __construct($name){
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print TextBoxComponent('.$this->name.")\r\n";
	}
}