<?php

if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['teacher']) && isset($_GET['reason'])){

    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $teacher = $_GET['teacher'];
    $reason = $_GET['reason'];
    $today= date('d-m-Y');


    if  ($gender == 'boy') {
        $excuse_letter = 'He';
                } 
        else {
            $excuse_letter ='She';
        }}

echo $message = "Sir, Mrs., <br> 
Our child, student's $name, will be absent and therefore will not attend classes of $teacher on $today.<br>
$excuse_letter will be absent and will not attend school because of $reason.<br>
If you would like more information about the reason for this school absence you can contact me on my cell phone.<br>
Sincerely<br>";
?>

<form method="get" action=""> 

<label for="firstname">Name of the child</label>
<input type="text" id="firstname" name="name" value="Write the name here"></br>

<label for="gender">Select the gender:</label>
<label for="boy">Boy</label>
<input type="radio" id="boy" name="gender" value="boy" unchecked>
<label for="girl">Girl</label>
<input type="radio" id="girl" name="gender" value="girl" unchecked></br>

<label for="teacher">Name of the teacher</label>
<input type="text" id="teacher" name="teacher" value="Write teacher's name here" ></br>

<input type="radio" id="reason" name="reason" value="Illness" unchecked>
<label for="reason">i. Illness</label></br>

<input type="radio" id="reason" name="reason" value="Death of the pet (or a family member)" unchecked>
<label for="reason">ii. Death of the pet (or a family member)</label></br>

<input type="radio" id="reason" name="reason" value="Significant extra-curricular activity" unchecked>
<label for="reason">iii. Significant extra-curricular activity</label></br>

<input type="radio" id="reason" name="reason" value="Any other excuse of your choice" unchecked>
<label for="reason">iv. Any other excuse of your choice</label></br>

<input type="submit" name="submit" value="Select">
</form>
