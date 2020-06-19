<?php
session_start();
$conn=mysqli_connect("localhost","root","","online-res");
if(!$conn)
{
  echo "error";
}
else
{
  //echo "ok";
}
$a=$_POST['tabledate'];
echo $a;
echo "</br>";
$b=$_POST['pname'];
echo $b;
echo "<br/>";
$c=$_POST['tabletime'];
echo "c";
echo "<br/>";
$d=$_POST['email'];
echo "d";
echo "<br/>";
$e=$_POST['tableno'];
echo "e";
echo "<br/>";
$f=$_POST['mobno'];
echo "f";
echo "<br/>";
$g=$_POST['members'];
echo "g";
echo "<br/>";
$h=$_POST['address'];
echo "h";
echo "<br/>";
$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");
$ins="insert into booktable(date,booktime,tableno,member,name,emailid,mobno,address,datetime) values('$a','$c','$e','$g','$b','$d','$f','$h','$date')";
if(mysqli_query($conn,$ins))
{
header("location:index.php");

}
else
{
echo "data not inserted";
}


?>

