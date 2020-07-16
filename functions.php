//reviewing php functions

//defining functions
<?php 
	function praisePHP(){
		echo "PHP is awesome.";
	}

//invoking functions
<?php
	function increaseEgo(){
		echo "you're amazing";
	}
	increaseEgo();

//return statement
<?php
	function printStringReturnNumber(){
		echo "hello";
		return 1;
	}
	$my_num = printStringReturnNumber();
	echo $my_num;

//parameters
<?php
	function increaseEnthusiasm($word){
		return $word . "!";
	}
	echo increaseEnthusiasm("hello");

	function repeatThreeTimes($repeat){
		return $repeat . $repeat . $repeat;
	}
	echo repeatThreeTimes("world");
	echo increaseEnthusiasm(repeatThreeTimes());

//multiple parameters
<?php
	function calculateArea($h, $w){
		return $h * $w;
	}
	echo calculateArea(4, 3);

	function calculateVolume($h, $w, $d){
		return $h * $w * $d;
	}
	echo calculateVolume(2, 5, 3);

//default parameters
<?php 
	function calculateTip($total_cost, $tip = 20){
		$new_total = ($total_cost * $tip) / 100 + $total_cost;
		return $new_total;
	}
	echo calculateTip(100);
	echo calculateTip(100, 50);

//pass by reference 
<?php 
	$string_one = "you have teeth";
	$string_two = "toads are nice";
	$string_three = "brown is my favorite color";

	function convertToQuestion(&$string){
		$string = "Do you think " . $string . "?\n";
		echo $string;
	}
	convertToQuestion($string_one);
	convertToQuestion($string_two);
	convertToQuestion($string_three);

	echo $string_one;
	echo $string_two;
	echo $string_three;