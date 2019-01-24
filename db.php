<?php

	$conn= new mysqli("localhost","root","","academy");
	
	if($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}
	echo 
	"connected sucessfully";
	

?>