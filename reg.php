<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "registration";

$con = new mysqli($host,$user,$pass,$db);
if (!$con) {
    echo "Ops there is a problem connecting to the data base";
}
$email = $_POST['email'];
$password = $_POST['password'];


$qry = "INSERT INTO `reg` (`email`, `password`) VALUES ('$email', '$password')";
$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "ops there is a problem while inserting data";
}


else{
    echo "Registration has been done successfully. Please go back to the page to login";
    
}



?>