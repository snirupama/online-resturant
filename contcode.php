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
$c=$_POST['msg'];
echo $c;
echo "<br/>";
$d=$_POST['mob'];
echo $d;
echo "<br/>";
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");
$ins="insert into contact(conname,conemail,conmob,conmsg,condatetime) values('$a','$b','$d','$c','$datetime')";
if(mysqli_query($conn,$ins))
{
	header("location:contact.php?msg=data insert");
}
else{
	echo "data not inserted";
}
?>