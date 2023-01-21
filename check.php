<?Php

session_start();


$userId = $_SESSION['userId'];
$conn = new mysqli('localhost', 'root', '', 'bartrdb');

// echo $userId;
// echo "<br>";

if(!isset($_SESSION['userId'])){


  // echo "test";

  header('location: http://localhost/bartr/Bartr/my-app/src/login-page.php');
   exit;
}

if ($conn->connect_error) {

  die('Connection Failed : ' . $conn->connect_error);
} else {


  if (!isset($profilePicture)) {

      $profilePicture = "./images/profile-icon.png";
  }
}

$navProfilePicture = getProfilePicture($conn, $userId);

function getProfilePicture($conn, $userId)
{

    $sql = "SELECT profilePicture FROM user WHERE userId = '$userId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $profilePicture = $row['profilePicture'];
            $_SESSION['profilePicture'] = $profilePicture;
        }
    }

    return $profilePicture;
}
?>
