<?php
session_start();
include '../dbc.php';

$username = $_POST['user'];
$password = $_POST['pwd'];



$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(!$row = $result->fetch_assoc()){
	echo "Your username or password is in correct";
} else{
	$_SESSION['username'] = $row['username'];
}
header("Location: ../index.php");

//echo $firstname."<br/>";
//echo $lastname."<br/>";
//echo $username."<br/>";
//echo $email."<br/>";
//echo $password."<br/>";
