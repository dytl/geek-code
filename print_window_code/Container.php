<?php
/**
 * 容器类；
 */
include_once('./Componest.php');
abstract class Container extends Componest
{
	private $componest_list = [];
	public function __construct($name)
	{
		parent::__construct($name);
	}

	public function addComponest(Componest $componest){
		$this->componest_list[] = $componest;
	}

	public function printFun(){
		foreach ($this->componest_list as $componest) {
			$componest->printFun();
		}
	}
}