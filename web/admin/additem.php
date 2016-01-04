<?php
require"connection1.php";
include"check1.php";
include"header.php";
	
?>
<?php

if($_POST['submit'])
{
$category=implode("-",$_POST['catg']);
$subcategory=$_POST['subcatg'];
$itemno=$_POST['item'];
$name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['desc'];

@mkdir("../file");
$path=("../file/").time().$_FILES[pic][name];
copy($_FILES[pic][tmp_name],$path);

$data="insert into `items` values(null,'$category','$subcategory','$path','$itemno','$name','$price','$desc')";

$query=mysql_query($data)||die("ERROR FROM INSERT QUERY!");

if($query=1)
{
header("location:additem.php?msg=1");

}



}




?>

<html>
<body>
<center>
<br>
<H3><U>Add item</U></H3>
<form method="POST" action="additem.php" enctype="multipart/form-data">
<table border="1" align="center" height=200 width=200>
<tr>
<td>category</td>
	<td>
	<?php
	$sql1="select * from `category`";
	$query1=mysql_query($sql1);
	while($row1=mysql_fetch_array($query1))
	{
	
	echo"<input type='checkbox' name='catg[]' value='$row1[catid]'>$row1[category]";
	
	}

	?>
	</td>
</tr>
<tr>
<td>subcategory</td>
	<td><select name="subcatg">
	<option selected>  </option>
	<?php
	$sql2="select * from `subcategory` ";
	$query2=mysql_query($sql2);
	while($row2=mysql_fetch_array($query2))
	{
	
	echo"<option value='$row2[subcategory]'>$row2[subcategory]</option>";
	
	}

	?>
	</select>
	</td>
</tr>
<tr>
    <td>item no</td>
	<td><input type="text" name="item" ></td>
</tr>
<tr>
    <td>name</td>
	<td><input type="text" name="name" ></td>
</tr>
<tr>
    <td>price</td>
	<td><input type="text" name="price" ></td>
</tr>
<tr>
    <td>Description</td>
	<td><textarea name="desc" rows="3" cols="31" ></textarea></td>
</tr>
<tr>
     <td>image</td>
	<td><input type="file" name="pic"></td>
</tr>
<tr>
    <td colspan='2' align="center"><input type="submit" name="submit" ></td>
	
</tr>
</table>
</form>
</center>
</body>
</html>

<?php

if($_GET[msg]=="1")
{
	echo"<center>item inserted</center>";
}
if($_GET[msg]=="2")
{
	echo"<center>item not inserted</center>";
}	

?>



