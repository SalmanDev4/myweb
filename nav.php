<nav class="nav">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="signup.php">SIGN UP</a></li>
			<li><a href="product.php">Products</a></li>
			<li><a><?php
			if (isset($_SESSION['username'])){
				echo "Welocome ".$_SESSION['username'];
				}
			?></a></li>
			<?php
				if (isset($_SESSION['username'])){
					echo"<form action='inc/logout.inc.php'>
						<button>LOGOUT</button>
						</form>";
				} else {
					echo "<form action='inc/login.inc.php' method='POST'>
						<input type='text' name='user' placeholder='Username'>
						<input type='password' name='pwd' placeholder='Passowrd'>
						<button type='submit'>LOGIN</button>
						</form>";
				}
				
			?>
		</ul>
	</nav>