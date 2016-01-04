<center>
<?php
	error_reporting(~E_ALL & ~E_NOTICE);
	mysql_connect("localhost","root","") or die ("CONNECTION ERROR!");
	mysql_select_db("st") or die ("DATABASE ERROR!") ;
?>
<?php
	if($_POST['name'])
	{
		$name    =	$_POST['name'];
		$address =	$_POST['address'];
		$gender  =	$_POST['gender'];
		$city	 =	$_POST['city'];
		$skills  =	implode("-", $_POST['checkbox']);

		@mkdir("folder");
		$path = "folder/".time()."_".$_FILES[pic][name];
		copy($_FILES[pic][tmp_name],$path);

		$sql = "insert into `table` values('','$name','$address','$gender','$city','$skills','$path')";
		$query = mysql_query($sql) or die ("ERROR FROM INSERT QUERY!");
		header("location:all.php?msg=1");

		
	}
?>
<?php
	if($_GET[del])
	{
		$sql   =  "select * from `table` where `id`='$_GET[del]'";
		$query =  mysql_query($sql) or die("ERROR FROM SELECT QUERY IN DELETE!");
		$row   =  mysql_fetch_array($query);
				  unlink($row['file']);

		$sql   = "delete from `table` where `id`='$_GET[del]'";
				 mysql_query($sql) or die ("ERROR FROM DELETE QUERY");
				 header("location:all.php?msg=2");
	}
?>

<?php
	if($_POST[uname])
	{
		$uid		=	$_POST[uid];
		$uname		=	$_POST[uname];
		$uaddress	=	$_POST[uaddress];
		$ugender	=	$_POST[ugender];
		$ucity		=	$_POST[ucity];
		$uskills	=	implode("-",$_POST[ucheckbox]);

		if(empty($_FILES[upic][name]))
		{
			$sql3    = "select * from `table` where `id`='$_POST[uid]'";
			$query3  = mysql_query($sql3) or die("ERROR FROM SELECT QUERY INSIDE UPDATE QUERY IN EMPTY CHECKING!");
			$row3	 = mysql_fetch_array($query3);
			$path1	 = $row3['file'];
			
		}
		else
		{
			$sql4	 = "select * from `table` where `id`='$_POST[uid]'";
			$query4	 =  mysql_query($sql4) or die("ERROR FROM $sql4!!");
			$row4	 =  mysql_fetch_array($query4);
			            unlink($row4['file']);
			$path1	 =  "folder/".time()."_".$_FILES[upic][name];
						copy($_FILES[upic][tmp_name], $path1);
		}
		$sql5 = "update `table` set `name`='$uname',`address`='$uaddress',`gender`='$ugender',`city`='$ucity',`skillset`='$uskills',`file`='$path1' where `id`='$uid'";
		
		mysql_query($sql5) or die("ERROR FROM UPDATE QUERY!");
		header("location:all.php?msg=3");

	}
?>
<H1><U>FORM!</U></H1>
<form method="POST" action="all.php" enctype="multipart/form-data">
	<table border="10">
		<tr> 
		    <td>NAME</td>
			<td><input type="text" name="name" style="width:238px;"></td>
		</tr>
		<tr>
			<td>ADDRESS</td>
			<td><textarea name="address" rows="3" cols="31"></textarea></td>
		</tr>
		<tr>
			<td>GENDER</td>
			<td><input type="radio" name="gender" value="male">MALE &nbsp; <input type="radio" name="gender" value="female">FEMALE</td>
		</tr>
		<tr>
			<td>CITY</td>
			<td>
				<select name="city">
					<option value="select">SELECT</option>
					<?php
						$sql1 = "select * from `citytable`";
						$query1 = mysql_query($sql1) or die("ERROR FROM SELECT QUERY OF CITY IN FORM!");
						while($row1 = mysql_fetch_array($query1))
						{
							echo"<option value='$row1[cityname]'>$row1[cityname]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>SKILLS</td>
			<td>
				<?php
					$count = 0;
					$sql2 = "select * from `skilltable`";
					$query2 = mysql_query($sql2) or die ("ERROR FROM SELECT QUERY OF SKILLS IN FORM!");
					while($row2 = mysql_fetch_array($query2))
					{
						$count++;
						echo"<input type='CHECKBOX' name='checkbox[]' value='$row2[skillname]'> $row2[skillname] &nbsp;";
						if($count%2==0)
						{
							echo"<br>";
						}
					}

				?>
			</td>
		</tr>
		<tr>
			<td>FILE</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="sub" value="SUBMIT"></td>
		</tr>

	</table>
</form>
<HR>
<H1><U>SHOW AND UPDATE!</U></H1>
	<table border="10">
		<tr>
			<th>NO</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>GRNDER</th>
			<th>CITY</th>
			<th>SKILLS</th>
			<th>FILES</th>
			<th>ACTION</th>
		</tr>
		<?php
			$c = 0;
			$sql   = "select * from `table`";
			$query = mysql_query($sql) or die("ERROR FROM SELECT QUERY IN SHOW!");
			while($row = mysql_fetch_array($query))
			{
				$c++;
				if($_GET[upd] == $row[id])
				{
					echo"<form method='POST' action='all.php' enctype='multipart/form-data'>
							<tr>
								<td><input type='hidden' name='uid' value='$row[id]'></td>
								<td><input type='text' name='uname' value='$row[name]'></td>
								<td><textarea name='uaddress' rows='3' cols='25'>$row[address]</textarea></td>
								<td>";
								if($row[gender]=="male")
									{
										print"<input type='radio' name='ugender' value='male' checked>Male 
										      <input type='radio' name='ugender' value='female'>Female";
									}
								else
									if($row[gender]=="female")
									 {
                                       print"<input type='radio' name='ugender' value='male'>Male
									         <input type='radio' name='ugender' value='female' checked>Female";
								     }
									 else
										{
										 print"<input type='radio' name='ugender' value='male'> Male
										       <input type='radio' name='ugender' value='female'>Female"; 
										}
									
								echo"</td>
								  <td><select name='ucity'>
								  <option value='select'>SELECT</option>";
									 $sql1  = "select * from `citytable`";
								 	 $query1 = mysql_query($sql1) or die ("ERROR FROM SELECT QUERY OF CITY IN UPDATE FORM");
									 while($row1 = mysql_fetch_array($query1))
									  {
										 if($row[city]==$row1[cityname])
										  {
											 print"<option value='$row1[cityname]' selected>$row1[cityname]</option>";
										  }
										  else
										  {
											  print"<option value='$row1[cityname]'>$row1[cityname]</option>";
										  }
									  }
								  
								  echo"</td>
										<td>";
										$skillset = explode("-",$row[skillset]);
										$sql2   = "select * from `skilltable`"; 
										$query2 = mysql_query($sql2) or die("ERROR FROM SELECT QUERY OF SKILLS IN UPDATE FROM");
										while($row2 = mysql_fetch_array($query2))
										{
											if(in_array($row2[skillname],$skillset))
											{
												print"<input type='CHECKBOX' name='ucheckbox[]' value='$row2[skillname]' CHECKED>$row2[skillname]";
											}
											else
											{
												print"<input type='CHECKBOX' name='ucheckbox[]' value='$row2[skillname]'>$row2[skillname]";
											}

										}
										
									echo"</td>
									     <td><img src='$row[file]' height='50' width='50'><input type='file' name='upic'></td>
										 <td align='center'><input type='submit' name='edit' value='UPDATE'></td>
										    

							</tr>
						</form>";
				}
				else
				{
				echo"<tr>
						<td>$c</td>
						<td>$row[name]</td>
						<td>$row[address]</td>
						<td>$row[gender]</td>
						<td>$row[city]</td>
						<td>$row[skillset]</td>
						<td><img src='$row[file]' width='50' height='50'></td>
						<td><a href='all.php?del=$row[id]'>DELETE</a> | <a href='all.php?upd=$row[id]'>UPDATE</a></td>

					</tr>";
				}
			}

		?>
	</table>
</center>