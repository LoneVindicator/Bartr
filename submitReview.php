<?php

session_start();

$buyerUserId = $_SESSION['userId'];
$sellerUsedId = $_POST['sellerUserId'];
$reviewHeadline = $_POST['reviewHeadline'];
$reviewBody = $_POST['reviewBody'];
$rating = $_POST['rating'];
$productId = $_POST['productId'];


//Database connection

$conn = new mysqli('localhost', 'root', '', 'bartrdb');


if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);
} else {

    $doesReviewExist = doesReviewAlreadyExist($conn, $buyerUserId, $productId);
    // print_r($doesReviewExist);
    // echo "<br>";

    if ($doesReviewExist[0] == true) {

        $sql = ("UPDATE reviews
        SET reviewHeadline = '$reviewHeadline', reviewBody='$reviewBody', rating='$rating' where buyerUserId = '$buyerUserId'");

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        header('location: http://localhost/bartr/Bartr/my-app/src/item-page.php?productId=' . $productId);

        $conn->close();
    } else {

        $stmt = $conn->prepare("INSERT into reviews(buyerUserId, sellerUserId, reviewHeadline, reviewBody, rating, productId)
        values (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("iissii", $buyerUserId, $sellerUsedId, $reviewHeadline, $reviewBody, $rating, $productId);
        $stmt->execute();

        echo "Upload is Successful...";


        header('location: http://localhost/bartr/Bartr/my-app/src/item-page.php?productId=' . $productId);
        $stmt->close();
        $conn->close();
    }
}



function doesReviewAlreadyExist($conn, $buyerUserId, $productId)
{

    $sql = "SELECT *FROM reviews WHERE buyerUserId='$buyerUserId' AND productId='$productId'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $reviewId = $row['reviewId'];
        }

        $doesReviewExist = [true, $reviewId];
    } else {

        $doesReviewExist = [false];
    }

    return $doesReviewExist;
}
