<?php
session_start();
$sesid=$_SESSION['user'];
if($sesid==null)
{
  header('location:dashboard.php');
}

?>
<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width,initial-scale=1"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
 <!--Linking of bootstrap Library -->
 <link href="../css/bootstrap.css" rel="stylesheet"/>
 <link href="../css/dashboard.css" rel="stylesheet"/>
 <script src="../js/jquery-3.3.1.min.js"></script>
 <script src="../js/bootstrap.js"></script>
</head>

<body>

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
        <div class="navbar-header">
      <div class="navbar-resdine">
        <font size="12">
          <a href="index.php">
            <font color="white">
              ResDine
            </font>
          </a>
        </font>
        <i class="glyphicon glyphicon-grain" style="font-size:35px;"></i>
      </div>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="alluser.php">Alluser</a></li>
      <li><a href="allcontact.php">Allcontact</a></li>
      <li><a href="alllogin.php">Alllogin</a></li>
      <li><a href="add-resturant.php">Addresturant</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="allresturant.php">Allresturant</a></li>
         <li><a href="allbooktable.php">AllBooktable</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting<span class="caret"></span></a>
           <ul class="dropdown-menu">
            <li><a href="cemail.php">Changeemail</a></li>
             <li role="separator" class="divider"></li>
                         <li><a href="cpass.php">Changepassword</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="log.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</body>

</html>