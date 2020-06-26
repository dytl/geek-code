<?php
/**
 * WinForm容器
 */
include_once('./Container.php');
class WinForm extends Container
{
	public function __construct($name)
	{
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print WinForm('.$this->name.")\r\n";
		parent::printFun();
	}

}