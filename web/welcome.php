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

require"connection.php";

?>
<?php

include"check.php";

?>


<?php

$sql="select * from `register` where `id`='$_SESSION[id]'";
$query=mysql_query($sql);


$row=mysql_fetch_array($query);

echo "<font color='black'><h3>Welcome user,".$row[name]."</h3></font>";

echo "<br><a href='logout.php'>LOGOUT</a>";


?>






<?php


include "footer.php";


?>
</html>