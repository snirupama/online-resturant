<?php
$conn=mysqli_connect("localhost","root","","online-res");
if(!$conn)
{
	echo "error";
}
else
{
	//echo "ok";
}

$a=$_POST['name'];
echo $a;
echo "<br/>";
$b=$_POST['email'];
echo $b;
echo "<br/>";
$c=$_POST['pass'];
echo $c;
echo "<br/>";
$d=$_POST['city'];
echo $d;
echo "<br/>";
$e=$_POST['mob'];
echo $e;
echo "</br>";
$date=date("d/m/y");
date_default_timezone_Set("asia/kolkata");
$time=date("h:i:sa");
$datetime=$date." ".$time;


 
$sel="select * from signup where email='$b'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
if($row['2']==$b)
{
	echo "emailid already exists.";
	}
else
{
$ins="insert into signup(name,email,password,city,contact,datetime) values('$a','$b','$c','$d','$e','$date')";
if(mysqli_query($conn,$ins))
{
	$ins1="insert into login(logemail,logpass) values('$b','$c')";
if(mysqli_query($conn,$ins1))
{
	header("location:index.php");
}

else
{
 echo "login data not insert";
}
}
else 
{
	echo "registration insertion failed";
}	
}	
?>

