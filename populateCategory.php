<?php

$userId = $_SESSION['userId'];
$category = $_GET['category'];

$conn = new mysqli('localhost', 'root', '', 'bartrdb');

if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);
} else {


}

$categoryItems = getCategoryItems($conn, $category); 

$categoryItemsLength = count($categoryItems[0])-1;

for ($i = 0; $i < $categoryItemsLength; $i++) {

    $productId[$i] = $categoryItems[0][$i];
    $productName[$i] = $categoryItems[1][$i];
    $productImg[$i] = $categoryItems[2][$i];

}



function getCategoryItems($conn, $category)

{

    $sql = "SELECT *FROM items WHERE category = '$category' LIMIT 15";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $productName[] = $row['productName'];
            $mainImage[] = $row['mainImage'];
            $productId[] = $row['productId'];
        }
    }

    return $getCategoryItems[] = [$productId, $productName, $mainImage];



    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');

}


?>