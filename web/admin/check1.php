<?php


require"connection1.php";

?>
<?php
session_start();
if($_SESSION[check1]!=true)
{
	header("location:login.php?msg=3");
}
?>


