<?php
	session_start();
	require_once 'connection.php';
 
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
 
		$query = mysqli_query($conn, "SELECT * FROM `login` WHERE `email`='$email' && `pass`='$pass'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);
         
        
		if($count > 0){
			$_SESSION['id']=$fetch['id'];
			header('location: home.php');
		}else{
			echo "<div class='alert alert-danger'>Invalid username or password</div>";
		}
	}
?>