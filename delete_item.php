<?php
include('connection.php');
$id = $_GET['id'];
$sql = mysqli_query($conn,"update item set cart='0' where item_id='$id' ");
header('location:cart.php');
?>