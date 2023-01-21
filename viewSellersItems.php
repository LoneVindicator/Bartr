<?php

$userId = $_GET['sellerUserId'];

$conn = new mysqli('localhost', 'root', '', 'bartrdb');

if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);
} else {


}

$myItems = getMyItems($conn, $userId); 

$sellerName = getSellerName($conn, $userId);
$sellerName = "{$sellerName[0]} {$sellerName[1]}";

$myItemsLength = count($myItems[0]);

// print_r($myItems[0]);


for ($i = 0; $i < $myItemsLength; $i++) {

    $productId[$i] = $myItems[0][$i];
    $productName[$i] = $myItems[1][$i];
    $productImg[$i] = $myItems[2][$i];

}



function getMyItems($conn, $userId)

{

    $sql = "SELECT *FROM items WHERE userId = '$userId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $productName[] = $row['productName'];
            $mainImage[] = $row['mainImage'];
            $productId[] = $row['productId'];
        }
    }

    return $myItems[] = [$productId, $productName, $mainImage];



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');

}

function getSellerName($conn, $userId)

{

    $sql = "SELECT *FROM user WHERE userId = '$userId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $firstName = $row['fname'];
            $lastName = $row['lname'];

        }
    }

    return $sellerName = [$firstName, $lastName];



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');

}


?>