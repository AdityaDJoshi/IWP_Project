<?php

$image = $_POST["image"];
$image = explode(";", $image)[1];
$image = explode(",", $image)[1];
$image = str_replace(" ", "+", $image);
$image = base64_decode($image);
file_put_contents(file_get_contents("secret.txt") . ".jpeg", $image);
