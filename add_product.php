<?php 
include "db_connection.php";

$title = $_POST["title"];
$price = $_POST["price"];

$sql = "INSERT INTO `product`(`name`, `price`) VALUES ($title, $price)";

if($conn->query($sql) === TRUE) {
 echo "Dodałeś ogłoszenie!";
} else {
    echo "Coś poszło nie tak :/ ";
}


$conn->close();
?>