<?php
	include 'header.php'
?>

<link rel="stylesheet" type="text/css" href="style3.css">
<h1>Products</h1>
<?php
include 'nav.php';
?>
<!-- <nav class="pro">
	<ul>
		<li><a href="cart.php">Cart</a></li><br>
		<li><a href="order_history.php">Order History</a></li><br>
	</ul>
</nav> -->
<div id="myProduct">
<?php
include 'dbc.php';
$sql="Select * from products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<section>
	<div><p>
	<form action="product_det.php" method="GET" class="product-box">
	<img id="imgp" src="'.$row['img'].'"><br>
	<input type="hidden" name="id" value="'.$row['id'].'">
	<h5>Name:</h5><input type="text" name="productname" value="'.$row['productname'].'"readOnly>
	<h5>Price:</h5><input type="text" name="price" value="'.$row['price'].' SR"readOnly>
	<h5>QTY:</h5><input type="text" name="qty" value="'.$row['qty'].'"readOnly>
	<h5>Details:</h5><input type="text" name="details" value="'.$row['details'].'"readOnly>
	<button type="submit" name="selectProduct" id="open">open</button>
	</form>
	</p></div>
	</section>';

}

?>


<?php
include 'footer.php'
?>

