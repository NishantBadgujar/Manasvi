<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$degree = $_POST["degree"];
$stream = $_POST["stream"];
$passout_yr = $_POST["passout_yr"];
$domain = $_POST["domain"];


$connection = mysqli_connect("localhost", "root", "", "contact");

$sqlQuery = "INSERT INTO `enrolled_candi`(`name`, `email`, `phone`, `degree`, `stream`, `passout_yr`, `domain` ) VALUES ('".$name."','".$email."','".$phone."', '".$degree."', '".$stream."', '".$passout_yr."', '".$domain."')";


$res = mysqli_query($connection, $sqlQuery);

print_r($res);
?>