<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "iwp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br/>";
$namm = $_SESSION['userName'];
$sql1 = "INSERT INTO tour (uname, Tprice) VALUES ( '$namm', '75')";
if ($conn->query($sql1) === TRUE) {
  echo "Tour booked successfully <br/> <a href=". "tourism.php" .">Go back</a> <br />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
