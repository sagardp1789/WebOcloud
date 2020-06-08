<?php
	include('includes/c.php');
	if(isset($_POST['submit']))
	{
	
		$name=$_POST['name'];
		$message=$_POST['message'];
		$business=$_POST['business'];		
		
		$query = "INSERT INTO home_clientsay(name,message,business) VALUES ('$name','$message','$business')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='home_happyusers.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>