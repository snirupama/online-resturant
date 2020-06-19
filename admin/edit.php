<?php
$conn=mysqli_connect("localhost","root","","online-res");
if(!$conn)
{
	echo "connection failed";
	}
	else
	{
		//echo "connection ok";
	}
	$editid=$_REQUEST['id'];
	echo $editid;

	$sel="select* from regres where id=$editid";
	$res=mysqli_query($conn,$sel);
	$row=mysqli_fetch_array($res,MYSQL_BOTH);
	?>
<html>
<head>
</head>
<body>
<fieldset>
<legend>EDIT</legend>
<form action="update.php" method=post>
name:<input type="text" name="name" value="<?php echo $row["1"];?>"/><br/><br/>
reglocation:<input type= "text" name="reglocation" value="<?php echo $row["2"];?>"/><br><br>
regaddress:<input type="text" name="regaddress" value="<?php echo $row["3"];?>"/><br><br><br>
regpic:<input type="file" name="regpic" value="<?php echo $row["4"];?>"/><br><br><br>
<input type="submit" value="update"></form>
</body>
<html>