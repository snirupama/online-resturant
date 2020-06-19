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
$sel="select * from booktable";
$row=mysqli_query($conn,$sel); //for fire command of database or execution
 
?>
<head>
</head>
<body>
<table border="1">
<tr>
<th>id</th>
<th>date</th>
<th>booktime</th>
<th>tableno</th>
<th>member</th>
<th>name</th>
<th>emailid</th>
<th>mobno</th>
<th>address</th>
<th>datetime</th>
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
<td><?php echo $res['6']; ?></td>
<td><?php echo $res['7']; ?></td>
<td><?php echo $res['8']; ?></td>
<td><?php echo $res['9']; ?></td>
<td> <a href="del.php?flag=5&id=<?php echo $res['0'];?>">DELETE</a></td>
<td> <a href="sendmsgcode.php?id=<?php echo $res['0'];?>">Send Message</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>