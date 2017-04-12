<?php include('head.php'); ?>
<?php include('navigation.php');?>
<div>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="index.php"><img src="img/logo1.png" height="70px" width="70px" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav" >
            <a href="index.php/" style="padding-right: 20px">Home</a> 
            <a href="placeSearch.php" style="padding-right: 20px">Search Place</a> 
            <a href="#" style="padding-right: 20px">Contacts</a>
            <a href="login.php"> Sign in</a>
          </div>
        </div>          
          </div>

        </div>
      </div>
      </div>
  </div>
<?php
	$org = $_POST['org'];
	$des = $_POST['des'];
	if(!empty($org) && !empty($des)){
		
		?>
		 <a href="https://www.google.com/maps/dir/<?php echo $org; ?>,+India/<?php echo $des;?>" type="button" class="btn btn-primary btn-block">Click here to view your results</a>
		<?php
    echo "<center style='backgroud: #1ab188'><h3><a class='btn btn-primary btn-wide' href='review.php'>Click here to get area details</a></h3></center>";
	}

?>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/loginindex.js"></script>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>