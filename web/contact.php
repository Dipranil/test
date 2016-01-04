<?php

require"connection.php";

?>
<html>
<head>
<title>PLANT NURSERY</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
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
		 namespace: "callbacks",
      });
    });
  </script>
<script>
function check()
{
	
	
	
	
	
	
	
	
}





</script>
</head>
<body>
<?php


include "header.php";


?>

<?php
if($_POST['submit'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	
	$sql="insert into `contactus` values('$name','$email','$mobile','$message')";
	$query=mysql_query($sql)||die("error into contactus insert query");
	
}




?>






<center>
<form method="POST" action="contact.php" name="contact" onsubmit="contact()" class="registration_form">
<fieldset style="width:30%">
<legend>CONTACT US</legend> 
<table border="0"> 
<tr> 
 <td><input type="text" name="name" placeholder="Name"><br></td> 
 </tr> 
 <tr> 
 <td>
 <input type="text" name="email" placeholder="Email"><br></td>
 </tr>
  <tr> 
 <td>
 <input type="text" name="mobile" placeholder="Mobile"><br></td>
 </tr>
 <td>
 <textarea name="message" placeholder="Message" rows="6" cols="35"></textarea><br></td>
 </tr>
  <tr>
 <td align="center"><br><input id="button" type="submit" name="submit" value="SUBMIT"><br></td>
 </tr> 
</center>
</table>
</form>
</fieldset>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="locations">				 
				  <ul>
					 <li><span></span></li>					 					
					 <li>
						 <div class="address-info">	
							 <h4>New York, Washington</h4>
							 <p>10-765 MD-Road</p>
							 <p>Washington, DC, United States,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a href="mailto:info@example.com">info(at)example.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>	
						 </div>
					 </li>				
				  </ul>		
			 </div>			 
		 </div>
	 </div>
</div>
<?php


include "footer.php";


?>
</body>
</html>
