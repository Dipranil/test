<?php
	error_reporting(0);
	mysql_connect("localhost","root","")||die("connection fail");
	mysql_select_db("minipro")||die("wrong database");
	session_start();
?>