<?php
session_start();
$sesid=$_SESSION['user'];
date_default_timezone_Set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");
$conn=mysqli_connect("localhost","root","","php1");
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
	$up="update login set logoutdatetime='$datetime',logstatus='false' where logemail='$sesid'";
	if(mysqli_query($conn,$up))
	{
		header("location:login.php");
	}
	else{
		echo "logout failed";
	}
}
?>