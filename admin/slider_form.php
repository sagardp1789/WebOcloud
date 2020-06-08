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
				$filedest = 'images/sliderbg/'.$filenamenew;
				$destttt = 'admin/'.$filedest;
				move_uploaded_file($filetemp,$filedest);
			//}
			}
				else
				{echo "error";}
			
		}
		
		$file1 = $_FILES['file1'];
		$filename1 = $_FILES['file1']['name'];
		$filetemp1 = $_FILES['file1']['tmp_name'];
		$filesize1 = $_FILES['file1']['size'];
		$fileerror1 = $_FILES['file1']['error'];
		$filetype1 = $_FILES['file1']['type'];
		$fileext1 = explode('.',$filename1);
		$fileactualext1 = strtolower(end($fileext1));
		$allow1 = array('png');
		if(in_array($fileactualext1,$allow1))
		{
			if($fileerror1 === 0){
			//if($filesize<1000000)
			//{
				$filenamenew1 = uniqid('',true).".".$fileactualext1;
				//$newname = $filename
				$filedest1 = 'images/sliderbg/'.$filenamenew1;
				$destttt1 = 'admin/'.$filedest1;
				move_uploaded_file($filetemp1,$filedest1);
			//}
			}
				else
				{echo "error";}
			
		}
		
		$heading1=$_POST['heading1'];
		$heading2=$_POST['heading2'];
		$matter=$_POST['matter'];		
		
		$query = "INSERT INTO home_slider(heading,heading2,matter,image,image2) VALUES ('$heading1','$heading2','$matter','$destttt','$destttt1')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='slider_contents.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>