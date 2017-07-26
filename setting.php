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
					  <a class="navbar-brand" href="homePage.php">E- Store</a>
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
		    
			<div class="row" style="margin-top:80px;margin-bottom:10px;">
			 <div class="col-lg-4  col-lg-offset-4">
			 <h3>Change Password </h3>
			     <form role="form" action="setting script.php" method="POST">
				    <div class="form-group">
					   <input type="password" name="pass" placeholder="Old Password" class="form-control" required="true">
					 </div>
					 <div class="form-group">
					   <input type="password" name="newpass" placeholder="New Password" class="form-control" required="true">
					 </div>
					 <div class="form-group">
					   <input type="password" name="renewpass" placeholder="Re-type New Password" class="form-control" required="true">
					 </div>
					 
					 <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
				  </form>
			  </div>
			</div>
		   
		</body>
		
	</html>	