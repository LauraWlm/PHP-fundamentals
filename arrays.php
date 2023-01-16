<?php
/*
$family = ['Emile', 'Jenny' , 'Brigitte', 'Giuliano', 'Mikael']; 

print_r($family);


$ingredients = ['<br>300 grams Spaghetti', '200 grams Pecorino Romano cheese', '300 grams Guanciale', '4 eggs 3 egg yolks + 1 entire egg', 'Black pepper'];
print_r($ingredients);

$movies =['All the Saw', 'All the Conjuring', '<br>all the Pirate of the Caribbean', 'Beetlejuice', 'and more' ];
print_r($movies[2]);
*/

/*$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
echo '<pre>';
print_r($countries);
echo '</pre>';
var_dump($countries);

echo $countries[2];

array_push($countries, 'England');
echo '<pre>';
print_r($countries);
echo '</pre>';


$person['function'] = 'Junior Web Developer';
// returns 'Junior Web Developer'
$person['function'] = 'Senior Web Developer';
// returns 'Senior Web Developer'
echo $person['function'];

 $mother = array (
        'age' => 58,
        'firstname' => 'Brigitte',
        'favorite season' => 'spring',
        'hobbies' => array('watch tv show', 'hiking', 'facebook'),
 );
$me = array (
    'age' => 29,
    'firstname' => 'Laura',
    'favorite season' => 'autumn',
    'like soccer' => false,
    'favourite_movies' => array('all the Pirate of the Caribbean', 'Beetlejuice', 'and more'),
    'hobbies' => array('watch live Twitch', 'play games on pc ', 'read books'),
    'mother' => $mother,
    );
 
    echo '<pre>';
    print_r(count($mother['hobbies']));
    echo '</pre>';

    echo '<pre>';
    print_r(count($me['hobbies']));
    echo '</pre>';

    
    echo '<pre>';
    print_r((count($me['hobbies']))+(count($me['hobbies'])));
    echo '</pre>';

    $me['hobbies'][]='taxidermy';
   
    echo '<pre>';
    print_r ($me['hobbies']);
    echo '</pre>';
    
    
    $me = array ('age' => 29,'firstname' => 'Laura','name' => 'wlm', );
    $replacement = array('name' => 'Durand');
    $result = array_replace($me, $replacement);
    print_r($result);
*/
$me = array (
    'age' => 29,
    'firstname' => 'Laura',
    'favorite season' => 'autumn',
    'favourite_movies' => array('all the Pirate of the Caribbean', 'Beetlejuice', 'and more'),
    'hobbies' => array('watch live Twitch', 'play games on pc ', 'read books'),
);
$soulmate = array (
    'age' => 'between 26 and 5',
    'favorite season' => 'wathever',
    'favourite_movies' => array('horror', 'action', 'drama', 'police'),
    'hobbies' => array('play games on pc ', 'read books', 'meditaion', 'hiking'),
);

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me['hobbies'] , $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'] , $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';


