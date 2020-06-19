<html>
<head>
</head>
<body>
<form action="demo5.php" method="post">
<legend>Registration</legend>
<fieldset style="width:50%">
Name:<input type="name" name="name"><br/><br/>
Email:<input type="email" name="email"><br/><br/>
Password:<input type="password" maxlength="8" name="pass"><br/><br/>
Dob:<input type="date" name="dob"><br/><br/>
Address:<input type="address" name="address"><br/><br/>
Gender:<input type="radio" value="male" name="gender">male
<input type="radio" value="female" name="gender">female<br/><br/>
Hobbies:<input type="checkbox" name="hobby[]"value="playing">playing
<input type="checkbox" name="hobby[]" value="singing">singing
<input type="checkbox" name="hobby[]"value="dancing">dancing
<input type="checkbox" name="hobby[]"value="sleeping">sleeping
<input type="checkbox" name="hobby[]"value="crying">crying<br/><br/>
city:<select name="op">
<option>lucknow</option>
<option>faizabad</option>
<option>aminabad</option>
<option>mumbai</option>
</select><br/><br/>
<input type="submit" value="register">
</form>
</body>
</html>
