<?php

require"connection.php";

?>
<html>
<head>
<title>SIGN-UP</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>

 
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
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	
	
	$sql="insert into `register` values (null,'$name','$email','$mobile','$gender','$city','$password','$repassword')";
	$query=mysql_query($sql)||die("error from register insert query");
	


}


?>









<center>
<div id="errorBox"></div>
<form class="registration_form" action="register.php" method="POST" name="register" onsubmit="check()">

<fieldset style="width:30%"><legend>SIGN-UP</legend> 

<table border="0" > 
<tr> 
 <td><input type="text" name="name" placeholder="Name"><br></td> 
 </tr> <br>
 <tr> 
 <td>
 <input type="text" name="email" placeholder="Email"><br></td>
 </tr> 
 <tr>
 <td> <input type="text" name="mobile" placeholder="Mobile"><br></td>
 </tr> 
 <tr> 
 <td align="center">
 <input type="radio" name="gender" value="male">MALE
 <input type="radio" name="gender" value="female">FEMALE   <br>
 </td>
 </tr>
 <tr>
 <td align="center"> <br><select name="city">
					 <option value="" selected>select city</option>
					 <?php
					 
					 $sql="select * from `citytable`";
					 $query=mysql_query($sql);
					 while($row=mysql_fetch_array($query)){
					 echo "<option>$row[cityname]</option>";
					 }
					 ?></td>
 </tr>
 <tr> 
 <td><br><input type="password" name="password" placeholder="password"><br></td>
 </tr>
 <tr>
 <td><input type="password" name="repassword" placeholder="confirm password"><br></td>
 </tr>
 <tr>
 <td align="center"><input id="button" type="submit" name="submit" value="Sign-Up"><br></td>
 </tr> 
 </form> 
 </table> 
 </fieldset>
<br>





<?php
/*if($query==1)
	{
echo"REGISTERED SUCCESSFULLY";

}

else{

echo "NOT REGISTERED SUCCESSFULLY";

}*/

include "footer.php";


?>
</body>
</html>