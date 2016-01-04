<?php


require"connection.php";

?>
<?php
session_start();
if($_SESSION[check]!=true)
{
	header("location:login.php?msg=3");
}
?>


