<?php
	
	//This php takes in a new account and saves it into the database
	$conn = mysqli_connect("localhost","root","",'ferraris');
	
	
	$FirstName = $_POST['firstname'];
	$LastName = $_POST['surname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	
	$sql = "INSERT INTO accounts (firstname, surname, email, password)
	VALUES('$FirstName', '$LastName', '$Email', '$Password')";	
	
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ' . mysqli_error());
	}
	else
	{
		echo "Account created, check out our menu!";
	}
?>