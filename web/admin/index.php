<?php

require"connection1.php";

?>

<?php
if($_POST[submit])
{
	$user=addslashes($_POST['t1']);
	$password=addslashes($_POST['p1']);

	$sql1="select * from `admin` where `name`='$user' and `pass`='$password'";
	$query1=mysql_query($sql1);
	$row1=mysql_fetch_array($query1);
	
	if(!$row1)
   {
  header("locatiom:index.php?msg=1");
  }
  else
   {
      
   $_SESSION[id]=$row1[uid];
   
   $_SESSION[check1]=true;
   header("location:home.php");
	 }
	
}
?>

<html>
<head>
<script>
function vali()
{
	var username=document.f1.t1.value;
	if(username=='')
	{
		alert("fill the username");
	  document.f1.t1.focus();
	  return false;
	}
	var password=document.f1.p1.value;
	if(password=='')
	{
		alert("fill the password");
		document.f1.p1.focus();
		return false;
	}
	
	return true;
}


</script>
</head>
<body background="banner2.jpg">
<html>
<div>
<br>
<h1 align="center">
<font face="Courier New, Courier, monospace">ADMINISTRATOR LOGIN</font>
</h1>
</div>
<div style="width:100%;float:left" align="center" >
<center><fieldset style="background:#FFFFFF;width:300;height:130">
<br>

<form method="POST" name="f1" onSubmit="return vali()" action="">
<table width="200" border="0" align="center">
<tr><td colspan="2">
</td></tr>
  <tr>
    <td width="81">UserName:</td>
    <td width="103"><label>
      <input name="t1" type="text ">
    </label></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="p1" type="password"></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center"><label>
      <input name="submit" type="submit" value="Login">
    </label></td>
   </table>
  </form>

</fieldset></center>
</div>
</html>


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