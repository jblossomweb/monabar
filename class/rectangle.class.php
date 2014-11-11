<?php

class Rectangle extends Shape{

	private $width;
	private $height;

	protected function setProperties($data){
		$this->width = $data['width'];
		$this->height = $data['height'];
	}
	
	public function getArea(){
		return $this->width*$this->height;
	}

	public function width(){
		return $this->width;
	}

	public function height(){
		return $this->height;
	}

}
