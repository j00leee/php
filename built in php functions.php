//built in php functions
<?php
	namespace Codecademy;
	$first = "Welcome to the magical world of built-in functions.";
	$second = 82137012983;
	echo gettype($first);
	echo gettype($second);
	var_dump($first);
	var_dump($second);

//string functions
/*
echo strrev("string here"); : reverses the given string
echo strtolower("string here"); 
echo str_repeat("string here", # of times to repeat);
echo substr_count($variable, "string to search and count for");	
*/

//number functions 
abs
round

//random numbers
<?php 
	namespace Codecademy;
	echo getrandmax();
	echo rand();
	echo rand(1, 50); //1 & 50 inclusive.

//documentation
<?php
	namespace Codecademy; 
	$a = 29; 
	$b = "You did it!";
	$c = STR_PAD_BOTH;
	$d = "*~*";
	echo str_pad($b, $a, $d, $c);