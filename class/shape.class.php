<?php 

abstract class Shape {
	
	public $ID;
	
	public function __construct($data){
		$this->ID = $data['ID'];
		$this->setProperties($data);
	}
	abstract public function getArea();
	abstract protected function setProperties($data);

}