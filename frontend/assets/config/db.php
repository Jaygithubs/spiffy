
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="spiffy";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
require("config.php");
// echo "Connected successfully";

// database password
// 6d;b[PBcVC]X

?>