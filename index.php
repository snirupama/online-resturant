<?php
$conn=mysqli_connect("localhost","root","","online-res");
if($conn){
 // echo "ok";
}

?>
<html>
<head>
   <?php include("link.php"); ?> 
</head>
<body>
<div style="left: 0px;right: 0px;position: fixed;top: 0px;z-index: 99">
<?php include("nav.php");?>
 </div>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="image">
      <!--<h1 id ="discover">Discover resturants you love</h1>-->
      <input type="text" name="search-box" class="search-box" placeholder="Search by resturant or Location">
   <!--<input type="submit" name="submit" id="submit" placeholder="Search it">-->
 </div>
 
  

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active" id="item">
          <div class="rowses">
          
          <h1 id="slider1">What's Special !!!!!</h1>
            <div class="dairymilk">
              <div class="today">
                <div>
                  <img src="image/Tunday.jpg" class="img">
                  <h2 id="munch">Tunday Kabab</h2>
                </div>
              </div>
            </div>
            <div class="dairymilk">
              <div class="today">
                <div>
                  <img src="image/galawati.jpg" class="img">
                  <h2 id="munch">Galawati Kabab</h2>
                </div>
              </div>
            </div>
            <div class="dairymilk">
              <div class="today">
                <div>
                  <img src="image/paan.jpg" class="img">
                  <h2 id="munch">Lucknawi Paan</h2>
                </div>
              </div>
            </div>
            <div class="dairymilk">
              <div class="today">
                <div>
                  <img src="image/josh.jpg" class="img">
                  <h2 id="munch">Rogan Josh</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item" id="item">
        <h1 id="slider1">What's Special !!!!!</h1>
          <div class="rows">
            <div class="col">
              <div class="today">
                <div>
                  <img src="image/kulfi.jpg" class="img">
                  <h2 id="munch"> Prakash Ki Kulfi</h2>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="today">
                <div>
                  <img src="image/malai.jpg" class="img">
                  <h2 id="munch">Malai Ki Gilori</h2>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="today">
                <div>
                  <img src="image/biryani.jpg" class="img">
                  <h2 id="munch">Lucknawi Biryani</h2>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="today">
                <div>
                  <img src="image/chaat.jpg" class="img">
                  <h2 id="munch">Lucknawi Chaat</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
<!--image start-->

    
 

<!--start 5star-->
 <div class="container-fluid">
  <div id="row special">
<br><bold><h1 class="special text-center">
 Start Deals !!!!!</h1></bold>
 <?php 
$sel="select * from regres where id limit 8";
$query=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($query,MYSQLI_BOTH)){

 ?> 
<a href="Book_Table.php?id=<?php echo $row['0'];?>"><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="admin/images/<?php echo $row['regpic']; ?>" height="180px" width="300px">
<br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2><?php echo $row['name']; ?></h2><br/><hr/>
 ‎<p class="taj"><bold>Price range: ₹2,500 for two people (approx.) Exclusive of applicable taxes and charges.</bold></p>
</div></a>
 <?php }?>
</div>
</div> <!--close 5star-->

<!--start near-->
 <div class="container-fluid">
  <div id="row special">
<br><bold><h1 class="special text-center">
 Find Resturant Near You </h1></bold>
  
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/sahib.jpg" height="180px" width="300px">
<br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>Sahib Cafe</h2><br/><hr/>
 ‎</div>
 
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/sky.jpg" height="180px" width="300px"><br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>Sky Bar</h2><br/><hr/>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/zaika.jpg" height="180px" width="300px"><br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>Zaika Resturant</h2><br/><hr/>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/la.jpg" height="180px" width="300px"><br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>L-14</h2><br/> <hr/>
</div>
</div>
</div> <!--close near-->

<!--start near-->
 <div class="container-fluid">
  <div id="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/odh.jpg" height="180px" width="300px">
<br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>oudhyana</h2><br/><hr/>
 ‎</div>
 
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/falak.jpg" height="180px" width="300px"><br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>Falaknuma</h2><br/><hr/>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/royal.jpg" height="180px" width="300px"><br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>Royal Sky</h2><br/><hr/>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br/><center><img src="image/pavilion.jpg" height="180px" width="300px"><br/>
<img src="image/star.jpg" height="50px" width="80px">
<h2>pavilion</h2><br/> <hr/>
</div>
</div>
</div> <!--close near-->

 <div class="container-fluid" style="background-color:#c4c4c4;">
  <div id="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 deal">
  <center><img src="image/envp.png" height="100px" width="100px"></center>
<br/><bold><h1 class="deal text-center">
 Deals Direct To Your Inbox! </h1></bold><br/>
 <center><p id="afterdeal">Hear about Resdine’s top offers & book the best tables</p></center>
 </div></div>
  <!--start inputgrp -->
 <div class="row">
  <div class="col-lg-5">
    <div class="input-group" id="input">
      <br/> <input type="text" placeholder="your email adress" class="form-control" aria-label="..." size="150px"/>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-4">
    <div class="input-group" id="lko">
      <br/><input type="text" placeholder="Lucknow" class="form-control" aria-label="..." size="150px"/>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
<div class="col-lg-3">
    <div class="input-group" id="button">
      <br/><button type="button" class="btn btn-primary">Get Deals</button>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row --><!--stop-->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  id="afterdeal">
<center><p id="afterdeal">You can unsubscribe from marketing communications at any time.</p></center>
  </div>
</div>
</div>
<div class="container-fluid">
<div class="row">
</div>
</div>
<?php  include("footer.php"); ?>
</body>
</html>