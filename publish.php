<?php
	
	$name = $_POST['name'];
	$place = $_POST['place'];
	$rating = $_POST['rating'];
	$descp = $_POST['desc'];
	include('connection.php');
	if(!empty($name)&&!empty($place)&&!empty($rating)&&!empty($descp)){
		
		$query = "INSERT INTO place (`place`, `name`, `rating` ,`descp`) values('$place', '$name', '$rating','$descp')";
		$run = mysql_query($query);
		echo $query;
			if($run){
				echo "<script>alert('Successfully posted.Thanks for your feedback');</script>";
				sleep(3);
				header("Location:index.php");
			}else{
				echo "<script>alert('Problem in posting. Please try again later');</script>";
			}
	}else{
		echo"no";
	}

?>