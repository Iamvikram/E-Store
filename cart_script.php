<?php

$id = $_GET['id'];
include('connection.php');
$sql =mysqli_query($conn,"update item set cart='1' where item_id='$id' ");
header('location:homePage.php');


?>