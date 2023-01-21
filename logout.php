<?php

session_start();

echo $_SESSION['userId'];

session_unset();
session_destroy();

header('location: http://localhost/bartr/Bartr/my-app/src/login-page.php');



?>