<?php
session_start();
$sesid=$_SESSION['user'];
$conn=mysqli_connect("localhost","root","","online-res");

if(!$conn)
{
	echo "error";
}
else
{
	//echo "ok";
}

$a=$_POST['opass'];
echo "$a";
echo"</br>";
$b=$_POST['npass'];
echo "$b";
echo"</br>";
$c=$_POST['cpass'];
echo "$c";

$sel="select * from login where logemail='$sesid' or logpass='$a'";
    $res=mysqli_query($conn,$sel);
	$row=mysqli_fetch_array($res,MYSQLI_BOTH);
	
if(!$sesid)
{
	echo "session error";
}
else{
	if($row['2']==$a)
	{
		if($b==$c)
		{
			$up="update login set logpass='$b' where logemail='$sesid'";
			if(mysqli_query($conn,$up))
			{
				header("location:index.php");
			}
		
		else{
			echo "password not change";
		}
	}
	else
	{
		echo "new password and confirm password not match";
	}
	}
	
	else{
		echo "old password not match";
		
}
	}



?>