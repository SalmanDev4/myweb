<link rel="stylesheet" type="text/css" href="style3.css">

<?php
include 'header.php';
include 'dbc.php';
//include 'product_test.php';
?>
<?php
//getProducts($conn);

	if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    //echo "Thanks for payment. <a href='index.php'>Click here!</a>";

    if (isset($_POST["pay"]))
    {
    	$sql= "SELECT * From users where username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$userid = $row['id'];
	$sql2="UPDATE carts
	SET status ='payed'
	WHERE userid = '$userid' AND status ='added'";
	$result2 = mysqli_query($conn, $sql2);
    echo "Thanks for payment. <a href='index.php'>Click here!</a>";
    }
    else
        {
            echo "error.";
        }
    /*$sql= "SELECT * From users where username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$userid = $row['id'];
    $sql2 = "SELECT * FROM carts, products WHERE userid = '$userid' AND products.id = carts.productid";
    $result2 = mysqli_query($conn, $sql2);
    //$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    //$productid = $row2['productid'];
    //$sql3 = "SELECT * FROM products WHERE id = '$productid'";
    //$result3 = mysqli_query($conn, $sql3);
    //$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
    {
	echo '<section>
	<div><p>
	<form action="" method="POST" class="product-com">
	<input type="hidden" name="id" value="'.$row2['productid'].'">
	<img id="imgp" name="img" src="'.$row2['img'].'">
	<h5>Name:</h5><input type="text" name="productname" value="'.$row2['productname'].'"readOnly>
	<h5>Price:</h5><input type="text" name="price" value="'.$row2['totalprice'].' SR"readOnly>
	<h5>QTY:</h5><input type="text" name="oqty" value="'.$row2['c_qty'].'"readOnly>
	<h5>Shipping Tax:</h5><input type="text" name="price" value="'.$row2['shippingtax'].'"readOnly>
	<h5>Details:</h5><input type="text" name="details" value="'.$row2['details'].'"readOnly>
	<button type="submit" name="addCart" id="add">Pay</button>
	</form>
	</p></div>
	</section>';}*/
}else{
	echo "You should login/regiester to see your carts";
}

include 'footer.php';
?>