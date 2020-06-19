<?php
 $conn=mysqli_connect("localhost","root","","php1");
 if(!$conn)
 {
	 echo "connection failed";
 }
 else
 {
		 echo "connection ok";
 }
$a=$_POST['firstname'];
//echo $a;
echo "<br/>";
$b=$_POST['lastname'];
//echo $b ;
echo "<br/>";
$c=$_POST['mobno'];
//echo $c ;
echo "<br/>";
$d=$_POST['email'];
//echo $d;
echo "<br/>";
$e=$_POST['password'];
//echo $e;
$ins ="insert into form(username,useremail,userpass,usernum) values('$a','$d','$e','$c')";

mysqli_query($conn,$ins);





?>
