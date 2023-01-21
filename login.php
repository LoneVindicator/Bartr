<?php

session_start();

$username = $_POST['username'];
$email = $_POST['username'];
$password = $_POST['password'];
$login_user = "abc";

$db = new mysqli('localhost', 'root', '', 'bartrdb');

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, md5($_POST['password']));

//Test to see if email is valid or not

if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $email)) {
  $email = $_POST['username'];
} else {

  $email = null;
}


//Login with email/password

if (isset($email)) {

  checkEmailPasswordPair($email, $password, $db);
} else {

  checkUsernamePasswordPair($username, $password, $db);
}










function checkUsernamePasswordPair($username, $password, $db)
{

  $query = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {

    $query = "SELECT userId FROM user WHERE username='$username'";

    $results = mysqli_query($db, $query);
    $userId = mysqli_fetch_array($results);
    $_SESSION['userId'] = $userId[0];
    echo $_SESSION["userId"];

    header('location: http://localhost/bartr/Bartr/my-app/src/home-page.php');
  } else {

    echo "Wrong username/password combination";
    die();
    echo $_SESSION['userId'];
  }
}

function checkEmailPasswordPair($email, $password, $db)
{

  $query = "SELECT * FROM user WHERE email='$email' AND pass='$password'";
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {

    $query = "SELECT userId FROM user WHERE email='$email'";

    $results = mysqli_query($db, $query);
    $userId = mysqli_fetch_array($results);
    $_SESSION['userId'] = $userId[0];
    echo $_SESSION["userId"];

    header('location: http://localhost/bartr/Bartr/my-app/src/home-page.php');
  } else {

    echo "Wrong email/password combination";
    die();
    echo $_SESSION['userId'];
  }
}
