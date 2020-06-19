<?php

$conn=mysqli_connect("localhost","root","","online-res");


$ids=$_REQUEST['id'];

$sel="select * from booktable where id=$ids";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

$mob=$row['7'];
//echo $mob;
$msg=urlencode("hi ".$row['5']." Your Order is Recived");
//echo $msg;


$api="http://sendsms.sandeshwala.com/API/WebSMS/Http/v1.0a/index.php?username=AshokYadav&password=AshokYadav&sender=EVSHOP&to=$mob&message=$msg&reqid=1&format={json|text}&route_id=205";
if(file_get_contents($api))
{
	echo "msg send";
}
else
{
	echo "msg not send";
}



?>