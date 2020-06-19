<html>
<head>
   <meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<!--Linking of bootstrap Library -->
<link href="css/contact.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script> 
</head>
<body>

<?php  include("nav.php"); ?>
<!---slider start-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/contact.jpg" style="height:450px;width:100%" alt="...">
      <div class="carousel-caption">
       <h1 style="font-family:Comic Sans MS;font-size:40"> We Are Here To Help You</h1>
      </div>
    </div>
    <div class="item">
      <img src="image/contact1.6.jpg" style="height:450px;width:100%" alt="...">
    </div>
    <div class="item">
      <img src="image/contact4.jpg"  style=" height:450px;width:100%" alt="...">
      </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---close slider-->

<div class="container-fluid">
<div class="row contact">
<p id="afterslide">Got something you'd like to share? We're always looking for new ways to improve the site.</p><br/><br/>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><h1 style="font-size:45px; font-weight: bold;">Contact details</h1>
<br/><p class="general">For all general queries, please email hello@resdine.com</p><br/>
<ul style="list-style type:circle">
<li class="aftergen">If you're an existing restaurant client and you have a query, please contact support.uk@bookatable.com</li><br/>
<li class="aftergen">If you're a restaurant and would like to work with us, please visit www.onlineresturant.co.in/for-restaurants</li><br/>
<li class="aftergen">If you're interested in partnering with Bookatable, please contact partners@bookatable.com</li>
</ul>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 "><h1 style="margin-left:210px;font-size:45px; font-weight: bold;">Call us</h1>
<p> <img src="image/call us.jpg" style="height:300px; width:500px; margin-left: 150px;opacity:0.7;">
<div class="centered">You can Call us from 9:00 AM  to 10:00 PM,Monday thru Sunday<br>+91 9628199157</div>
</p>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row whyjoin">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
<h1>Why join us?</h1><br/>
<ul style="list-style type:circle">
<li class="aftergen">Fantastic availability across more than 500 restaurants lucknow.</li><br/>
<li class="aftergen">Real time reservations from your website 24/7.</li><br/>
<li class="aftergen">New restaurants added on an ongoing basis</li><br/>
<li class="aftergen">No reservation fees for diners.</li><br/>
<li class="aftergen">Optimised for desktop, tablet or smartphone.</li><br/>
</ul>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<h2 class="gettouch"><i class="glyphicon glyphicon-envelope"></i>&nbsp;GET ON TOUCH</h2><br/>
<form action="contcode.php" method="post">
NAME&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style=" height:40px;width:500px;background:transparent;border:1px 1px 1px 0px"/><br/><br/><br/>
EMAIL&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" style=" height:40px;width:500px;background:transparent;border:1px 1px 1px 0px"/><br/><br/><br/>
MESSAGE&nbsp;&nbsp;&nbsp;<textarea name="msg" style=" height:60px;width:500px;background:transparent;border:1px 1px 1px 0px"></textarea><br/><br/><br/>
MOBNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="mob"style=" height:40px;width:500px; background:transparent; border:1px 1px 1px 0px"/><br/><br/>
<button class="sub" style= "height:30px;width:100px;">submit</button>
</form></div>
</div>
</div>
</body>
</html>