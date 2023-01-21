<?php

session_start();

$productName = $_POST['productName'];
$brandName = $_POST['brandName'];
$modelName = $_POST['modelName'];
$officialProductName = $_POST['officialProductName'];
$category = $_POST['category'];
$description = $_POST['description'];
$dateAdded =  date("y-m-d");
$userId = $_SESSION['userId'];
$extraImages = $_FILES['extraImages'];
$mainImg = $_FILES['mainPhoto'];

print_r($mainImg);


$imageArray = [];

$randomFolderName = uniqid();

print_r("./uploads/users/$userId/products/$randomFolderName");
mkdir("./uploads/users/$userId/products/$randomFolderName", 0777, true);
$dir = "./uploads/users/$userId/products/$randomFolderName";

for ($i = 0; $i < 4; $i++) { //move extraImagesimages from tmp to $dir

    $tempName = $_FILES['extraImages']['tmp_name'][$i];
    $name = basename($_FILES["extraImages"]["name"][$i]);

    move_uploaded_file($tempName, "$dir/.$name");

    array_push($imageArray, "$dir/.$name");
}

//Move mainImg from tmp to $dir

$tempName = $_FILES['mainPhoto']['tmp_name'];
$name = basename($_FILES["mainPhoto"]["name"]);

move_uploaded_file($tempName, "$dir/.$name");
$mainPhotoDir = "$dir/.$name";

$imageArray = serialize([$imageArray]);

print_r($tempName);
echo "<br>";




// $extraImages = json_encode($_FILES['extraImages']);



//Database connection

$conn = new mysqli('localhost', 'root', '', 'bartrdb');


if ($conn->connect_error) {

    die('Connection Failed : ' . $conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT into items(productName, brandName, modelName, officialProductName, category, description, dateAdded, userId, extraImages, mainImage)
    values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssiss", $productName, $brandName, $modelName, $officialProductName, $category, $description, $dateAdded, $userId, $imageArray, $mainPhotoDir);
    $stmt->execute();

    echo "Upload is Successful...";


    // header('location: http://localhost/bartr/Bartr/my-app/src/upload-page.php');
    openNewItem();

    $stmt->close();
    $conn->close();
}












//OpenNewItem function


function openNewItem()
{
    $conn = new mysqli('localhost', 'root', '', 'bartrdb');


    if ($conn->connect_error) {

        die('Connection Failed : ' . $conn->connect_error);
    } else {


        $userId = $_SESSION['userId'];
        $sql = "SELECT *FROM items WHERE userId='$userId'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                $productId = $row['productId'];
            }
        }

        header('location: http://localhost/bartr/Bartr/my-app/src/item-page.php?productId=' . $productId);
    }
}
