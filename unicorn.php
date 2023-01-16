<?php

// exercice 2

if (isset($_GET['gender'])){

$gender = $_GET["gender"];
echo $gif = ($gender == "human") ? '<iframe src="https://giphy.com/embed/TlK63EDHwMzfQ8O76qQ" width="480" height="332" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' : (($gender == "cat") ? '<iframe src="https://giphy.com/embed/BRwgvFM9BfP8c" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' : '<iframe src="https://giphy.com/embed/9V3I9bpMVSIzVpn88a" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>');


}
?>
<form method="get" action=""> 

<label for="gender">Are you a human, a cat or a unicorn ?</label></br>

<label for="human">Human</label>
<input type="checkbox" id="Human" name="gender" value="human" unchecked>

<label for="cat">Cat</label>
<input type="checkbox" id="cat" name="gender" value="cat" unchecked>

<label for="unicorn">Unicorn</label>
<input type="checkbox" id="unicorn" name="gender" value="unicorn" unchecked></br>
<input type="submit" name="submit" value="submit"></br>


</form>