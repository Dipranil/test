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
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
  
</head>
<body>
<?php


include "header.php";


?>

<?php
if($_POST['submit'])
{
	$user=addslashes($_POST['user']);
	$password=addslashes($_POST['password']);
	
	$sql="select * from `register` where `email`='$user' and `password`='$password'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	
	if(!$row)
	{
		
		header("location:login.php?msg=1");
	}
	
	else
	{ 
	
		$_SESSION[id]=$row[id];

		$_SESSION[check]=true;
		header("location:welcome.php");
	}
	
}



?>

<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form action="login.php" method="POST">
					 <h5>E-mail</h5>	
					 <input type="text" name="user">
					 <h5>Password:</h5>
					 <input type="password" name="password">					
					 <input type="submit" value="Login" name="submit">
					  <a href="#">Forgot Password </a>
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="register.php">Create an Account</a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
</body>


<?php
if($_GET[msg]=="1")
{
	echo "<center>wrong username or password</center>";
}
if($_GET[msg]=="2")
{
	echo "<center>logged out....</center>";
}
if($_GET[msg]=="3")
{
	echo "<center>login first.....</center>";
}
?>

<?php


include "footer.php";


?>
</html>