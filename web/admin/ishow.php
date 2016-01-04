<?php

include"connection1.php";
include"check1.php";
require"header.php";

?>
<?php
if($_GET[del])
{
	$del="select * from `items` where `uid`='$_GET[del]'";
	$query3=mysql_query($del)||die("ERROR FROM SELECT QUERY IN DELETE!");
	$row3=mysql_fetch_array($query3);
	unlink($row3['image']);
	
	$del1="delete from `items` where `uid`='$_GET[del]'";
	$query4=mysql_query($del1)||die("error from delete query");
	header("location:ishow.php");
}



?>
<?php

if($_POST[usub])
{

$catg=implode("-",$_POST[ucategory]);


$subcatg=$_POST[usubcategory];
$itemno=$_POST[uitemno];
$name=$_POST[uname];
$price=$_POST[uprice];
$desc=$_POST[udescription];

if(empty($_FILES[uimage][name]))
{
			$sql3    = "select * from `items` where `uid`='$_POST[hid]'";
			$query3  = mysql_query($sql3);
			$row3	 = mysql_fetch_array($query3);
			$path01	 = $row3['image'];
	
}
else
		{
			$sql4	 = "select * from `items` where `uid`='$_POST[hid]'";
			$query4=  mysql_query($sql4);
			$row4	 =  mysql_fetch_array($query4);
			            unlink($row4['image']);
			$path01	 =  "../file/".time().$_FILES[uimage][name];
						copy($_FILES[uimage][tmp_name],$path01);
	
	
		}
		$sql5 = "update `items` set `catg`='$catg',`subcatg`='$subcatg',`image`='$path01',`itemno`='$itemno',`name`='$name',`price`='$price',`description`='$desc' where `uid`='$_POST[hid]'";
		
		mysql_query($sql5);
		header("location:ishow.php");
}
?>


<br>
<html>
<body>
<center>
	<center>
		<h2>SHOW AND UPADATE</h2>
	</center>
	<table border="2">
		<tr>
			<th>uid</th>
			<th>category</th>
			<th>subcategory</th>
			<th>image</th>
			<th>itemno</th>
			<th>name</th>
			<th>price</th>
			<th>description</th>
			<th>Action</th>
		</tr>
<?php
	
	$sql="select * from `items`";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
			{
				if($_GET[upd]==$row[uid])
					{
						echo"<form method='POST' action='ishow.php' enctype='multipart/form-data'>
						<tr>
						<td><input type='hidden' name='hid' value='$row[uid]'></td>
						<td>";
						
						$category=explode("-".$row[catg]);
						$sql1="select * from `category`";
						$query1=mysql_query($sql1);
							while($row1=mysql_fetch_array($query1))
							{
								if(in_array($row1[category],$category))
								{
									print"<input type='CHECKBOX' name='ucategory[]' value='$row1[catid]' selected >$row1[category]";
								}
								else
								{
									print"<input type='CHECKBOX' name='ucategory[]' value='$row1[catid]'>$row1[category]";
								}
							}
						
						echo"</td>
						<td>
						<select name='usubcategory'>
						<option value='select'>SELECT</option>";
						
						$sql2="select * from `subcategory`";
						$query2=mysql_query($sql2);
							while($row2=mysql_fetch_array($query2))
							{
								if($row[subcatg]==$row2[subcategory])
								{
									echo"<option value='$row2[subcategory]' selected>$row2[subcategory]";
								}
								else
								{
									echo"<option value='$row2[subcategory]'>$row2[subcategory]";
								}
							}
						echo"</td>
						
						<td><img src='$row[image]' height=100 width=100><input type='file' name='uimage'></td>
						<td><input type='text' name='uitemno' value='$row[itemno]'></td>
						<td><input type='text' name='uname' value='$row[name]'></td>
						<td><input type='text' name='uprice' value='$row[price]'></td>
						<td><input type='text' name='udescription' value='$row[description]'></td>
						<td><input type='submit' name='usub' value='edit'></td>
						</tr>
						</form>
						";
					
					
					}
			else
			{
				echo"<tr>
				<td>$row[uid]</td>
				<td>$row[catg]</td>
				<td>$row[subcatg]</td>
				<td><img src='$row[image]' height=100 width=100></td>
				<td>$row[itemno]</td>
				<td>$row[name]</td>
				<td>$row[price]</td>
				<td>$row[description]</td>
				<td ><a href='ishow.php?upd=$row[uid]'>UPDATE</a>|<a href='ishow.php?del=$row[uid]'>DELETE</a><td>
				
				
				</tr>";
				
			}
			}
?>
</table>
</center>
</body>
</html>
