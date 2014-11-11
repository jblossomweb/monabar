<?php

// validate CLI arguments
$file = isset($argv[1]) ? $argv[1] : 'data.csv'; //default
if(!file_exists($file)){
	die("'$file' does not exist. Terminating.\n\n");
}
$ID = isset($argv[2]) ? $argv[2] : null; //default
if(!$ID){
	die("No shape ID supplied. Terminating.\n\n");
}

// require classes
require_once "class/shape.class.php";
require_once "class/circle.class.php";
require_once "class/rectangle.class.php";
require_once "class/importer.class.php";

/* Read file and a create an object array of shapes */

$importer = new Importer();
$shapes = $importer->import($file);
echo count($shapes)." shapes found.\n";

/* Get the array index of the shape with ID that was passed in and write to screen */

$shape = findShapeById($ID,$shapes);
if(!$shape){
	die("Shape ID $ID does not exist. Terminating.\n\n");
}
$index = findShapeIndex($shape, $shapes);

listShapes($shapes);
echo "$ID is shape number $index.\n";

/* Sort the shapes by area and write the results to the screen */
echo "Sorting by Area... ";
sortByArea($shapes);

/* Get the new array index of the shape with ID that was passed in and write to screen */
$index = findShapeIndex($shape, $shapes);

listShapes($shapes);
echo "$ID is now shape number $index.\n";

/* Write any helper methods necessary to support the program */


/**
* Returns the array index of the instance in the list to the caller.
* This method takes in the shape instance to compare it with the
* shapes in the $shapes array and to find the index of that shape
* within the array.
*
* @param Shape $instance Individual Shape Instance
* @param Shape[] $shapes All Shapes
* @return int Shapes array index
*/
function findShapeIndex($instance, $shapes) {
	foreach ($shapes as $i=>$shape){
		if($shape === $instance){
			return $i;
		}
	}
	return false; //not found
}


/**
* Return the shape object of supplied ID
*
* @param int $id (needle)
* @param array $shapes (haystack)
* @return Shape $instance (object)
*/
function findShapeById($id,$shapes) {
	foreach ($shapes as $shape){
		if($shape->ID == $id){
			return $shape;
		}
	}
	return false; //not found
}


/**
* Sorts the list of shapes by area
*
* @param Shape[] $shapes Collection of shapes
*/
function sortByArea(&$shapes) {
	usort($shapes,function($a,$b){
		if($a->getArea() == $b->getArea()){
			return 0;
		}
		return $a->getArea() < $b->getArea() ? -1 : 1;
	});
	echo "\n";
}

/**
* Displays list of shapes in natural order
*
* @param Shape[] $shapes Collection of shapes
*/
function listShapes($shapes){
	echo "\n";
	foreach ($shapes as $shape){
		$type = get_class($shape);
		switch($type){
			case 'Circle':
				echo "({$shape->ID}) $type with radius of {$shape->radius()}\n";
			break;
			case 'Rectangle':
			default:
				echo "[{$shape->ID}] $type with dimensions of {$shape->width()}x{$shape->height()}\n";
		}
	}
	echo "\n";
}
