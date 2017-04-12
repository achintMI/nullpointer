<?php
	include('head.php'); 
	include('navigation.php');
?>
<div>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="index.php"><img src="img/logo1.png" height="70px" width="70px" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav" >
            <a href="index.php" style="padding-right: 20px">About Us</a> 
            <a href="search.php" style="padding-right: 20px">Search Place</a> 
            <a href="#" style="padding-right: 20px">Contacts</a>
            <a href="index.php/#contact" style="padding-right: 20px">Contacts</a>
            <?php if(isset($_SESSION['id'])): ?>
              <a class="link" href="logout.php">logout</a>
            <?php else: ?>
              <a class="link" href="login.php">login</a>
            <?php endif; ?>
          </div>
        </div>          
          </div>

        </div>
      </div>
      </div>
  </div><?php

	$place = $_POST['place'];

	if(!empty($place)){
		$query = "select * from place where place Like '%$place'";
		$run = mysql_query($query);

		if($run){
			if(mysql_num_rows($run)==0){
				echo "No reviews posted for the place yet!!";
			}
			while($row = mysql_fetch_array($run)){
				echo "<h3 style='background: #1ab188'><center>Location: ".$row['place']."</center></h3><hr>";
				echo "<h3>Published By: ".$row['name']."</h3>";
				echo "<button class='btn btn-danger'>Crime Rating: ".$row['rating']."</button><br>";
				echo "<p><center>".$row['descp']."</center></p><hr><hr><br>";

			}
		}else{
			echo "<script>alert('Unable to fetch data, try again later');</script>";
		}
	}

?>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/loginindex.js"></script>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>