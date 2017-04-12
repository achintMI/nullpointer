<?php include('head.php'); ?>
<?php include('navigation.php');?>
   
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="index.php"><img src="img/logo1.png" height="70px" width="70px" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav" >
            <a href="index.php" style="padding-right: 20px">Home</a> 
            <a href="placeSearch.php" style="padding-right: 20px">Search Place</a> 
            <a href="#contact" style="padding-right: 20px">Contacts</a>
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
      <?php include('slider.php');?>
    </header>
    
    <?php include('mapWithPhone.php');?>
    
    <section id="main-info" class="pad-xl" style="background: white">
	    <div class="container">
		    <div class="row">
			    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
				    <hr class="line purple">
				    <h3>SEARCHING || STEP 1</h3>
				    <p>Enter your current location and the location of the place you want to go, you can directly search for a place of your interest.</p>
			    </div>
			    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
				    <hr  class="line blue">
				    <h3>GEETING SAFE || STEP 2</h3>
				    <p>Have the complete review of the place searched or the route selected including - Safer time to travel, Another more safer route to travel, How much dangerous the place is,  Incidences that had happened over there.</p>
			    </div>
			    <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
				    <hr  class="line yellow">
				    <h3>HELPING OTHERS || STEP 3</h3>
				    <p>If you have suffered then don't let the others to suffer the same. Log In and give the complete review of the place visited and the incidence that happened there. Your name will be hidden if you want it so.</p>
			    </div>
		    </div>
	    </div>
    </section>
        
        
    <section id="pricing" class="pad-lg">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2 class="white">Find Solutions</h2>
            <p class="white">Search the place, explore it and don't commit the same what others did, check the reviews before hand</p>
          </div>
        </div>
        
        <div class="row margin-50">
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
                
                <li class="headline"><h5 class="white">Destination</h5></li>
                
                <li class="last btn btn-danger btn-wide"><a href="location.php"><input type="submit" value="Find Route" name="submit"></a></li>
                <div class="imagesStyle1"></div>
                <li class="headline"><h5 class="white">Know the to proper route to travel</h5></li>

    				</ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.2s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
                
                <li class="headline"><h5 class="white">Places</h5></li>
                <li class="last btn btn-danger btn-wide"><a href="placeSearch.php"><input type="submit" value="Search Place" name="submit"></a></li>
                <div class="imagesStyle2"></div>
                <li class="headline"><h5 class="white">Before you travel explore the place</h5></li>
                
            </ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
    					<li class="headline"><h5 class="white">Review</h5></li>
    					<li class="last btn btn-danger btn-wide"><a href="review.php"><input type="submit" value="Compose Review" name="submit"></a></li>
    					<div class="imagesStyle3"></div>
              <li class="headline"><h5 class="white">Read or Write the review of different place</h5></li>
    				</ul>
          </div>
          
        </div>
        
    </section>
    
    
    <section id="invite" class="pad-lg light-gray-bg">
      <div class="container" id="contact">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <i class="fa fa-envelope-o margin-40"></i>
            <h2 class="black">Mail us</h2>
            <br />
            <p class="black">Please let us know the things you want to see in this site</p>
            <br />
            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form role="form">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    <textarea class="form-control" placeholder="Enter your message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    
    <footer>
      <div class="container">
        
        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Connect with us on</li>
              <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          
          <div class="col-sm-4 text-right">
            <p><small>Copyright &copy; 2017. All rights reserved to NullPointers <br></small></p>
          </div>
        </div>
        
      </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

   
    </body>
</html>