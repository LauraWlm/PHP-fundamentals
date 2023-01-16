<?php
/**
 * Series of exercises on PHP conditional structures.
 */

/*
------------------------------------------------------------------------
// 1.1 Clean your room Exercise 

$room_is_filthy = 22;

if( $room_is_filthy == 21 ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy > 21;
} else {
	echo "<br>Nothing to do, room is OK.";
}

------------------------------------------------------------------------

// 1.2 Clean your room Exercise, improved

$possible_states = [
    0 => 'health hazard', 
    1 => 'filthy', 
    2 =>'dirty', 
    3 => 'clean', 
    4 =>'immaculate'];

$room_filthiness = $possible_states[0];


if($room_filthiness === 'dirty' ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness === 'health hazard' ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

------------------------------------------------------------------------
// 2. "Different greetings according to time" Exercise

$now = date('H:i'); 


switch ($now){
    case $now > 5 &&  $now <= 9:
        echo "Good Morning!";
        break;
    case $now > 9 && $now <= 12:
        echo "Good afternoon!";
        break;
    case $now > 12 && $now <= 16:
        echo "Good afternoon!";
        break;
    case $now > 16 && $now <= 21:
        echo "Good evening!";
        break;
    case $now > 21 && $now <= 5:
        echo "Good night!";
        break;
    default:
        echo "Holaaa";

}
/*
if( $now > 5 &&  $now <= 9) {
    echo "Good Morning!";
  }
  else if($now > 9 && $now <= 12) {
    echo "Good day!";
  }
  else if($now > 12 && $now <= 16) {
    echo "Good afternoon!";
  }
  else if($now > 16 && $now <= 21) {
    echo "Good evening!";
  }
  else if ($now > 21 && $now <= 5) {
    echo "Good night!";
}

------------------------------------------------------------------------


// 3. "Different greetings according to age" Exercise


if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
        $age = $_GET['age'];

        if($age > 0 && $age <= 12) {
            echo 'Hello kiddo!';
        } else if($age > 12 && $age < 18) {
            echo 'Hello Teenager !';
        } else if($age >= 18 && $age <= 115) {
            echo 'Hello Adult !';
        } else if($age > 115) {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        }
    }
?>

<form method="get" action="">
    <label for="age">Please type your age: </label>
    <input type="text" id="age" name="age" value="" />
    <input type="submit" name="submit" value="Greet me now">
</form>



// 4. Affichez un message d'accueil différent selon l'âge et le sexe de l'utilisateur.


if (isset($_GET['age']) && ctype_digit($_GET['age']) && isset($_GET['gender'])){
        $age = $_GET['age'];
        $gender = $_GET['gender'];

        if($age > 0 && $age <= 12 )  {
            echo ($gender === 'woman') ? 'Hello Miss kiddo!' : 'Hello kiddo!';
        } else if($age > 12 && $age < 18) {
            echo ($gender === 'woman') ? 'Hello Miss Teen!' : 'Hello Teenager!';
        } else if($age >= 18 && $age <= 115) {
            echo ($gender === 'woman') ? 'Hello Miss!' : 'Hello Adult!';
        } else if($age > 115) {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        }
    }
?>
<form method="get" action=""> 

    <label for="age">Please type your age: </label></br>
    <input type="text" id="age" name="age" value="" />
    <input type="submit" name="submit" value="Greet me now"></br>

    <label for="gender">Select your gender</label></br>
    <label for="age">Woman </label>
    <input type="radio" id="gender" name="gender" value="woman" checked>
    <label for="age">Man </label>
    <input type="radio" id="gender" name="gender" value="man" checked>
   
   
</form>
//5.Display a different greeting according to the user's age, gender and mothertongue.
if (isset($_GET['age']) && ctype_digit($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $language = $_GET['language'];

    if ($age < 12){
        if ($gender == "man"){
            if ($language == "english"){
                    echo "Hello boy !";
            } else {
                    echo "Aloha boy!";
            }
        } else {
                if ($language == "english"){
                    echo "Hello girl !";
                } else {
                    echo "Aloha girl";
            }
        }
    } elseif ($age > 12 && $age < 18){
        if ($gender == "man"){
            if ($language == "english"){
                echo "Hello boy !";
            }else {
                echo "Aloha boy!";
            }
        }else{
            if ($language == "english"){
                echo "Hello girl !";
            }else{
                echo "Aloha girl";
            }
        }
    } elseif ($age > 18 && $age < 115){
        if ($gender == "man"){
            if ($language == "english"){
            echo "Hello boy !";
        } else {
            echo "Aloha boy!";
        }
        }else{
            if ($language == "english"){
                echo "Hello girl !";
            }else{
                echo "Aloha girl";
            }
        }
    } elseif ($age > 115){
        echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
    }
    }
    ?>
  <form method="get" action=""> 
        <label for="age">Please type your age: </label></br>
        <input type="text" id="age" name="age" value="">
        <input type="submit" name="submit" value="Greet me now"></br>
    
        <label for="gender">Select your gender</label></br>
            <label for="gender">Homme</label>
        <input type="radio" id="Homme" name="gender" value="man"checked>
            <label for="gender">Femme</label>
        <input type="radio" id="Femme" name="gender" value="woman"checked></br>
        <label for="age">Do you speak English ?  </label></br>
        <label for="yes">yes</label>
        <input type="radio" id="yes" name="language" value="yes"checked>
            <label for="no">no</label>
        <input type="radio" id="no" name="language" value="no"checked> 
    </form>

// 6. The Girl Soccer team
if (isset($_GET['age']) && ctype_digit($_GET['age']) &&isset($_GET['gender']) &&isset($_GET['name'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];
     $name = $_GET['name'];

    if ($age >21 && $age <=40 && $gender == "female" && $name != " ") {
    echo "welcome to the team ! ".$name." ";
 } else {
    echo "Sorry you don't fit the criteria ".$name." ";
 }
}
?>
<form action="" method="get">

    <label for="age">age:</label>
    <input type="text" name="age" id="age">
    <input type="submit" name = "submit" value="greet me now"></br>
    
    <label for="gender">Select your gender:</label></br>
    <label for="gender">Homme</label>
    <input type="radio" id="Homme" name="gender" value="man"checked>
    <label for="gender">Femme</label>
    <input type="radio" id="Femme" name="gender" value="woman"checked></br>
    <label for="name">Please write your name:</label>
    <input type="text" name="name" id="name">
</form>


// 7. Achieve the same, without the ELSE.

$message = 'Sorry you don\'t fit the criteria';

if (isset($_GET['age']) && isset($_GET['gender'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($gender =='female' && $age >= 21 and $age <= 40) {
        echo  'welcome to the team !';
    }
}

?>
<p> <?php echo $message; ?> </p>
<form method="get" action=""> 

<label for="age">Please type your age: </label></br>
<input type="number" id="age" name="age" />
<input type="submit" name="submit" value="Greet me now"></br>

<label for="gender">Select your gender:</label></br>

<label for="gender">Woman </label>
<input type="radio" id="woman" name="gender" value="female" checked>

<label for="gender">Man</label>
<input type="radio" id="man" name="gender" value="male" checked>


</form>


//8. "School sucks!" Exercise


if (isset($_GET['grade']) && ctype_digit($_GET['grade'])){
    $grade = $_GET['grade'];


    if ($grade < 4)  {
        echo "This work is really bad. What a dumb kid! ";
    } else if($grade >=5 && $grade <= 9) {
        echo  "This is not sufficient. More studying is required.";
    } else if($grade == 10) {
        echo "barely enough!";
    } else if($grade >= 11 && $grade <= 14) {
        echo "Not bad!";
    } else if ($grade>= 15 && $grade <= 18) {
        echo "Bravo, bravissimo!";
    }
    else if ($grade >= 19 && $grade <= 20){
        echo "Too good to be true : confront the cheater!";
    }
}
?>
        
<form method="get" action="">

<label for="grade">Select: </label>
<input type="number" id="grade" name="grade" value="" />
<input type="submit" name="submit" value="grading">
</form>
*/

