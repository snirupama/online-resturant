<?php
$conn=mysqli_connect("localhost","root","","online-res");
if(!$conn)
{
	echo "connection failed";
	}
	else
	{
		echo "connection ok";
	}
 echo $fl=$_REQUEST['flag'];
 
   switch ($fl)
{
  case 1:
  {$delid=$_REQUEST['id'];
	echo $delid;

	$del="delete from signup where id=$delid";
	if(mysqli_query($conn,$del))
	{
		header("location:alluser.php");
	}
	break;
}
case 2:
$delid=$_REQUEST['id'];
	echo $delid;

	$del="delete from login where logid=$delid";
	if(mysqli_query($conn,$del))
	{
		header("location:alllogin.php");
	}
	break;
	case 3:
$delid=$_REQUEST['id'];
	echo $delid;

	$del="delete from contact where conid=$delid";
	if(mysqli_query($conn,$del))
	{
		header("location:allcontact.php");
	}
	break;
	case 4:
$delid=$_REQUEST['id'];
	echo $delid;

	$del="delete from regres where id=$delid";
	if(mysqli_query($conn,$del))
	{
		header("location:allresturant.php");
	}
	break;
	case 5:
$delid=$_REQUEST['id'];
	echo $delid;

	$del="delete from booktable where id=$delid";
	if(mysqli_query($conn,$del))
	{
		header("location:allbooktable.php");
	}
	break;

	default :
	{
		echo " nothing deleted";
	}

}
?>
