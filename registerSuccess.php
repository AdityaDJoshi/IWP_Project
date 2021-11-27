<?php

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
  $name = $_POST['last_name'] . $_POST['first_name'];
  $pwsd = $_POST['password'];
  $cnfpwsd = $_POST['confirm_password'];
  $email = $_POST['email'];
  echo $name;
  if($pwsd === $cnfpwsd){
    $sql1 = "INSERT INTO users (uname, passwd, email) VALUES ( '$name', '$pwsd', '$email')";
    if ($conn->query($sql1) === TRUE) {
      echo "New record created successfully <br/> go to <a href=". "login.html" .">Sign in</a> <br />";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    echo "PASSWORDS NOT MATCHING!!";
  }


}



 ?>
