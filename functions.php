<?php

/*
//exemple
$name = "Maurice";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Alice";
echo "<p> Hello $name!</p>";
echo '<hr>';
$name = "Jesus";
echo "<p> Hello $name!</p>";
echo '<hr>';
$name = "Judas";
echo "<p> Hello $name!</p>";
echo '<hr>';

*/
/*

//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");

*/

/*

function make_orange_juice($oranges){
	// do things to $input, for example : capitalize it
	$juice = squash($oranges);
	//then return it to get it out of the factory
	return $juice;
}

//function est un mot clé qui indique à PHP que vous souhaitez déclarer une fonction.
//make_orange_juice est le nom de la fonction. Choisissez un nom qui indique clairement ce qu'il fait.
//$oranges s'appelle un argument . Cela peut être ce que vous voulez.
//return arrête le traitement de la fonction et rend disponible le résultat en dehors de l'usine. (ici : le contenu de $juice).

*/

$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;