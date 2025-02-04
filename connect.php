<?php
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["msg"];

$connection = mysqli_connect( "localhost", "root", "", "contact");

$query = "INSERT INTO `visitors`(`name`, `email`, `msg`) VALUES ('".$name."', '".$email."', '".$msg."')";

$res = mysqli_query($connection, $query);

print_r($res);
?>