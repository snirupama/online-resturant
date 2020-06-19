<html>
<head>
  <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width,initial-scale=1"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
   <!--Linking of bootstrap Library -->
   <link href="../css/admin.css" rel="stylesheet"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link href="../css/bootstrap.css" rel="stylesheet"/>
   <script src="../js/jquery-3.3.1.min.js"></script>
   <script src="../js/bootstrap.js"></script>
</head>
<body class="bg">
<div class="container-fluid">
 <div class="row">
  <div class="col-md-4 col-sm-4 colo-xs-12">
  </div>
  <div class="col-md-4 col-sm-4 colo-xs-12">
    <form action="adminlogincode.php" method="post" id="log">
     <h1 class="heading"> Admin Login </h1>
      <div class="form-group">
       <label>Email</label>
       <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" class="form-control"  name="pass" placeholder="Password">
      </div>
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-info btn-block">Login</button>
      
    </form>
  </div>



  <div class="col-md-4 col-sm-4 colo-xs-12"></div>
  
  </div>
 </div>
</body>
</html>