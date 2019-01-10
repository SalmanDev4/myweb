<?php
	include 'header.php'
?>

<link rel="stylesheet" type="text/css" href="style1.css">
<br>

<?php
//	if (isset($_SESSION['username'])){
//	echo $_SESSION['username'];
//	} else {
//	echo "You are not logged in.";
//	}
?>
<br>
<h1>Users</h1>
<div id="mytablediv">
<table id="mytable" class="table" border="1" cellpadding="1" cellspacing="2">
<thead>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
		<th>Created time</th>
	</tr>
</thead>
<tbody>
<?php
include 'dbc.php';

$sql="Select * from users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<tr>';
	echo '<td>'.$row['id'].'</td>';
	echo '<td>'.$row['firstname'].'</td>';
	echo '<td>'.$row['lastname'].'</td>';
	echo '<td>'.$row['username'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['password'].'</td>';
	echo '<td>'.$row['createdtime'].'</td>'.'<br>';
}

?>
</tbody>
</table>
</div>
<br>
<h1>Products</h1>
<br>
<div id="myProduct">
<table id="myproducttable" class="producttable" border="1" cellpadding="1" cellspacing="2">
<thead>
	<tr>
		<th>ID</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>QTY</th>
		<th>Details</th>
		<th>Created time</th>
		<th>Image</th>
	</tr>
</thead>
<tbody>

<!--<img src="$row['img']" alt="$row['productname']" style="width:200px;height:200px;">-->
<?php
include 'dbc.php';

$sql="Select * from products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<tr>';
	echo '<td>'.$row['id'].'</td>';
	echo '<td>'.$row['productname'].'</td>';
	echo '<td>'.$row['price']. ' SR'.'</td>';
	echo '<td>'.$row['qty'].'</td>';
	echo '<td>'.$row['details'].'</td>';
	echo '<td>'.$row['currenttime'].'</td>'.'<br>';
	echo '<td>'.'<img src="'.$row['img'].'"'.'style="width:100px;height=100px;">'.'</td>'.'<br>';
}

?>
</tbody>
</table>
</div>



<?php
include 'footer.php'
?>

