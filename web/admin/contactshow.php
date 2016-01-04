<?php

require"connection1.php";
include"check1.php";
include"header.php";
?>

<?php

$sql="select * from `contactus`";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
	
?>
<h1><center>CONTACT US</center></h1>
<table border="3" align="center">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
</tr>
<?php
echo"<tr><td>$row[name]</td>
<td>$row[email]</td>
<td>$row[phone]</td>
<td>$row[message]</td>
</tr>";



?>

<?php	
}
?>