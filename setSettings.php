<?php

session_start();

$fName = $_POST['fname'];
$mName = $_POST['mname'];
$lName = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phoneNumber = $_POST['phoneNumber'];
$altPhoneNumber = $_POST['altPhoneNumber'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$poBox = $_POST['poBox'];
$profilePicture = $_FILES['profilePicture'];

$oldPassword = md5($_POST['oldPassword']);
$newPassword = md5($_POST['newPassword']);
$confirmPassword = md5($_POST['confirmPassword']);

$userId = $_SESSION['userId'];



//Processing Photo

$randomFolderName = uniqid();
mkdir("./uploads/users/$userId/profilePicture/$randomFolderName", 0777, true);
$dir = "./uploads/users/$userId/profilePicture/$randomFolderName";

//move extraImagesimages from tmp to $dir

$tempName = $_FILES['profilePicture']['tmp_name'];
$name = basename($_FILES["profilePicture"]["name"]);
move_uploaded_file($tempName, "$dir/.$name");

$profilePicture = "$dir/.$name";

//Database connection

$conn = new mysqli('localhost', 'root', '', 'bartrdb');


if($conn->connect_error){

    die('Connection Failed : ' .$conn ->connect_error);


}else{

    //Upload

    $sql = ("UPDATE user 
    SET fname= '$fName', mname = '$mName', lname='$lName', email='$email', dateOfBirth='$dob', 
    gender='$gender', phone='$phoneNumber', altPhone='$altPhoneNumber', country='$country', 
    city='$city', street='$street', poBox='$poBox', 
    profilePicture='$profilePicture' where userId = '$userId'");

    if ($conn->query($sql) === TRUE) {
         echo "Record updated successfully";
        } else {
         echo "Error updating record: " . $conn->error;
        }

    header('location: http://localhost/bartr/Bartr/my-app/src/home-page.php');
    
    $conn->close();
}




