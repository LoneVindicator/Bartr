<?php

$sellerId = $_SESSION['userId'];
// echo ($userId);
// echo "<br>";

$conn = new mysqli('localhost', 'root', '', 'bartrdb');

if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);

} else {

    //get userId of Sellers

    $sellerUserId = getSellerUserId($conn, $userId);

    
    if(!isset($sellerUserId)){
        
        echo "You have no offers";
        die();
    }

    $sellerUserIdLength = count($sellerUserId);

    // print_r($sellerUserId);
    // echo "<br>";

    //Get details of all sellers 

    for($i=0; $i < $sellerUserIdLength; $i++){

        $sellerDetails[] = getSellerDetails($conn, $sellerUserId[$i]);

        
    }

    // print_r($sellerDetails);

    //Map seller details to variables

    $p = 0;

    for ($i = 0; $i < $sellerUserIdLength; $i++) {

        $sellerFname[$i] = $sellerDetails[$i][0];
        $sellerLname[$i] = $sellerDetails[$i][1];
        $sellerLocation[$i] = $sellerDetails[$i][2];
        $sellerImg[$i] = $sellerDetails[$i][3];
    
    }

    // print_r($sellerImg);

    $transactionId = getTransactionId($conn, $userId);
    // print_r($transactionId);
    // echo "<br>";

    // print_r($transactionId);
    // echo "<br>";

    $transactionIdLength = count($transactionId);

    //get Buyers Wants


    for($i = 0; $i < $transactionIdLength; $i++){

        $buyersWants[$i] = getBuyersWants($conn, $transactionId[$i]);

    }

    for($i = 0; $i < $transactionIdLength; $i++){

        $sellerWants[$i] = getSellerWants($conn, $transactionId[$i]);

    }

    // print_r($buyersWants);
    // echo "<br>";

    // print_r($sellerWants);
    // echo "<br>";

    // print_r(getItemDetails($conn, $buyersWants[0][0])); 

    // print_r(getItemDetails($conn, $buyersWants[1][0])); 

    // print_r($sellerWants);
    // echo "<br>";

    // echo getItemDetails($conn, $sellerWants[0])[1]; 
    // echo "<br>";

}


function getSellerUserId($conn, $userId)

{

    $sql = "SELECT *FROM transactions WHERE sellerUserId = '$userId' LIMIT 15";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $sellerUserId[] = $row['buyerUserId'];

        }
    }

    return $sellerUserId;



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');

}

function getSellerDetails($conn, $sellerUserId){

    $sql = "SELECT *FROM user WHERE userId = '$sellerUserId' LIMIT 15";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $sellerFname = $row['fname'];
            $sellerLname = $row['lname'];
            $sellerLocation = $row['street'];
            $sellerImg = $row['profilePicture'];

        }
    }

    return $sellerDetails[] = [$sellerFname, $sellerLname, $sellerLocation, $sellerImg];


}

function getTransactionId($conn, $userId)

{

    $sql = "SELECT *FROM transactions WHERE sellerUserId = '$userId' LIMIT 15";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $transactionId[] = $row['transactionId'];

        }
    }

    return $transactionId;



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');

}

function getBuyersWants($conn, $transactionId){

    $sql = "SELECT *FROM transactions WHERE transactionId = '$transactionId' LIMIT 15";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $buyersWants = $row['buyersItems'];

            $buyersWants = unserialize($buyersWants)[0];

        }
    }

    return $buyersWants;


}

function getSellerWants($conn, $transactionId){

    $sql = "SELECT *FROM transactions WHERE transactionId = '$transactionId' LIMIT 15";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $sellerWants = $row['sellersItems'];

            $sellerWants = unserialize($sellerWants)[0];

        }
    }

    return $sellerWants;


}

function getItemDetails($conn, $productId){

    $sql = "SELECT *FROM items WHERE productId = '$productId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $productId = $row['productId'];
            $productName = $row['productName'];
            $productImg = $row['mainImage'];
            
        }
    }

    return $buyerWants = [$productId, $productImg, $productName];



}


?>

