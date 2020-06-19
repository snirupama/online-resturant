<?php
$conn=mysqli_connect("localhost","root","","php1");
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
echo "</br>";
$b=$_POST['email'];
echo $b;
echo "</br>";
$c=$_POST['pass'];
echo $c;
$d=$_POST['mob'];
echo $d;
$date=date("d/m/y");
date_default_timezone_Set("asia/kolkata");
$time=date("h:i:sa");
$datetime=$date." ".$time;


$sel="select*from registration where email='$b'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if($row['2']==$b)
{
	echo "emailid is already exists";
}
else{
	

$ins="insert into registration(name,email,password,mobile,datetime) values('$a','$b','$c','$d','$datetime')";
if(mysqli_query($conn,$ins))
{
	$ins1="insert into login(logemail,logpass) values('$b','$c')";
	if(mysqli_query($conn,$ins1))
	{
		header("location:login.php");
	}
	

else{
	echo "login insertion failed";
} 
}
else{
	echo "registration insertion failed";
}
}

?>