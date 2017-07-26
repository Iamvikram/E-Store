  <?php
     function addCart($id){
		  include('connection.php');
		 $sql = mysqli_query($conn,"select cart from item where item_id='$id'");
		 while($r = mysqli_fetch_assoc($sql)){
			 if($r['cart']==0){
				 return "Add to cart";
			 }
			 else{
				 return "Added!";
			 }
		 }
	 }
	
	?>