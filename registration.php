<?php
	
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	if(!empty($fname) && !empty($lname) && !empty($pass) && !empty($email)){
		include('connection.php');
		$pass = md5($pass);
		$query = "select * from user where email = '$email'";
		$run = mysql_query($query);

		if(mysql_num_rows($run)>0){
			echo "<script>alert('Email already Exists');</script>";
			echo "<script>window.location('login.php')</script>";
		}else{
			$query = "insert into user(fname, lname, email ,pass) values('$fname', '$lname', '$email','$pass')";
			$run = mysql_query($query);
			if($run){
				echo "<script>alert('Successfully Registered. Please login to continue');</script>";
				sleep(3);
				header("Location:login.php");
			}else{
				echo "<script>alert('Problem in registering. Please try again later');</script>";
			}
		}

		
	}

?>