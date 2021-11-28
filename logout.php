<?php
session_start();
if(isset($_SESSION) || session_status() == PHP_SESSION_ACTIVE || session_id() != ''){
  session_destroy();
  header('Location: hotelhome.html');
}

?>
