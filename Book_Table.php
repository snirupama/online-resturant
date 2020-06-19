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
    <?php include("nav.php");?>
<div style="left: 0px;right: 0px;position: fixed;top: 0px;z-index: 99">
<?php //include("nav.php");?>
 </div>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="image">
      <h1 id ="discover">Discover resturants you love</h1>
      <input type="text" name="search-box" class="search-box" placeholder="Search by resturant or Location">
   <input type="submit" name="submit" id="submit" placeholder="Search it">
 </div>
 
  
<?php 
   $ids=$_REQUEST['id'];
   $sel="select * from regres where id=$ids";
   $res=mysqli_query($conn,$sel);
   $r=mysqli_fetch_array($res,MYSQLI_BOTH);
 ?>
<div class="row"></div>
<div class="container-fluid" style="margin-top:20px;">
  
   <div class="row">
     
     <div class="col-sm-2"></div>
     <div class="col-sm-3">
       
       <img src="admin/images/<?php echo $r['regpic']; ?>" height="300px" width="300px"/>
     </div>
     <div class="col-sm-1"></div>
     <div class="col-sm-6">
       
       <h2><?php echo $r['name']; ?></h2>
       <p><?php echo $r['regaddress'];?></p>
       <div class="row">
         <form method="post" action="Book_Tablecode.php">
          <div class="form-group col-sm-6">
            <input type="date" name="tabledate" class="form-control "/>
          </div>
          <div class="form-group col-sm-6">
               <input type="text" placeholder="Name" name="pname" class="form-control "/>
          </div>
          <div class="form-group col-sm-6">
               <select name="tabletime" placeholder="Time" class="form-control ">
                     <option value="5:00am">5:00 am</option>
                     <option value="5:30am">5:30 am</option>
                     <option value="6:00am">6:00 am</option>
                     <option value="6:30am">6:30 am</option>
                     <option selected="selected" value="7:00am">7:00 am</option>
                     <option value="7:30am">7:30 am</option>
                     <option value="8:00am">8:00 am</option>
                     <option value="8:30am">8:30 am</option>
                     <option value="9:00am">9:00 am</option>
                     <option value="9:30am">9:30 am</option>
                     <option value="10:00am">10:00 am</option>
                     <option value="10:30am">10:30 am</option>
                     <option value="11:00am">11:00 am</option>
                     <option value="11:30am">11:30 am</option>
                     <option value="12:00pm">12:00 pm</option>
                     <option value="12:30pm">12:30 pm</option>
                </select>     
          </div>
          <div class="form-group col-sm-6">
               <input type="text" placeholder="Emailid" name="email" class="form-control "/>
          </div>
          <div class="form-group col-sm-6">
           <select name="tableno" class="form-control ">
            <option value="Table 1">Table 1</option>
            <option value="Table 2">Table 2</option>
            <option value="Table 3">Table 3</option>
            <option value="Table 4">Table 4</option>
            <option value="Table 5">Table 5</option>
            <option value="Table 6">Table 6</option>
            <option value="Table 7">Table 7</option>
            <option value="Table 8">Table 8</option>
            <option value="Table 9">Table 9</option>
            <option value="Table 10">Table 10</option>
            </select>
          </div>
         <div class="form-group col-sm-6">
               <input type="text" placeholder="Mobno" name="mobno" class="form-control "/>
         </div>
         <div class="form-group col-sm-6">
           <select name="members" class="form-control ">
             <option value="1 Person">1 Person</option>
             <option value="2 Peoples">2 Peoples</option>
             <option value="3 Peoples">3 Peoples</option>
             <option value="4 Peoples">4 Peoples</option>
             <option value="5 Peoples">5 Peoples</option>
             <option value="6 Peoples">6 Peoples</option>
          </select>
         </div>
         <div class="form-group col-sm-6">
               <textarea placeholder="Enter Address.." name="address" class="form-control"></textarea>
         </div> 
         <div class="form-group col-sm-6">
         
         </div> 
		  
         <div class="form-group col-sm-6">
         <button class="btn btn-success btn-lg">submit</button>
         </div>
         </form> 

      </div>
     </div>

   </div>

</div>


<div class="container-fluid" style="margin-top:20px;">
<div class="row">
</div>
</div>
<?php  include("footer.php"); ?>
</body>
</html>