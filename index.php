<?php
	include 'header.php';
?>

<!-- <nav class="pro">
	<ul>
		<li><a href="cart.php">Cart</a></li><br>
		<li><a href="order_history.php">Order History</a></li><br>
	</ul>
</nav> -->
<div id="continer">
<aside class="sidebar">
	<ul>
		<li><a href="cart.php">Cart</a></li><br>
		<li><a href="order_history.php">Order History</a></li><br>
	</ul>
</aside>
</div>
<div class="main">
<div class="mbox">
<?php
include 'dbc.php';
$sql="Select * from products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<section>
	<div><p>
	<form action="product_det.php" method="GET" class="cards">
	<img id="imgp" src="'.$row['img'].'"><br>
	<input type="hidden" name="id" value="'.$row['id'].'">
	<input type="text" name="productname" value="'.$row['productname'].'"readOnly>
	<input type="text" name="price" value="'.$row['price'].' SR"readOnly>
	<input type="text" name="qty" value="'.$row['qty'].'"readOnly>
	<input type="text" name="details" value="'.$row['details'].'"readOnly>
	<button type="submit" name="selectProduct" id="open">open</button>
	</form>
	</p></div>
	</section>';

}

?>
</div>
</div>
<?php
include 'footer.php'
?>

