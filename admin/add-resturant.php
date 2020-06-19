<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<!--Linking of bootstrap Library -->
<link href="../css/bootstrap.css" rel="stylesheet"/>
<link href="../css/style.css" rel="stylesheet"/>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid resform">
<form action="add-resturantcode.php" method="post" enctype="multipart/form-data">
<input type="text" placeholder="enter resturant name" name="name"><br/><br/>
<input type="text" placeholder="enter resturant location" name="location"><br/><br/><br/><br/>
<input type="text" placeholder="enter resturant address" name="add"><br/><br/>
<input type="text" placeholder="enter resturant price" name="price"><br/><br/>
<input type="file" name="pic"/><br/><br/>
<button>ADD</button>
</div>
</body>
</html>