<?php

//9. "School sucks!" Exercise with switch


if (isset($_GET['grade']) && ctype_digit($_GET['grade'])){
    $grade = $_GET['grade'];

    switch($grade){
        case $grade < 4:
            echo "This work is really bad. What a dumb kid! ";
            break;
        case $grade >=5 && $grade <= 9:
            echo  "This is not sufficient. More studying is required.";
            break;
        case $grade == 10:
            echo "barely enough!";
            break;
        case $grade >= 11 && $grade <= 14:
            echo "Not bad!";
            break;
        case $grade>= 15 && $grade <= 18:
            echo "Bravo, bravissimo!";
            break;
            case $grade >= 19 && $grade <= 20:
                echo "Too good to be true : confront the cheater!";
                break;
        
    
    }
}
?>
        
<form method="get" action="">

<label for="grade">Select: </label>
<input type="number" id="grade" name="grade" value="" />
<input type="submit" name="submit" value="grading">
</form>

