//arrays

//creating arrays 
<?php
	$firstarray = array("hello", 7, "hola", 20, "hallo");
	echo count($firstarray);

//short syntax arrays 
<?php
	namespace Codecademy;
	$with_function = array("PHP", "popcorn", 555.55);
	$with_short = ["PHP", "popcorn", 555.55];

//printing arrays
echo implode("!", $message); //this puts an exclamation point at the end of each array element
print_r($favorite_nums); //this would print out the word array and show what position 0, 1, 2, etc are

//accessing an element
<?php 
	namespace Codecademy; 
	$round_one = ["X", "X", "first winner"];
	$round_two = ["second winner", "X", "X", "X"];
	$round_three = ["X", "X", "X", "X", "third winner"];
	$winners = [$round_one[2], $round_two[0], $round_three[4]];
	print_r($winners);

