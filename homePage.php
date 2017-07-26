<?php
session_start();
include('connection.php');
$e= $_SESSION['user'];
 $sql = mysqli_query($conn,"select * from person where email='$e' ");
	  $arr = mysqli_fetch_assoc($sql);
?>




<!DOCTYPE html>
<html lang="eng">

      <head>
	          <title> E-Store </title>
		      <meta charset="utf-8">
		      <meta name="viewport" content="width=device-width, initial-scale=1" > 
		
		         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
            <!--external css -->
			<link rel="stylesheet" href="mycss.css">
	    </head>
		
		<body>

		   <!--nav start -->
		   <nav class="navbar navbar-inverse navbar-fixed-top">
		     <div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a class="navbar-brand" href="homePage.php">Welcome <?php echo $arr['name']; ?></a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="cart.php"><span class="glyphicon glyphicon-user"></span> Cart</a></li>
							<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
						</ul>
					</div>
				</div>
		   </nav>
		   <!--nav end-->
		    
			<form action="confirm.php" method="get">
			 <div class="container" style="margin-top:80px;">
		    <div class="row">
			<div class="col-lg-4">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			  <h3>Mobile1</h3>
			 </div>
			 <div class="panel-body">
			   <center><img src="e1.gif" alt="item"></center>
			   <p>4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
			 </div>
			 <div class="panel-footer">
			  <a href="cart_script.php?id=1&add=add"  name="add" value="add" role="button" class="btn btn-primary  btn-block">
			  <?php 
			    include('add.php');
				echo addCart(1);
			  ?>
			  </a>
			 </div>
			 </div>
			</div>
			
			<div class="col-lg-4">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			  <h3>Mobile2</h3>
			 </div>
			 <div class="panel-body">
			   <center><img src="e2.jpg" alt="item"></center>
			   <p>Numeric keypad, 2MP Camera, Internet browsing,Rs 4000.</p>
			 </div>
			 <div class="panel-footer">
			  			  <a href="cart_script.php?id=2&add=add"  name="add" value="add" role="button" class="btn btn-primary  btn-block">
						   <?php 
                             echo addCart(2);
			               ?>
						   </a>

			 </div>
			 </div>
			</div>
			
			<div class="col-lg-4">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			  <h3>Mobile3</h3>
			 </div>
			 <div class="panel-body">
			   <center><img src="e3.png" alt="item"></center>
			   <p>4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs 4000.</p>
			 </div>
			 <div class="panel-footer">
			  <a href="cart_script.php?id=3&add=add"  name="add" value="add" role="button" class="btn btn-primary  btn-block">
			   <?php 
			   
                echo addCart(3);
			  ?>
			  </a>

			 </div>
			 </div>
			</div>
		
			
			<div class="row">
			<div class="col-sm-4">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			  <h3>Mobile4</h3>
			 </div>
			 <div class="panel-body">
			   <center><img src="e4.jpg" alt="item"></center>
			   <p>3.7' Screen, snap-dragon processor, Android 4.0, 1GB RAM, 4GB Internal memory, Rs 4000</p>
			 </div>
			 <div class="panel-footer">
			 			  <a href="cart_script.php?id=4&add=add"  name="add" value="add" role="button" class="btn btn-primary  btn-block">
						   <?php
                          echo addCart(4);
			               ?>
						  </a>

			 </div>
			 </div>
			</div>
			
			<div class="col-sm-4">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			  <h3>Mobile5</h3>
			 </div>
			 <div class="panel-body">
			   <center><img src="e2.jpg" alt="item"></center>
			   <p>Numeric keypad, 4MP Camera, Internet browsing, SMS/MMS, Rs 4000.</p>
			 </div>
			 <div class="panel-footer">
			  			  <a href="cart_script.php?id=5&add=add"  name="add" value="add" role="button" class="btn btn-primary  btn-block">
						   <?php 
			            
                         echo addCart(5);
			             ?>
						  </a>

			 </div>
			 </div>
			</div>
			
			<div class="col-sm-4">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			  <h3>Mobile6</h3>
			 </div>
			 <div class="panel-body">
			   <center><img src="e6.jpg" alt="item"></center>
			   <p>3.2' AMOLED Screen, 1GB RAM, Qual-com processor, 2GB Internal Memory, 5MP camera, Rs 4000</p>
			 </div>
			 <div class="panel-footer">
			  			  <a href="cart_script.php?id=6&add=add"  name="add" value="add" role="button" class="btn btn-primary  btn-block">
						   <?php 
			               
                          echo addCart(6);
			              ?>
						  </a>

			 </div>
			 </div>
			</div>
			</div>
			
		   </div>
			</form>
		   
		</body>
		
	</html>	