<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <div class="navbar-resdine"><font size="12"><a href="index.php">ResDine</a><span class="glyphicon glyphicon-grain" style="font-size:25px;"></span></font>
    </div>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="gallery.php">Gallery</a></li>
        <li><a data-toggle="modal" data-target="#modal">Sign up</a></li>
        <li><a   data-toggle="modal" data-target="#myModal">Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="contact.php">Contact us</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>           
<!-- Signup Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-md">
    <div class="modal-content" style="background:#363636">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#0079f2;">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-family:Lucida Handwriting;color:#0079f2;text-align: center;font-size:30px;">Sign up Now!!!</h4>
      </div>     
      <div class="modal-body">
        <form method="post" action="signupcode.php">
<pre>
       
        <input type="text"  placeholder="Usename" name="name" class="sig"/><br/><br/>
    
        <input type="email" placeholder="Useremail"` name="email" class="sig"/><br/><br/>

       <input type="password" minlength="8" placeholder="Userpassword" name="pass" class="sig"/><br/><br/>      
    &nbsp; &nbsp;<select placeholder="City" name="city" class="sig">
<option>Lucknow</option>
<option>Delhi</option>
<option>Banglore</option>
<option>Allahabad</option>
<option>Gorakhpur</option>
</select><br/><br/>

     &nbsp; &nbsp;<input type="mobile" placeholder="Mob No" name="mob" class="sig"/>

</pre>

      </div>
      <div class="modal-footer">
       
        <button  class="btn btn-default" id="signup">submit</button>
      </div>
      </form>
    </div>
  </div>
</div> 
<!-- LogininModal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#363636">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#0079f2;">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-family:Lucida Handwriting;color:#0079f2;text-align: center;font-size:25px;">Login Now!!!</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="logincode.php">
<pre>
     <input type="email" placeholder="Useremail" name="email" class="sig"/><br/><br/>

    <input type="password" minlength="8" placeholder="Userpassword" name="pass" class="sig"/><br/><br/>
</pre>

   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="signup">cancel</button>
        <button  class="btn btn-default" id="signup">submit</button>
      </div>
      </form>
    </div>
  </div>
</div>