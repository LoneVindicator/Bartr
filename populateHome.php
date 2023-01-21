<?php

$userId = $_SESSION['userId'];

$conn = new mysqli('localhost', 'root', '', 'bartrdb');




if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);
} else {

    // $profilePicture = getProfilePicture($conn, $userId);


    if (!isset($profilePicture)) {

        $profilePicture = "./images/profile-icon.png";
    }
}

$randomProducts = populateCells($conn);
$recentProducts = loadLatestItems($conn);

// print_r($randomProducts);

//Map array contents to variables


for ($i = 0; $i < 12; $i++) {

    $productId[$i] = $randomProducts[0][$i];
    $productName[$i] = $randomProducts[1][$i];
    $productImg[$i] = $randomProducts[2][$i];

    $recentProductId[$i] = $recentProducts[0][$i];
    $recentProductName[$i] = $recentProducts[1][$i];
    $recentProductImg[$i] = $recentProducts[2][$i];

}


function populateCells($conn)

{

    $sql = "SELECT *FROM items ORDER BY RAND() LIMIT 12";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $productName[] = $row['productName'];
            $mainImage[] = $row['mainImage'];
            $productId[] = $row['productId'];
        }
    }

    return $randomProducts[] = [$productId, $productName, $mainImage];



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');

}

// function getProfilePicture($conn, $userId)
// {

//     $sql = "SELECT profilePicture FROM user WHERE userId = '$userId'";
//     $result = mysqli_query($conn, $sql);
//     $resultCheck = mysqli_num_rows($result);

//     if ($resultCheck > 0) {

//         while ($row = mysqli_fetch_assoc($result)) {

//             $profilePicture = $row['profilePicture'];
//             $_SESSION['profilePicture'] = $profilePicture;
//         }
//     }

//     return $profilePicture;
// }

function loadLatestItems($conn){

    $sql = "SELECT *FROM items ORDER BY productId DESC LIMIT 12";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $recentProductName[] = $row['productName'];
            $recentMainImage[] = $row['mainImage'];
            $recentProductId[] = $row['productId'];
        }
    }

    return $recentlyAddedProducts[] = [$recentProductId, $recentProductName, $recentMainImage];



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');


}
