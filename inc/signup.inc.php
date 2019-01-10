<?php
session_start();
include '../dbc.php';

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$username = $_POST['user'];
$email = $_POST['em'];
$password = $_POST['pwd'];

$sql = "INSERT INTO users (firstname, lastname, username, email, password) 
VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

$result = mysqli_query($conn, $sql);

echo "The user has been created. Please login...";
header("Location: ../index.php");

//echo $firstname."<br/>";
//echo $lastname."<br/>";
//echo $username."<br/>";
//echo $email."<br/>";
//echo $password."<br/>";
