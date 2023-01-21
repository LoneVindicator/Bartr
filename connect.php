<?php

session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirmPassword = md5($_POST['confirmPassword']);

if($password != $confirmPassword){

    echo "Passwords do not match";
    die();
}

//Database connection

$conn = new mysqli('localhost', 'root', '', 'bartrdb');


if($conn->connect_error){

    die('Connection Failed : ' .$conn ->connect_error);


}else{

    $stmt = $conn ->prepare("INSERT into user(username, email, pass)
    values (?, ?, ?)");

    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    echo "Registration is Successful...";

    isset($_SESSION['username']);
    header('location: http://localhost/bartr/Bartr/my-app/src/login-page.php');

    $stmt->close();
    $conn->close();
}


?>

