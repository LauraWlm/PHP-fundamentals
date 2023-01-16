<?php $name ='Laura'?>
<?php $age ='29'?>
<?php $eyes ='Brown'?>
<?php $name_family = array(
  0 => 'Brigitte', 
  1 => 'Giuliano', 
  2 => 'Mikael', 
  3 => 'Tara', 
  4 => 'Hinamory', 
  5 => 'Evann'); ?>



<p>Hi! my name is <?php echo $name; ?> </p>
<p>I am <?php echo $age; ?> years old </p>
<p>My eyes are <?php echo $eyes; ?> </p>
<p>The first person in my family is <?php echo $name_family[0] ?> </p>

 

<p>Are you hungry?</p>
<?php 
echo '<input type="checkbox" id="Yes" method="get" name="confirm" value="Yes">
<label for="Yes">Yes</label>
<input type="checkbox" id="No" method="get" name="confirm" value="No">
<label for="No">No</label>' 
?>

<?php if (isset($_GET['value'])){ ?>
  <?php echo $_GET['value']; ?>
  <?php } ?>







<?php 

echo  '<form  method="get">
    Are you hungry?
    <input type="checkbox" name="hungry" value="Yes" />
    <input type="submit" name="formSubmit" value="Submit" />
</form>' 
?>
<?php

if(isset($_GET['hungry']) && 
   $_GET['hungry'] == 'Yes') 
{
    echo "I am hungry";
}
else
{
    echo "I am not hungry.";
}	 

?>