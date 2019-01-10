<?php
include_once 'dbc.php';

if (isset($_POST['del'])) {
	
	$id = $_POST['cid'];
	$dSQL = "DELETE FROM carts WHERE id = '$id'";
	$dResult = mysqli_query($conn, $dSQL);
	header("Location:cart.php");
	}

?>

