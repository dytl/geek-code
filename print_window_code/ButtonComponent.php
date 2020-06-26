<?php
/**
 * 按钮组件类，实现组件抽象类；
 */
include_once('./Componest.php');
class ButtonComponent extends Componest
{
	public function __construct($name){
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print Button('.$this->name.")\r\n";
	}
}