<?php
	session_start();
	if(isset($_POST['email']) && isset($_POST['pass'])){
		include('connection.php');
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$pass = md5($pass);

		$query = "select * from user where email = '$email' AND pass='$pass'";
		$run = mysql_query($query);

		if(mysql_num_rows($run) == 1){
			$row =  mysql_fetch_array($run);
			echo "<script>alert('Successfully Logged in')</script>";
			$_SESSION['id'] = $row['id'];
		}
		else{
			echo 'not ok';
		}
	}

?>