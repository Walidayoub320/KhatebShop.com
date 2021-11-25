<?php
$userName = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phoneNumber'];

//------database-----//
$conn = new mysqli('localhost', 'root','', 'users');
if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO register(userName, email, password, phoneNumber)
    values( ?, ?, ?, ?)");
    $stmt->bind_param("ssss",$userName, $email, $password, $phoneNumber);
    $stmt->execute();
    echo "registration successfulyy...";
    $stmt->close();
    $conn->close();
}



?>