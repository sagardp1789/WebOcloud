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
				$filedest = 'images/homeport/'.$filenamenew;
				$destttt = 'admin/'.$filedest;
				move_uploaded_file($filetemp,$filedest);
			//}
			}
				else
				{echo "error";}
			
		}
		$title=$_POST['title'];
		$matter=$_POST['matter'];		
		
		$query = "INSERT INTO home_portfolio(titel,matter,image) VALUES ('$title','$matter','$destttt')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='home_port.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>