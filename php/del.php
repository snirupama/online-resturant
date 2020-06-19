<?php
$conn=mysqli_connect("localhost","root","","php2");
if(!$conn)
{
	echo "connection failed";
	}
	else
	{
		echo "connection ok";
	}
	$delid=$_REQUEST['id'];
	echo $delid;
	$del="delete from form where id=$delid";
	if(mysqli_query($conn,$del))
	{
		header("location:show.php");
	}
	else
	{
		echo "data not deleted";
	}

?>