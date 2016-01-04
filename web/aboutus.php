<?php

require"connection.php";

?>
<?php
$sql01="select * from `ckeditor`";
$query01=mysql_query($sql01);
$row01=mysql_fetch_array($query01);


?>
<html>
<head>
<title>PLANT Shop</title>
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

<?php


include "header.php";


?>
<center>
<body>
<h3>Welcome To Our Website</h3>
<?php echo"<p>$row01[pagecontents]</p>";?>
</body>
</center>
<?php


include "footer.php";


?>
