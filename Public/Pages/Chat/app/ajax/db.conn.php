<?php
ob_start();

$servername = "89.116.139.118"; // or your server name
$username = "jd";
$password = "Jayesh8169";
$dbname = "account";

#creating database connection
try {
  $conn = new PDO(
    "mysql:host=$servername;dbname=$dbname",
    $username,
    $password
  );
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed : " . $e->getMessage();
}
