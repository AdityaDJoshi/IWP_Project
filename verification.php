<?php

if(isset($_POST['bt1'])){
  $em = $_POST['email'];
  $pswd = $_POST['psw'];

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

  $sqlr = "SELECT * FROM users where email = '$em';";
  $result = $conn->query($sqlr);

  while($row = $result->fetch_assoc()) {
    if($row['passwd'] === $pswd){
      session_start();
      $_SESSION["userName"] = $row['uname'];
      header('Location: AfterLoggeinHome.php');
    }
    else{
      echo "PASSWORD IS INCORRECT! <a href=" . "login.html" .">Try Again?</a>";
    }
  }
}

 ?>
