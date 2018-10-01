<!Doctype html>

<html>
<head>
	<title>Menu</title>
	<link rel = "stylesheet" type="text/css" href = "styletakeaway.css"/>
</head>
<body>
	
	<!--This page takes values from the menu database and prints it out for the user to see-->
	
	<div id = "top" ><a href="takeaway.html"><strong>Ferrari's Takeaway</strong></a></div>

	<div id ="navbar">
		<p class="horizontal"><a class="active" href="menu.php">Menu</a></p>
		<p class="horizontal"><a href="logintakeaway.html">Log In</a></p>
		<p class="horizontal"><a href="signup.html">Sign Up/Delete</a></p>
		<p class="horizontal"><a href="contact.html">Contact</a></p>
	</div>
	<br><br><br>
	
	<div id="menu">
		<br>
		<hr>
		<p><big><u> Chips </big></u></p>
		<hr>
		<br>
		<?php
			//These queries take each item from the menu database and print them out in an efficient manner
			$con = mysqli_connect("localhost", "root", "", "ferraris");
			
			$sql = "SELECT * FROM menu WHERE Category = 'CHIPS'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo $row['Name']."<br>".$row['Description']
					."<br> Price: € ".$row['Price']."<br><br>";
				}
			}
			else
			{
				echo "There are no chips in stock";
			}
			
		?>
		
		<img src="bagochips.jpg" id="chips" width="450" height="250">
		
		</div>
		
		<br>
		<hr>

		<div id="menu">
		<p><big><u> Burgers </big></u></p>
		<hr>
		<br>
		<?php
			$con = mysqli_connect("localhost", "root", "", "ferraris");
			
			$sql = "SELECT * FROM menu WHERE Category = 'BURGER'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo $row['Name']."<br>".$row['Description']
					."<br> Price: € ".$row['Price']."<br><br>";
				}
			}
			else
			{
				echo "There are no burgers in stock";
			}
		?>
		
		<img src="ferrari.jpg" id="burger" width="350" height="250">
		
		</div>
		
		<br>
		<hr>

		<div id="menu">
		<p><big><u> Kebabs </big></u></p>
		<hr>
		<br>
		<?php
			$con = mysqli_connect("localhost", "root", "", "ferraris");
			
			$sql = "SELECT * FROM menu WHERE Category = 'KEBAB'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo $row['Name']."<br>".$row['Description']
					."<br> Price: € ".$row['Price']."<br><br>";
				}
			}
			else
			{
				echo "There are no kebabs in stock";
			}
		?>
		<img src="doner.jpg" id="kebab" width="350" height="250">
		</div>
		
		<br>
		<hr>
		
		<div id="menu">
		<p><big><u> Pizzas </u></big></p>
		<hr>
		<br>
		<?php
			$con = mysqli_connect("localhost", "root", "", "ferraris");
			
			$sql = "SELECT * FROM menu WHERE Category = 'PIZZA'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo $row['Name']."<br>".$row['Description']
					."<br> Price: € ".$row['Price']."<br><br>";
				}
			}
			else
			{
				echo "There are no pizzas in stock";
			}
		?>
		
		<img src="pizz.jpg" id="pizza" width="350" height="250">
		
		</div>
</body>
</html>