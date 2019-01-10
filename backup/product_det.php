<link rel="stylesheet" type="text/css" href="style3.css">
<?php
include 'header.php';
include 'dbc.php';
//include 'product_test.php';

//getProducts($conn);	

if (isset($_GET["selectProduct"]))
    {
    $id = $_GET['id'];
    $sql= "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo '<section>
    	<div><p>
    	<form class="product-com">
    	<img id="imgp2" src="'.$row['img'].'">
		<input type="hidden" name="id" value="'.$row['id'].'">
		<h5>Name:</h5><input type="text" name="productname" value="'.$row['productname'].'"readOnly>
		<h5>Price:</h5><input type="text" name="price" value="'.$row['price'].' SR"readOnly>
		<h5>QTY:</h5><input type="text" name="qty" value="'.$row['qty'].'"readOnly>
		<h5>Details:</h5><input type="text" name="details" value="'.$row['details'].'"readOnly>
		</form>
		</p>
		</div></section>';
    }
    else
        {
            echo "error.";
        }

include 'footer.php';
?>