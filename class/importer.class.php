<?php

class Importer {

	private $data;

	public function import($path){
		$this->readData($path);
		return $this->buildShapes();
	}

	private function readData($path){
		$file = file($path);
		$legend = explode(",",array_shift($file));
		foreach($file as $i=>$line){
			$row = explode(",",$line);
			foreach($row as $k=>$v){
				$key = array_key_exists($k,$legend) ? trim($legend[$k]) : "height";
				$val = ($key == "type") ? trim($v) : floatval($v);
				$record[$key] = $val;
			}
			switch($record["type"]){
				case "circle":
					$record["radius"] = $record["radius or width/height"];
					unset($record["radius or width/height"]);
					unset($record["height"]);
				break;
				case "rectangle":
				default:
					$record["width"] = $record["radius or width/height"];
					unset($record["radius or width/height"]);
			}
			$array[$i] = $record;
			unset($record);
		}
		$this->data = $array;
	}

	private function buildShapes(){
		foreach ($this->data as $shape){
			$class = ucfirst($shape["type"]);
			$shapes[] = new $class($shape);
		}
		return $shapes;
	}
}