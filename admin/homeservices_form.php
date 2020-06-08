<?php
	include('includes/c.php');
	if(isset($_POST['submit']))
	{
	
		$title=$_POST['title'];
		$matter=$_POST['matter'];
		$logo=$_POST['logo'];		
		
		$query = "INSERT INTO home_services(titel,matter,logo) VALUES ('$title','$matter','$logo')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='home_services.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>