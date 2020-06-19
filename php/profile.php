<?php
session_start();
$sesid=$_SESSION['user'];
 echo"<h1>welcome to profile page</h1>";
 echo "<a href='logoutcode.php'>Logout</a>";
 echo "<br/>";
 echo "<a href='changepassword.php'>Change password</a>";
 
 


?>