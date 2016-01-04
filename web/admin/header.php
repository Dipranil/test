<?php

require"connection1.php";
include"check1.php";
?>

<link href='css/style.css' rel='stylesheet'>

<div class='header'>
   <div class='logo'>
     <a id='log' href='home.php'><img src='css/logo1.png' height='65' width='150'></a>
			</div>
			<div class='background'></div>
			
			<?php
			if($_SESSION[id])
			{
				$sql="select * from `admin` where `uid`='$_SESSION[id]'";
				$query=mysql_query($sql);
				while($row=mysql_fetch_array($query))
				{
					echo "<h1 id='welcome_text'>welcome,".$row[name]."</h1>";
					echo "<a id='logout' href='logout.php'><img src='css/logout.jpg' height='65' width='95'></a>";
				}
			}
			
			
			
			?>
			</div>