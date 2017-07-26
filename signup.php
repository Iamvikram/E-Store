<?php
include('connection.php');
extract($_POST);
if(isset($submit)){
	
	//encrypt password
	$pass=md5($p);
	$sql = mysqli_query($conn,"insert into person values('','$n','$e','$pass','$num','$add','$c')");
	
	$msg  = '<font color="blue">Registration successfull!! </font>';
}

?>















<!DOCTYPE html>
<html lang="eng">

      <head>
	          <title> About Us </title>
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
					  <a class="navbar-brand" href="indexPage.php">E- Store</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="#myModal" role="button" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<li><a href="aboutUs.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
							<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
						</ul>
					</div>
				</div>
		   </nav>
		   <!--nav end-->
		   
		 <div class="row" style="margin-top:80px">
		     <div class="container">
			     <div class="col-sm-6">
                    <img src="yess.jpg" alt="mobile">
				  </div>
		     <div class="col-sm-6">
			     <h2 style="color:green">Register Here </h2>
			     <div class="row">
				    <div class="col-sm-5">
					     <?php echo @$msg; ?>
				    </div>
			     <form method="post">
				    <div class="form-group">
					   <input type="text" name="n" placeholder="Name" class="form-control" required="true">
					 </div>
					 <div class="form-group">
					   <input type="email" name="e" placeholder="Email" class="form-control" required="true">
					 </div>
					 <div class="form-group">
					   <input type="password" name="p" placeholder="Password" class="form-control" required="true">
					 </div>
					 <div class="form-group">
					   <input type="number" name="num" placeholder="Contact" class="form-control" required="true">
					 </div>
					  <div class="form-group">
					   <input type="text" name="c" placeholder="City" class="form-control" required="true">
					 </div>
					  <div class="form-group">
					   <input type="text" name="add" placeholder="Address" class="form-control" required="true">
					 </div>
					 <button type="submit" name="submit" class="btn btn-primary pull-left"> Submit </button>
				  </form>
			 </div>
		 </div>
		</div>
		
		 <!--footer start -->
		   <div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#ffff; margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="aboutUs.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +918989216681</div>
					</div>
				</div>
			</div>
		</div>
		
        <!--myModal start -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:#000;">LOGIN</h4>
					</div>
					<div class="modal-body">
						<p>Don't have an account? <a href="" style="color:#0000ff;">Register</a></p>
						<form role="form" action="login_script.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
							</div>
						    <button type="submit" name="submit" class="btn btn-primary">Login</button>
						</form><br/>
						<a href="" style="color:#0000ff">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
		</body>
		
	</html>	