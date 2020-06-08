<?php
include('includes/c.php');
if(isset($_POST['submit']))
{
	$msg = $_POST['msg'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$sub = $_POST['sub'];
	$to = "sagardoke1789@gmail.com";
	$body = '<html>
			<body>
			<h3>Conatact:</h2>
			<p>message:'.$msg.'</p>
			<h4>Info:</h4>
			<p>Name:'.$name.'</p>
			<p>Mobile:'.$mob.'</p>
			<p>Email:'.$email.'</p>
			</body>
			</html>
	';
	//headers
	$headers = "From:".$name."<".$email.">\r\n";
	$headers .= "Reply-to:".$email."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset-utf-8";
	//send
	$send = mail($to, $sub, $body, $headers);
	if($send)
	{
			echo "<script type='text/javascript'>alert('email send')</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('error!')</script>";
	}
	
	$query = "INSERT INTO contact(name,email,mobile,subject,message) VALUES ('$name','$email','$mno','$sub','$msg')";  
		//echo $conn;								   
		$result=mysqli_query($connection,$query);
		unset($_POST['submit']);
	if($result)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		echo "<script> location.href='contact.php'; </script>";
        exit;
	}
	else
	echo mysqli_error($connection);	
}
?>