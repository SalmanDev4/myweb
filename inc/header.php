<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to My Store</title>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<link rel="stylesheet" type="text/css" href="layout2.css">
</head>

<body class="body">
<header class="header">
<div class="continerH">
<div class="logo">
	<h1>This is my store website</h1>
	</div>
	<div class="loginF">
	<ul>
			<li><a><?php
			if (isset($_SESSION['username'])){
				echo "Welcome ".$_SESSION['username'];
				}
			?></a></li></ul>
			<?php
				if (isset($_SESSION['username'])){
					echo"<form action='logout.inc.php'>
						<button>LOGOUT</button>
						</form>";
				} else {
					echo "<form action='login.inc.php' method='POST'>
						<input type='text' name='user' placeholder='Username'>
						<input type='password' name='pwd' placeholder='Passowrd'>
						<button type='submit'>LOGIN</button>
						</form>";
				}
				
			?></div>
			</div>
</header>
<nav class="nav">
		<ul>
			<li><a href="../index.php">HOME</a></li>
			<li><a href="../signup.php">SIGN UP</a></li>
			<li><a href="../product.php">Products</a></li>

		</ul>
	</nav>