<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lego";


$conn = new mysqli("localhost", "root", "", "lego");
if ($conn->connect_error) {
    die("Połączenie nieudane: ". $conn->connect_error);
}
?>