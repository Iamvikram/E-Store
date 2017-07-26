<?php
include("connection.php");

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
		    
			<div class="row" style="margin-top:80px">
			 <div class="col-lg-4  col-lg-offset-4">
			  <table class="table table-bordered table-striped">
			     <thead>
				    <tr>
					<th>Item Number </th>
					<th>Price </th>
					<th></th>
				 </thead>
				 <tbody>
				 <script>
				    function deleteItem($id){
						if(confirm("You want to delete this item?")){
							window.location.href="delete_item.php?id="+$id;
						}
					}
				 </script>
				 <?php
				 $sql = mysqli_query($conn,"select * from item ");
				 while($r = mysqli_fetch_assoc($sql)){
					 if($r['cart']){
					 echo '<tr>';
					 echo '<td>'.$r['item_id'].'</td>';
					 echo '<td>'.$r['price'].'</td>';
					 ?>
					 <td><a href="javascript:deleteItem('<?php echo $r['item_id']; ?>')" style="color:red"><spna class="glyphicon glyphicon-trash"></span></a></td>
					 <?php
					 echo '</tr>';
					 }
				 }
				 
				 ?>
				 <tr>
				 <td>Total</td>
				 <?php
				 $sum=0;
				  $sql = mysqli_query($conn,"select * from item ");
				  while($r = mysqli_fetch_assoc($sql)){
					  if($r['cart']){
					  $sum+=$r['price'];
				  }
				  }
				  echo '<td>'.$sum.'</td>';
				 ?>
				 <td><a href="confirm.php" role="button" class="btn btn-success">Confirm</a></td>
				 </tr>
				 </tbody>
			  </table>
			  </div>
			</div>
		   
		</body>
		
	</html>	