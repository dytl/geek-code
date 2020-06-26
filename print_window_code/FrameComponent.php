<?php
/**
 * frame容器
 */
include_once('./Container.php');
class FrameComponent extends Container
{
	public function __construct($name)
	{
		parent::__construct($name);
	}

	public function printFun(){
		echo 'print Frame('.$this->name.")\r\n";
		parent::printFun();
	}

}