<?php

class Circle extends Shape{
	
	private $radius;

	protected function setProperties($data){
		$this->radius = $data['radius'];
	}

	public function getArea(){
		return pi()*pow($this->radius,2);
	}

	public function radius(){
		return $this->radius;
	}

}
