<html>
<?php
$conn=mysqli_connect("localhost","root","","online-res");
if(!$conn)
{
	echo "fail";
	}
	else{
		echo "ok";
	}
$sel="select * from login";
$row=mysqli_query($conn,$sel); //for fire command of database or execution
 
?>
<head>
</head>
<body>
<table border="1">
<tr>
<th>Logid</TH>
<th>Logemail</TH>
<th>Logpass</TH>
<th>Logdatetime</TH>
<th>Logoutdatetime</TH>
<th>Logstatus</TH>

</tr>
<?php
while($res=mysqli_fetch_array($row,MYSQLI_BOTH))
{
	?>
<tr>
<td><?php echo $res['0']; ?></td>
<td><?php echo $res['1']; ?></td>
<td><?php echo $res['2']; ?></td>
<td><?php echo $res['3']; ?></td>
<td><?php echo $res['4']; ?></td>
<td><?php echo $res['5']; ?></td>
<td><a href="del.php? flag=2 & id=<?php echo $res['0'];?>">DELETE</a></td>
</tr>
<?php
}
?>
</table>

</body>
</html>


