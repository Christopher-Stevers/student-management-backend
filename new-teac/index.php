<link rel="stylesheet" href="./styles.css">
<?php 
require '../functions.php';
require '../components/school-card.php'

?>
<h2>Add Teacher</h2>
<?php
if($_POST){
$sanitized=processPostObj($_POST);
$first_name=$sanitized['first'];
$last_name=$sanitized['last'];
$street_address=$sanitized['street'];
$city_address=$sanitized['city'];
$email=$sanitized['email'];
$phone=$sanitized['phone'];
//remember to reenable below;
addTeacherToDb($first_name, $last_name, $street_address, $city_address, $email, $phone);
}
?>
<?php
echo '
<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
<label for="first"> First Name </label>
  <input required type="text" name="first"></input>
  <label for="first"> Last Name </label>
  <input required type="text" name="last"></input>
  
<label for="street">Street Address</label>
  <input required type="text" name="street"></input>
<label for="city">City</label>
  <input required type="text" name="city"></input>
  <label for="first"> email </label>
  <input required type="text" name="email"></input>
  <label for="first"> Phone </label>
  <input required type="text" name="phone"></input>
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