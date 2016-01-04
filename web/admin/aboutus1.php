<?php

require"connection1.php";
include"check1.php";
?>
<?php
$sql01="select * from `ckeditor`";
$query01=mysql_query($sql01);
$row01=mysql_fetch_array($query01);
?>
<?php
if($_POST[sub])
{
$a=$_POST['abt'];

$s="update `ckeditor` set `pagecontents`='$a' where `id`='1'";
$query=mysql_query($s);
header("location:aboutus1.php");

}

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

<!-- CKEDIOR START -->

 <script src="ckeditor/ckeditor.js"></script>

<!-- CKEDIOR STop -->



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
<form method="POST" action="aboutus1.php" name="f1">
<h3>Welcome To Our Website</h3>
<textarea name="abt" class="ckeditor">

<?php echo"<p>$row01[pagecontents]</p>";?>
</textarea>
<input type="submit" name="sub">
</body>
</form>
</center>

<?php


include "footer.php";


?>