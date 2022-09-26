<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "registration";

$con = new mysqli($host,$user,$pass,$db);
if (!$con) {
    echo "Ops there is a problem connecting to the data base";
}
$firstname = $_POST['finame'];
$secondname = $_POST['sename'];
$email = $_POST['email'];
$location = $_POST['area'];
$date = $_POST['date'];
$job = $_POST['job'];


$qry = "INSERT INTO `buy`(`first name`, `second name`, `email`, `location`, `date`, `job`) VALUES ('$firstname', '$secondname', '$email', '$location', '$date', '$job')";
$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "ops there is a problem while inserting data";
}


else{
    echo "Request sent successfully Please go back to complete the payment process";
    
} 



?>