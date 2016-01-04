<?php

require"connection.php";

?>

<html>
<?php



include "header.php";
 


?>
<head>
<title>PLANT NURSERY</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
  <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks"
      });
    });
  </script>
  
</head>

<!---->
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images/banner1.jpg" alt=""></li>
				  <li><img src="images/banner2.jpg" alt=""></li>
				  <li><img src="images/banner3.jpg" alt=""></li>
				  <li><img src="images/banner4.jpg" alt=""></li>
				</ul>
		 </div>
	 </div>
</div>

<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>RECOMMENDATIONS FOR YOU</h3>
		 </div>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="products.php"><img src="images/flower/Adenium.jpg" alt=""/></a>	
					 <h4><a href="products.php">Adenium</a></h4>	
					 
				 </li>
				 <li>
					 <a href="products.php"><img src="images/fruit/Cherry.jpg" alt=""/></a>	
					 <h4><a href="products.php">Cherry</a></h4>	
					 
				 </li>
				 <li>
					 <a href="products.php"><img src="images/decorative/Sansevieria Trifasciata Laurentii.jpg" alt=""/></a>
					 <h4><a href="products.php">Sansevieria Trifasciata</a></h4>	
					 
				 </li>
				 <li>
					 <a href="products.php"><img src="images/flower/Plumeria.jpg" alt=""/></a>
					 <h4><a href="products.php">Plumeria</a></h4>	
					 
				 </li>
				 <li>
					 <a href="products.php"><img src="images/flower/Pyrostegia Venusta.jpg" alt=""/></a>	
					 <h4><a href="products.php">Pyrostegia Venusta</a></h4>	
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	 </div>
	 </div>
</div>
<!---->

<!---->
</body>



<?php


include "footer.php";


?>
</html>

