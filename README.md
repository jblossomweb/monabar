PHP Sample Problem
=======

Hi John, 

Thank you for applying to our Lead Developer position on Linkedin. 

Before we bring you in for an interview we ask all candidates to complete the following PHP exercise, it should not take you very long but make sure to reach out should you have any questions. 


Directions
=======
Please complete the following problem and return this assignment within 24 hours. Your code should be clean, legible, functional, and an example of what you would consider production quality. Feel free to add any helper methods as necessary.Use OOP
Once complete, please return program and all .php and .csv files packaged in a ZIP file.


Use the following UML diagram:

<img src="https://raw.githubusercontent.com/jblossomweb/monabar/master/uml.png" />


And complete the following functions (function signatures given below):

```php
findShapeIndex ($instance, $shapes)
sortByArea($shapes)
```

The application must be able to be run using the command line as follows:

```sh
php main.php data.csv 5
```

Where data.csv is the data file. And 5 is the ID of the shape to use inside the program.
Create a file called data.csv with the following input:

```
ID, type, radius or width/height
2,circle,5,
33,rectangle,23,90
5,rectangle,32,44
23,circle,8,
29,rectangle,22,34
66,circle,2,
35,rectangle,54,63
87,circle,111,
86,rectangle,44,98
90,circle,234,
867,circle,66,
5309,rectangle,22,12
16,circle,9,
17,rectangle,88,23
56,rectangle,78,46
52,circle,18,
421,rectangle,6,37
99,circle,17,
90210,circle,45,
42,rectangle,100,54
```

Here is the program skeleton for main.php:

```php

/* Read file and a create an object array of shapes */

/* Get the array index of the shape with ID that was passed in and write to screen */

/* Sort the shapes by area and write the results to the screen */

/* Get the new array index of the shape with ID that was passed in and write to screen */

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

// implementation
}

/**
* Sorts the list of shapes by area
*
* @param Shape[] $shapes Collection of shapes
*/
function sortByArea(&$shapes) {

// implementation
}
```

Looking forward to receiving your code and talking very soon. 
