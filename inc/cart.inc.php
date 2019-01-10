<?php
include 'header.php';
include '../dbc.php';
?>
<link rel="stylesheet" type="text/css" href="../layout.css">
<?php
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
    $sql= "SELECT * From users where username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$userid = $row['id'];
$productid = $_GET['pid'];
$productname = $_GET['productname'];
$price = $_GET['price'];
//$aqty = $_GET['aqty'];
$details = $_GET['details'];
$oqty = $_GET['oqty'];
$tprice = $price;
//$img = $_GET['imga'];
$shippingtax = 20.00;
$status = "added";
if(isset($_GET["addCart"])) {
	
$sql2 = "INSERT INTO carts (userid, productid, c_qty, totalprice, shippingtax, status) 
VALUES ('$userid', '$productid', '$oqty', '$tprice', '$shippingtax', '$status')";

$result2 = mysqli_query($conn, $sql2);

echo "The product is add to cart.";
header("Location: ../cart.php");
} else{
	echo "There was an error.";
}
}else{
	echo "You should login/signup to complete this issue.";
}
include 'footer.php';
//header("Location: ../cart.php");