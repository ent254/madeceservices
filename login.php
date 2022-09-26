<?php

$email = $_POST['email'];
$password = $_POST['password'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "registration";
$con = new mysqli($host,$user,$pass,$db);

if (!$con) {
    echo "Ops there is a problem connecting to the data base";
}
else{
    $stmt = $con->prepare("select * from reg where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result =  $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password) {
            echo "login successfully";
            header("location:index2.html");
            return true;  
            }
        else{
        echo "Not registered or wrong passsword. Please recheck your password or click signup for a new account";
        
            }
                                       }
    }


$qry = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password')";
$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "ops there is a problem while inserting data";
}
?>