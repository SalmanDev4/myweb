<link rel="stylesheet" type="text/css" href="style3.css">

<?php
include 'header.php';
include 'dbc.php';
//include 'product_test.php';
?>
<?php
//getProducts($conn);
$total = 0;
	if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $sql= "SELECT * From users where username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$userid = $row['id'];
    $sql2 = "SELECT carts.id as cartid, productid, productname, totalprice as price, SUM(c_qty) as qty,img,shippingtax, details FROM carts, products WHERE userid = '$userid' AND products.id = carts.productid AND status = 'added' GROUP BY productid";
    $result2 = mysqli_query($conn, $sql2);
    /*$sql3 = "SELECT sum(totalprice*c_qty) FROM carts WHERE userid = '$userid'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_execute($result3, MYSQLI_ASSOC);*/
    //$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    //$productid = $row2['productid'];
    //$sql3 = "SELECT * FROM products WHERE id = '$productid'";
    //$result3 = mysqli_query($conn, $sql3);
    //$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    //$keyarray = array();
    while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
    {
    	$subTotal = $row2['price'] * $row2['qty'];
    	$total += $subTotal + $row2['shippingtax'];
    	$cartid = $row2['cartid'];
    	$productid = $row2['productid'];
    /*if (isset($_POST['action'])=='deleteItem') {
		deleteItem($cartid);
	}else{*/
	echo '<section>
	<div><p>
	<form action="delete.php" method="POST" class="product-com">
	<input type="hidden" name="id" value="'.$productid.'">
	<input type="hidden" name="cid" value="'.$cartid.'">
	<img id="imgp" name="img" src="'.$row2['img'].'">
	<h5>Name:</h5><input type="text" name="productname" value="'.$row2['productname'].'"readOnly>
	<h5>Price:</h5><input type="text" name="price" value="'.$row2['price'].' SR"readOnly>
	<h5>QTY:</h5><input type="text" name="oqty" value="'.$row2['qty'].'"readOnly>
	<h5>Total:</h5><input type="text" name="subtotal" value="'.$subTotal.'  SR"readOnly>
	<h5>Shipping Tax:</h5><input type="text" name="shippingtax" value="'.$row2['shippingtax'].'"readOnly>
	<h5>Details:</h5><input type="text" name="details" value="'.$row2['details'].'"readOnly>
	<button type"submit" name="del" id="add">Delete</button>
	</form>
	</p></div>
	</section>';//}
	//echo'<h5>Total:</h5><input type="text" name="total" value="'.$total.' SR"readOnly>';
	}
	echo '<aside class="totalbar" align = "right" style="text-align:center; float:right; margin-right:10px;background-color: #E1DBD0;padding:5px; display:block;">
	<div>
	<form action="payment.php" method="POST" class="totalForm">
	<h5>Total:</h5><input type="text" name="total" value="'.$total.' SR"readOnly>
	<button type="submit" name="pay" id="add">Pay</button>
	</form>
	</div>
	</aside>';

	
	/*if (isset($_POST["delete"])){
		$dSQL = "DELETE FROM carts WHERE id = '$cartid'";
		$dResult = mysqli_query($conn, $dSql);
	} else {
		echo "There is an error when deleting the item!";
	}*/
	/*echo'<h5>Total:</h5><input type="text" name="total" value="'.$total.' SR"readOnly>';
	echo'<button type="submit" name="pay" id="add">Pay</button>';*/

}else{
	echo "You should login/regiester to see your carts";
}

include 'footer.php';


/*function deleteItem(){
	if (isset($_POST["deleteItem"])) {
		require 'dbc.php';
	$id = _POST['cid'];
	$dSQL = "DELETE FROM carts WHERE id = '$id'";
	$dResult = mysqli_query($conn, $dSQL);

		header("Refresh:0");
	}
	
	
}*/
?>

