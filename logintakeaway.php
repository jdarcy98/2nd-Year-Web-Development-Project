<?php

	/*This php adds functionality to the login html page, checking the takeaway's database
	  for what has been inputted, with appropriate error checking*/
	  
	$conn = mysqli_connect("localhost","root","",'ferraris');

	$Email = $_POST['email'];
	$Password = $_POST['password'];
	
	$sql = "SELECT * FROM accounts WHERE email = '$Email'";
	$sql = "SELECT * FROM accounts WHERE password = '$Password'";
	
	$result = mysqli_query($conn,$sql);	
	$row = mysqli_fetch_array($result);
	if($row[ 'password'] == $Password && $row['email'] == $Email)
	{
		header('Location: takeaway.html');
	}
	else
	{
		echo "Failed to login, check details";
	}
?>