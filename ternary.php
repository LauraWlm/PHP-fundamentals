<?php

// exercice 1
if (isset($_GET['gender'])){

    $gender = $_GET['gender'];
    echo $hello =  ($gender == 'female') ?  "Welcome Miss" : "Welcome Sir";

}
?>

<form method="get" action=""> 


<input type="submit" name="submit" value="Select"></br>
<label for="gender">Select your gender:</label></br>

<label for="Female">F</label>
<input type="radio" id="Female" name="gender" value="female" checked>

<label for="Male">M</label>
<input type="radio" id="Male" name="gender" value="male" checked>

</form>


