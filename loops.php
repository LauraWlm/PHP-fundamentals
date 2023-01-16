<?php
/*
$names= array('John ', 'jeanne ', 'Joan ', 'émile ');
foreach ($names as $name){
	echo ucfirst($name);
}
*/
/*
$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key => $value){
	$names[$key] = ucfirst($value);
}
echo '<pre>';
var_dump($names);
echo '</pre>';


// Exercice 1

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
	echo '<pre>';
        print_r($pronoun);
        print_r(' code');
        if ($pronoun == 'He/She'){ 
            print_r('s');
        };
        echo '</pre>';
    }
   

$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}
 
$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}

// Exercice 


$nb = 1;

while ($nb <= 120)
{
    echo  '<br />'. $nb ;
    $nb ++; 

}

for ($nb = 1; $nb <= 120; $nb ++)
{
    echo '<br />'. $nb  ;
}
*/