<?php
/**
 * 组件抽象类  construct()
 */
abstract class Componest{
	protected $name = '';

	public function __construct($name){
		$this->name = $name;
	}

	abstract function printFun();
}