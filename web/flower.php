<?php

require"connection.php";

?>
<html>
<head>
<title>flowers</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

  
</head>
<body>
<?php


include "header.php";


?>	 
			<h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Flowers plants</h4>	
			<?php

$sql2="select * from `items` where `catg`='1' and `subcatg`='flower plants'";
echo"<form method='POST' action=''><table border='0' align='center'><tr>";
$query2=mysql_query($sql2);
$n=0;
while($row2=mysql_fetch_array($query2))
{
	if($n%3==0)
	{
		echo "</tr>";
	
	}
	echo "
   <td height='280' width='240' align='center'><img src='file/$row2[image]' height='200' width='200'><a href='single.php?uid=$row2[uid]'><br/>
  
 
   <br><b>Name:</b>".$row2['name'].
   "<br><b>Price:</b>Rs&nbsp;".$row2['price']."
   </td>";
    $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>
		

</body>

<?php


include "footer.php";


?>
</html>