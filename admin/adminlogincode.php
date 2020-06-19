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
$a=$_POST['email'];
echo "$a";
echo "<br/>";
$b=$_POST['pass'];
echo "$b";
echo "<br/>";
$sel="select * from admin where adminemail='$a' or adminpass='$b'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
if(!$row)
{
	echo "emailid and password both are wrong";
}
else
   {
	if($row[1]==$a)
	{
		if($row[2]==$b)
        {
        	session_start();
        	$_SESSION['user']=$a;
			header("location:dashboard.php");
		}
		else{
			echo "password is wrong";
		}
	}
	else
	{
      echo "emailid is wrong";
  }
}

?>