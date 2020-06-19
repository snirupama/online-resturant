<?php
$conn=mysqli_connect("localhost","root","","online-res");
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
$b=$_POST['reglocation'];
echo "$b";
echo "<br/>";
$c=$_POST['regaddress'];
echo "$c";
echo "<br/>";
$d=$_POST['regpic'];
echo "$d";
$up="update form set name='$a',reglocation='$b',regaddress='$c','regpic='$d' where id=$upid";
?>