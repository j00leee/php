//reviewing php through codecademy 

//codecademy php example
<h1>My First PHP Site</h1>
<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";?>
<?php echo "<ul><li>You can use any HTML tags,</li><li>like this list.</li></ul>";?>
<footer>
	<p>And this code is back in plain HTML</p>
</footer>

//printing
<?php echo "I love PHP!";

//single line comment 
/* multi
line comment
*/

<?php 
	echo "Hello, World!"; //prints Hello, World!

//escape characters
<?php
	echo "1. Teach PHP" ;
  	echo "\n2. Code in PHP";
  	echo "\n3. Learn to have \"fun\".";

  //string concatenation
<?php
	echo "Code" . "cademy"; 
  	echo "\nMy name is:" . " " . "Julie";
  	echo "\n" . "tur" . "duck" . "en";

 //variables
<?php
	$favoriteMovie = "Good Will Hunting";
	$biography = "\n I am a recent college graduate seeking a web development job.";
	$favorite_food = "\n" . "tur" . "duck" . "en";

//using variables
<?php
	$name = "Julie";
	$language = "php";
	echo "I am " . $name . ".";
	echo "\n" . $language;

//variable parsing 
<?php 
	$noun = "bubble tea";
	$adjective = "good";
	$verb = "exist";

	echo "The world's most beloved $noun was very $adjective and loved to $verb every single day."
//fix the code below
//echo "\nI have always been obsessed with $nouns. I'm $adjectiveish. I'm always &verbing"
echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing."

//variable reassignment 
<?php
	$movie = "toy story";
	$old_favorite = $movie;

	echo "I'm a fickle person, my favorite movie used to be $movie.";
	$movie = "21";
	echo "\nBut now my favorite is $movie.";
	echo "\nI would watch $old_favorite again someday though.";

