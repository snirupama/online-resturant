<?php
session_start();
$sesid=$_SESSION['user'];

date_default_timezone_Set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

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
	$up="update login set logoutdatetime='$datetime',logstatus='false' where logemail='$sesid'";
	if(mysqli_query($conn,$up))
	{
		session_destroy();
		header("location:index.php");
	}
	else{
		echo "logout failed";
	}
}
?>