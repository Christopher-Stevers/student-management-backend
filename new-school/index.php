<link rel="stylesheet" href="./styles.css">
<?php 
require '../functions.php';
require '../components/school-card.php'

?>
<h2>Add School</h2>
<?php
if($_POST){
$sanitized=processPostObj($_POST);
$street_address=$sanitized['street'];
$name=$sanitized['title'];
$city_address=$sanitized['city'];
$email=$sanitized['email'];
//remember to reenable below;
addSchoolToDb($name, $street_address, $city_address, $email);
}
?>
<?php
echo '
<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
<label for="title">title</label>
  <input required type="text" name="title"></input>
  
<label for="street">Street Address</label><input required type="text" name="street"></input>
<label for="city">City</label>
  <input required type="text" name="city"></input>
  <input required type="text" name="email"></input>
  <input type="submit"></input>
</form>
'
?>
<h2>Schools

<ul class="new-school_card-grid">

<?php 
$studData=GetAllStudents();
array_map('schoolCard', $studData); ?>
</ul>
</h2>