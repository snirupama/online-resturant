<?php
$conn=mysqli_connect("localhost","root","","php2");
if(!$conn)
{
	echo "connection failed";
}
else{
	echo "connection ok";
}
$a=$_POST['name'];
echo "$a";
echo "<br/>";
$b=$_POST['email'];
echo "$b";
echo "<br/>";
$c=$_POST['pass'];
echo "$c";
echo "<br/>";
$d=$_POST['dob'];
echo "$d";
echo "<br/>";
$e=$_POST['address'];
echo "$e";
echo "<br/>";
$f=$_POST['gender'];
echo "$f";
echo "<br/>";
$g=implode(' ; ',$_POST['hobby']);
echo "$g";
echo "<br/>";
$h=$_POST["op"];
echo "$h";
$ins="insert into form1(name,email,pass,dob,address,gender,hobby,city) values('$a','$b','$c','$d','$e','$f','$g','$h')";
if(mysqli_query($conn,$ins))
{
	echo "data is inserted";

}
else{
	echo "data not inserted";
}
?>