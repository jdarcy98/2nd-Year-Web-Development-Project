<?php
	//This php runs queries to delete an account from the database when entered in on the sign up/delete page
	$conn = mysqli_connect("localhost","root","",'ferraris');
	if(mysqli_connect_errno())
	{
		echo "Failed";
	}
	
	$sql = "DELETE FROM accounts WHERE firstname = '$_POST[firstname]'";
	$sql = "DELETE FROM accounts WHERE surname = '$_POST[surname]'";
	$sql = "DELETE FROM accounts WHERE email = '$_POST[email]'";
	$sql = "DELETE FROM accounts WHERE password = '$_POST[password]'";
	
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ' . mysqli_error());
	}
	else
	{
		echo "Account deleted, sorry to see you go!";
	}
	
	mysqli_close($conn);
?>