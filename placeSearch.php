

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
            <a href="search.php" style="padding-right: 20px">Search Place</a> 
            <a href="#" style="padding-right: 20px">Contacts</a>
            <a href="login.php"> Sign in</a>
          </div>
        </div>          
          </div>

        </div>
      </div>
      </div>
  </div>
  <div class="form">
      
      <ul class="tab-group" style="text-align: center">
        <li class="tab active"><a href="#login">Find Your Place</a></li>
      </ul>
      
      <div class="tab-content">

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="search.php" method="post">
          
            <div class="field-wrap">
            <label>
              PLACE<span class="req">*</span>
            </label>
            <input type="text" name="place" required autocomplete="off"/>
          </div>
          
          <button class="button button-block"/>FIND PLACE</button>
          
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
