<?php
	include('includes/c.php');
	if(isset($_POST['submit']))
	{
		$file = $_FILES['file'];
		$filename = $_FILES['file']['name'];
		$filetemp = $_FILES['file']['tmp_name'];
		$filesize = $_FILES['file']['size'];
		$fileerror = $_FILES['file']['error'];
		$filetype = $_FILES['file']['type'];
		$fileext = explode('.',$filename);
		$fileactualext = strtolower(end($fileext));
		$allow = array('jpg','jpeg','png','pdf');
		if(in_array($fileactualext,$allow))
		{
			if($fileerror === 0){
			//if($filesize<1000000)
			//{
				$filenamenew = uniqid('',true).".".$fileactualext;
				//$newname = $filename
				$filedest = 'images/team/'.$filenamenew;
				$destttt = 'admin/'.$filedest;
				move_uploaded_file($filetemp,$filedest);
			//}
			}
				else
				{echo "error";}
			
		}
		$name=$_POST['name'];
		$email=$_POST['email'];	
		$profession=$_POST['prof'];	
		
		
		$query = "INSERT INTO team_about(name,profession,email,photo) VALUES ('$name','$profession','$email','$destttt')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		//echo "<script> location.href='home_port.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>