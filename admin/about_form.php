<?php
	include('includes/c.php');
	if(isset($_POST['submit']))
	{
		$file1 = $_FILES['file1'];
		$filename1 = $_FILES['file1']['name'];
		$filetemp1 = $_FILES['file1']['tmp_name'];
		$filesize1 = $_FILES['file1']['size'];
		$fileerror1 = $_FILES['file1']['error'];
		$filetype1 = $_FILES['file1']['type'];
		$fileext1 = explode('.',$filename1);
		$fileactualext1 = strtolower(end($fileext1));
		$allow = array('jpg','jpeg','png','pdf');
		if(in_array($fileactualext1,$allow))
		{
			if($fileerror1 === 0){
			//if($filesize<1000000)
			//{
				$filenamenew1 = uniqid('',true).".".$fileactualext1;
				//$newname = $filename
				$filedest1 = 'images/aboutimg/'.$filenamenew1;
				$destttt1 = 'admin/'.$filedest1;
				move_uploaded_file($filetemp1,$filedest1);
			//}
			}
				else
				{echo "error";}
			
		}
		
		$file2 = $_FILES['file2'];
		$filename2 = $_FILES['file2']['name'];
		$filetemp2 = $_FILES['file2']['tmp_name'];
		$filesize2 = $_FILES['file2']['size'];
		$fileerror2 = $_FILES['file2']['error'];
		$filetype2 = $_FILES['file2']['type'];
		$fileext2 = explode('.',$filename2);
		$fileactualext2 = strtolower(end($fileext2));
		if(in_array($fileactualext2,$allow))
		{
			if($fileerror2 === 0){
			//if($filesize<1000000)
			//{
				$filenamenew2 = uniqid('',true).".".$fileactualext2;
				//$newname = $filename
				$filedest2 = 'images/aboutimg/'.$filenamenew2;
				$destttt2 = 'admin/'.$filedest2;
				move_uploaded_file($filetemp2,$filedest2);
			//}
			}
				else
				{echo "error";}
			
		}
		
		$matter_about=$_POST['matter_about'];
		$matter_why=$_POST['matter_why'];
			
		
		$query = "INSERT INTO about_company(matter_about,image,matter_why,image2) VALUES ('$matter_about','$destttt1','$matter_why','$destttt2')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='about_contents.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);
	
	}
	
	mysqli_close($connection); // Closing Connection with Server
	?>