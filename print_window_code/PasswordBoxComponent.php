<?php
/**
 * PasswordBox组件类，实现组件抽象类；
 */
include_once('./Componest.php');
class PasswordBoxComponent extends Componest
{
	public function __construct($name){
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print PasswordBoxComponent('.$this->name.")\r\n";
	}
}