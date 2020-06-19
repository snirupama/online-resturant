<html>
<?php
$conn=mysqli_connect("localhost","root","","php2");
if(!$conn)
{
	echo "fail";
	}
	else{
		echo "ok";
	}
$sel="select * from form1";
$row=mysqli_query($conn,$sel);//for fire command of database or execution
 
?>
<head>
</head>
<body>
<table border="1">
<tr>
<th>SR.NO</TH> 
<th>name</TH>
<th>email</TH>
<th>password</TH>
<th>number</TH>
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
<td> <a href="del.php?id=<?php echo $res['0'];?>">DELETE</a></td>
<td><a href="edit.php">EDIT</a></td>
</tr>
<?php
}
?>
</table>

</body>
</html>