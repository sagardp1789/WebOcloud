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
				$filedest = 'images/portfolio/'.$filenamenew;
				$destttt = 'admin/'.$filedest;
				move_uploaded_file($filetemp,$filedest);
			//}
			}
				else
				{echo "error";}
			
		}
		$heading=$_POST['heading'];
		$description=$_POST['description'];		
		$url=$_POST['url'];	
		
		$query = "INSERT INTO portfolio(heading,description,url,image) VALUES ('$heading','$description','$url','$destttt')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='portfolio_admin.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>