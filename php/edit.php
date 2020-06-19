<?php
$conn=mysqli_connect("localhost","root","","php2");
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

	$sel="select* from form1 where id=$editid";
	$res=mysqli_query($conn,$sel);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
	?>
<html>
<head>
</head>
<body>
<fieldset>
<legend>registration</legend>
<form action="update.php" method=post>

id:<input type="text" name="id" value="<?php echo $row["1"];?>"/ ><br/><br/>
name:<input type="text" value="<?php echo $row["1"];?>"/><br/><br/>
mobile:<input type= "text" name="mobno" value="<?php echo $row["2"];?>"/><br><br>
email:<input type="email"name="email" value="<?php echo $row["3"];?>"/><br><br><br>
password:<input type="password"name="password" value="<?php echo $row["4"];?>"/><br><br><br>
<input type="submit" value="update"></form>
</body>
<html>