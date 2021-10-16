

<link rel="stylesheet" href="../components/school_card.css">
<?php function schoolCard($oneStudData){
    $name= $oneStudData["title"];
    $street= $oneStudData["street_address"];
    $city= $oneStudData["city_address"];
    $email= $oneStudData["email"];
    
   echo "<li class='school-card_container'>
    <div>".$name."</div>
   <div>".$street."</div>
   <div>".$city."</div>
   <div>".$email."</div>
    
    </li>";

}
?>