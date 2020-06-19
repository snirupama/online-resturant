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

$a=$_POST['name'];
//echo "$a";
echo"</br>";
$b=$_POST['location'];
//echo "$b";
echo"</br>";
$c=$_POST['add'];
//echo "$c";
$d=$_POST['price'];
//echo "$d";


echo  $pic=$_FILES['pic']['name'];
echo $temname=$_FILES['pic']['tmp_name'];

$ext=pathinfo($pic,PATHINFO_EXTENSION);
$t=time();
$newpic=$t.".".$ext;
echo $ins="insert into regres(name,reglocation,regaddress,regpic,price) values('$a','$b','$c','$newpic','$d')";
if($query=mysqli_query($conn,$ins)){
	move_uploaded_file($temname, "images/".$newpic);
	header("location:add-resturant.php");
	
}else{
	echo "not ok";
}

?>