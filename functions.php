<?php
echo '<link rel="stylesheet" href="../globals.css"> ';
function processPostObj($postObj){
   function sanitize($elem){
       $elem =trim($elem);
       $elem = stripslashes($elem);
       $elem =htmlspecialchars($elem);
       return $elem;
   }
   $newArray= array_map('sanitize', $postObj);
    return $newArray;
}
function addSchoolToDb($title, $street_address, $city_address, $email){
    $user = 'root';
    $pass = '';
    $db = 'testdb';
    $db_connection = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
    if ($db_connection->connect_error){
        die("Connection failed: ".$db_connection->connect_error);
    }
    $sqlStatement = $db_connection->prepare("INSERT INTO scho (title, street_address, city_address, email) VALUES (?,?,?,?)");
    $sqlStatement->bind_param('ssss', $title, $street_address, $city_address, $email);
    
   $sqlStatement->execute();
  
    $db_connection->close();

}
function addTeacherToDb($first_name, $last_name, $street_address, $city_address, $email, $phone){
    $user = 'root';
    $pass = '';
    $db = 'testdb';
    $db_connection = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
    if ($db_connection->connect_error){
        die("Connection failed: ".$db_connection->connect_error);
    }
    $sqlStatement = $db_connection->prepare("INSERT INTO teac (first_name, last_name, street_address, city_address, email, phone) VALUES (?,?,?,?,?,?)");
    $sqlStatement->bind_param('ssssss', $first_name, $last_name, $street_address, $city_address, $email, $phone);
    
   $sqlStatement->execute();
  
    $db_connection->close();

}
function addStudentToDb($first_name, $last_name, $street_address, $city_address, $email, $phone, $grade){
    $user = 'root';
    $pass = '';
    $db = 'testdb';
    $db_connection = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
    if ($db_connection->connect_error){
        die("Connection failed: ".$db_connection->connect_error);
    }
    $sqlStatement = $db_connection->prepare("INSERT INTO stud (first_name, last_name, street_address, city_address, email, phone, dob, grade) VALUES (?,?,?,?,?,?,?,?)");
    $sqlStatement->bind_param('sssssssi', $first_name, $last_name, $street_address, $city_address, $email, $phone, $grade);
    
   $sqlStatement->execute();
  
    $db_connection->close();


}
function GetAllStudents(){
    $user = 'root';
    $pass = '';
    $db = 'testdb';
    $db_connection = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
    if ($db_connection->connect_error){
        die("Connection failed: ".$db_connection->connect_error);
    }
    $studentsStatement="SELECT * FROM scho";
    $result=$db_connection->query($studentsStatement);
    $output= array();
    if ($result->num_rows > 0) {
        // output data of each row
       
        while( $row=$result->fetch_assoc()) {
            
          $output[]= $row;
        }
      } else {
        echo "0 results";
      }

    
    $db_connection->close();
    return $output;
}
function listize($elem){
    return '<li>' . $elem . '</li>';
}
?>