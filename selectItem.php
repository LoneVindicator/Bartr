<?php

session_start();

$buyersItems = $_POST['item-checkbox'];
$sellersItems = $_SESSION['productId'];
$buyerUserId = $_SESSION['userId'];
$sellerUserId = $_SESSION['sellerUserId'];

echo "print";

print_r($buyersItems);
echo "<br>";
print_r($sellersItems);
echo "<br>";



$buyersItems = serialize([$buyersItems]);
$sellersItems = serialize([$sellersItems]);


// print_r($buyersItems);


//Database connection

$conn = new mysqli('localhost', 'root', '', 'bartrdb');


if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);

} else {

    $stmt = $conn->prepare("INSERT into transactions(buyersItems, sellersItems, buyerUserId, sellerUserId)
    values (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $buyersItems, $sellersItems, $buyerUserId, $sellerUserId);
    $stmt->execute();

    echo "Upload is Successful...";


    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');
    $stmt->close();
    $conn->close();
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
