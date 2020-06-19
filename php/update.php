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
$d=$_POST['num'];
echo "$d";
$_up="update form set name='$a',email='$b',pass='$c',num='$d' where id=$upid";
?>