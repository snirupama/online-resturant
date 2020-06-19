<?php
session_start();
 echo $sesid=$_SESSION['user'];
$conn=mysqli_connect("localhost","root","","online-res");
if(!$conn)
{
	echo "error";
}
else
{
	//echo "ok";
}
if(!$sesid){
	
	echo "session error";
}
else{
	session_destroy();
header("location:admin.php");
	}
	

?>