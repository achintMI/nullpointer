
<?php 
		include('head.php'); 
	 	include('navigation.php');?>
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
  </div>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Write a Review</a></li>
        <li class="tab"><a href="#login">Read a Review</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Write the review of a place</h1>
          
          <form action="publish.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Place<span class="req">*</span>
              </label>
              <input type="text" name="place"  required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Rating<span class="req">*</span>
            </label>
            <input type="text" name="rating" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Description<span class="req">*</span>
            </label>
            <input type="text" name="desc" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>publish</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="read.php" method="post">
          
            <div class="field-wrap">
            <label>
              Place<span class="req">*</span>
            </label>
            <input type="text" name="place" required autocomplete="off"/>
          </div>
                    
          <button class="button button-block"/>Find Review</button>
          
          </form>

        </div>
        
      </div>
      
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