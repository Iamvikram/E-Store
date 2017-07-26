<?php

$conn = mysqli_connect('localhost','vikram','8989216681');
$sql = "CREATE DATABASE e_store";
 mysqli_query($conn,$sql);
 mysqli_select_db($conn,'e_store');
 //create 'person' table
 $sql = "CREATE TABLE person(
             id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
             name CHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE KEY,
             password VARCHAR(500) NOT NULL,
            contact bigint NOT NULL,
             address TEXT NOT NULL,
            city TEXT NOT NULL			 
             )";
	// create 'item' table
	$sql = "CREATE TABLE item(
	              id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
				  item_id INT NOT NULL,
				  price INT NOT NULL,
				  cart TEXT NOT NULL 
				  
				 )";
		
 			mysqli_query($conn,$sql);
		
?>