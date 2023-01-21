<?php


$productId = $_GET['productId'];

$_SESSION['productId'] = $productId;

// echo $productId;
// echo "<br>";

$conn = new mysqli('localhost', 'root', '', 'bartrdb');


if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);
} else {

    $sellerUserId = getSellerUserId($productId, $conn);


    $productDetails[] = populateProductDetails($productId, $conn);
    $sellerDetails[] = populateSellerDetails($sellerUserId, $conn);
}

//Map details to variables

//Product Details

$productName = $productDetails[0][0];
$description = $productDetails[0][1];
$category = $productDetails[0][2];
$imageArray = $productDetails[0][3];
$mainImg = $productDetails[0][4];
$sellerUserId = $productDetails[0][5];

//Seller Details

$firstName = $sellerDetails[0][0];
$lastName = $sellerDetails[0][1];
$profilePicture = $sellerDetails[0][2];
$location = $sellerDetails[0][3];
$phoneNumber = $sellerDetails[0][4];

// print_r($sellerDetails);

//get Review Details

$reviewDetails = getReviewDetails($conn, $productId);

if ($reviewDetails == null) {

    $reviewCount = 0;
    setReviewCount($conn, $productId, $reviewCount);
    // echo $reviewCount;


} else {

    $reviewLength = count($reviewDetails[0]);

    // print_r($reviewDetails);
    // echo "<br>";
    // print_r($reviewLength);
    // echo "<br>";

    //map review details to array to variables

    for ($i = 0; $i < $reviewLength; $i++) {

        $buyerUserId[] = $reviewDetails[0][$i];
        $reviewHeadline[] = $reviewDetails[1][$i];
        $reviewBody[] = $reviewDetails[2][$i];
        $reviewRating[] = $reviewDetails[3][$i];
    }

    // print_r($buyerUserId);
    // echo "<br>";
    // print_r($reviewHeadline);
    // echo "<br>";
    // print_r($reviewBody);
    // echo "<br>";
    // print_r($reviewRating);
    // echo "<br>";



    //get reviewer details

    for ($i = 0; $i < $reviewLength; $i++) {

        $reviewerFname[] = getReviewerDetails($conn, $buyerUserId[$i])[0];
        $reviewerLname[] = getReviewerDetails($conn, $buyerUserId[$i])[1];
        $reviewerImage[] = getReviewerDetails($conn, $buyerUserId[$i])[2];
    }

    // print_r($reviewerFname);
    // echo "<br>";
    // print_r($reviewerLname);
    // echo "<br>";
    // print_r($reviewerImage);
    // echo "<br>";

    $reviewCount = $reviewLength;
    setReviewCount($conn, $productId, $reviewCount);
    // echo $reviewCount;
}


// $reviewLength = count($reviewDetails[0]);

// print_r($reviewDetails);
// echo "<br>";
// print_r($reviewLength);
// echo "<br>";

// //map review details to array to variables

// for($i=0; $i<$reviewLength; $i++){

//     $buyerUserId[] = $reviewDetails[0][$i];
//     $reviewHeadline[] = $reviewDetails[1][$i];
//     $reviewBody[] = $reviewDetails[2][$i];
//     $reviewRating[] = $reviewDetails[3][$i];

// }



// //get reviewer image

// for($i=0; $i<$reviewLength; $i++){

//     $reviewerFname[] = getReviewerDetails($conn, $buyerUserId[$i])[0];
//     $reviewerLname[] = getReviewerDetails($conn, $buyerUserId[$i])[1];
//     $reviewerImage[] = getReviewerDetails($conn, $buyerUserId[$i])[2];


// }


function populateProductDetails($productId, $conn)
{

    $sql = "SELECT *FROM items WHERE productId='$productId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $productName = $row['productName'];
            $description = $row['description'];
            $category = $row['category'];
            $imageArray =  $row['extraImages'];
            $mainImg =  $row['mainImage'];
            $sellerUserId = $row['userId'];
            // $extraImages = json_decode($row['extraImages']);

            $imageArray = unserialize($imageArray);
            // echo "<br/>";

            // print_r($imageArray);
            // echo "<br/>";
            // print_r($mainImg);
            // echo "<br/>";

            $_SESSION['sellerUserId'] = $sellerUserId;
        }
    }

    return $productDetailArray[] = [$productName, $description, $category, $imageArray, $mainImg, $sellerUserId];
}

function populateSellerDetails($sellerUserId, $conn)
{

    $sql = "SELECT *FROM user WHERE userId='$sellerUserId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $firstName = $row['fname'];
            $lastName = $row['lname'];
            $profilePicture = $row['profilePicture'];
            $location = $row['street'];
            $phoneNumber = $row['phone'];
        }
    }

    return $sellerDetailArray[] = [$firstName, $lastName, $profilePicture, $location, $phoneNumber];
}

function getSellerUserId($productId, $conn)
{

    $sql = "SELECT userId FROM items WHERE productId='$productId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $sellerUserId = $row['userId'];
        }
    }

    return $sellerUserId;
}

function getReviewDetails($conn, $productId)
{

    $sql = "SELECT *FROM reviews WHERE productId='$productId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);


    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $buyerUserId[] = $row['buyerUserId'];
            $reviewHeadline[] = $row['reviewHeadline'];
            $reviewBody[] = $row['reviewBody'];
            $rating[] = $row['rating'];
        }

        $getReviewDetails = [$buyerUserId, $reviewHeadline, $reviewBody, $rating];
    } else {

        echo "No reviews";
        $getReviewDetails = null;
    }

    return $getReviewDetails;
}

function getReviewerDetails($conn, $buyerUserId)
{

    $sql = "SELECT *FROM user WHERE userId='$buyerUserId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);


    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $reviewerImage = $row['profilePicture'];
            $reviewerFname = $row['fname'];
            $reviewerLname = $row['lname'];
        }
    }

    return $reviewerDetail = [$reviewerFname, $reviewerLname, $reviewerImage];
}

function setReviewCount($conn, $productId, $reviewCount){

    $sql = ("UPDATE items
    SET reviewCount = '$reviewCount'  where productId = '$productId'");

    if ($conn->query($sql) === TRUE) {
        // echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


}
