<?php
	include 'header.php'

?>

<link rel="stylesheet" type="text/css" href="style1.css">

<br><br>
<section class="center">
<?php
	if (isset($_SESSION['username'])){
	echo "<h1>Add New Product</h1>";
	echo "
	<form class='product' action='inc/product.inc.php' method='POST' enctype='multipart/form-data'>
	<input type='text' name='product' placeholder='Product Name'><br>
	<input type='text' name='price' placeholder='Price'><br>
	<input type='text' name='qty' placeholder='QTY'><br>
	<textarea rows='4' cols='50' name='details' placeholder='Details'></textarea><br>
	<input type='file' name='fileToUpload' id='fileToUpload'>
	<button type='submit' id='add'>Add New Product</button>
</form>
";

	} else {
	echo "You have no permission to open this page!";
	}
?>

</section>





<?php
include 'footer.php'
?>