<?php
session_start();
$conn=mysqli_connect("localhost","root","","online resturant");
if(!$conn)
 {
  echo "error";
 }
else
{
  //echo "ok";
}
$a=$_POST['logname'];
echo $a;
echo "</br>";
$b=$_POST['logpass'];
echo $b;
$b=$_POST['logemail'];
echo $b;
echo "</br>";
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");
$sel="select*from login where logemail='$a'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
if($row['1']==$a)
{
  if($row['2']==$b)
  {
    $up="update login set logdatetime='$datetime',logstatus='true' where logemail='$a'";
    if(mysqli_query($conn,$up))
    {
      $_SESSION['user']=$a;
      header("location:profile.php");
    }
    else{
      echo "login failed";
    }
  }
  else{
    echo "password is wrong";
  }
}
else{
  echo "emailID wrong";
}








?>