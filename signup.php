<?php
	include 'header.php'
?>

<?php
//	if (isset($_SESSION['username'])){
//	echo $_SESSION['username'];
//	} else {
//	echo "You are not logged in.";
//	}
?>


<link rel="stylesheet" type="text/css" href="style1.css">
<section>
<?php
	if (isset($_SESSION['username'])){
	echo "<p class='lg'>You are already logged in...!!!</p>";
	} else {
	echo "
	<form class='signup' action='inc/signup.inc.php' method='POST'>
	<input type='text' name='first' placeholder='Firstname'>
	<input type='text' name='last' placeholder='Lastname'>
	<input type='text' name='user' placeholder='Username'>
	<input type='text' name='em' placeholder='Email'>
	<input type='password' name='pwd' placeholder='Passowrd'><br>
	<button type='submit' id='signup'>SIGN UP</button>
</form>
";
	}
?>
</section>

<?php
include 'footer.php'
?>