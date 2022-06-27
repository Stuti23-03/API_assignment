<?php
	require_once'connection.php';
	if(ISSET($_POST['register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
 
 
		mysqli_query($conn, "INSERT INTO `login` VALUES('', '$name', '$email', '$pass')") or die(mysqli_error());
 
 
		echo "<center><h4 class='text-success'>Successfully registered!</h4></center>";
	}
?>

