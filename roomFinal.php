<?php

session_start();

if(isset($_POST['set'])){
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

  $tD = $_POST['toDate'];
  $fD = $_POST['fromDate'];

  $toDate = new DateTime($_POST['toDate']);
  $fromDate = new DateTime($_POST['fromDate']);

  $abs_diff = $toDate->diff($fromDate)->format("%a");
  $bil = 0;
  if($_POST['roomType'] == "Deluxe"){
    $bil = 100 * $abs_diff;
  }
  else if($_POST['roomType'] == "Suite"){
    $bil = 200 * $abs_diff;
  }
  else{
    $bil = 300 * $abs_diff;
  }

  $_SESSION["roomPr"] = $bil;
  $nam = $_SESSION['userName'];
  $sql1 = "INSERT INTO rooms (usname, fromDate, todate, price) VALUES ( '$nam', '$fD', '$tD', '$bil')";
  if ($conn->query($sql1) === TRUE) {
    echo "Room Booked Succesfully !!! <br/> <a href=". "AfterRooms.php" .">Go Back</a> <br />";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}


 ?>
