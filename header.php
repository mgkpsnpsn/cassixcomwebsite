<!doctype html>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <!-- master custom CSS -->
    <link rel="stylesheet" href="css/master.css" />

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="css/fontello-codes.css" />
    <link rel="stylesheet" href="css/fontello-embedded.css" />
    <link rel="stylesheet" href="css/fontello.css" />

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  
	
  </head>







  <div class="container-fluid">
  <nav id="menu">
  <label for="tm" id="toggle-menu">Menu <span class="drop-icon">▾</span></label>
  <input type="checkbox" id="tm">
  <ul class="main-menu clearfix">
    <li><a href="index.php">Home</a></li>
    
    <li><a href="aboutus.php">AboutUs</a></li>
    
    
    <li><a href="#">Services 
        <span class="drop-icon">▾</span>
        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
      </a>
      <input type="checkbox" id="sm1">
      
      <ul class="sub-menu">
        
        <li><a href="#">Marketing Services
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="digital marketing services.php">Digital Services</a></li>
            <li><a href="offlinemarketingservices.php">Offline Marketing Services</a></li>
            </ul>
            </li>
            
            
            <li><a href="#">ITeS
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="itservices.php">IT Services</a></li>
            <li><a href="softwaredevelopment.php">Software Development</a></li>
            </ul>
            </li>
            
        <li><a href="processsupportservices.php">Business Process Support</a></li>
      </ul>
    </li>
    <li><a href="contactus.php">Contact Us</a></li>
    <li><a href="careers.php">Careers</a></li>
  </ul>
</nav>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
      window.onscroll = function() {myFunction()};

      var header = document.getElementById("myHeader");
      var stickynav = header.offsetTop;

      function myFunction() {
        if (window.pageYOffset > stickynav) {
          header.classList.add("stickynav");
        } else {
          header.classList.remove("stickynav");
        }
      }

      $('.carousel').carousel()
      </script>
	  <script> 
$(function(){
  $("#header").load("header.html"); 
  
});
</script>
		<script> 
$(function(){
  $("#header").load("header.html"); 
  
});
</script>




