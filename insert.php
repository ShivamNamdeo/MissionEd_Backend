<?php
	include('connection.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name=MD5($_POST['name']);
	$email=$_POST['email'];
	$phone=MD5($_POST['phone']);
	$class=MD5($_POST['class']);
	$password=MD5($_POST['password']);


	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "Invalid email format";
  		header('location:signup.php');
	}

	else{
		$email=MD5($_POST['email']);
		$query=mysqli_query($con,"select * from student where email='$email'");
		
		if(mysqli_num_rows($query)>0 ){
			$_SESSION['sign_msg'] = "User Already Exist";
  			header('location:signup.php');
		}else{
		
		mysqli_query($con,"insert into student (name,email,phone,class,password)
			values ('$name','$email','$phone','$class','$password')");
		$uid=mysqli_insert_id($con);

		//sending email verification
		$to = $email;
		$subject = "MissionEd Sign Up Form ";
		$message = "
				<html>
				<head>
				<title>MissionEd Sign Up Form </title>
				</head>
				<body>
					<h2>Successfully Registered.</h2>
					<p>Your Account Details:</p>
					<p>Name: ".$name." Year</p>
					<p>Email: ".$email."</p>
					<p>Phone No : ".$phone."</p>
					<p>Class: ".$class."</p>
					<p>Password: ".$password."</p>
				</body>
				</html>
				";
			
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: aryansn0101@gmail.com". "\r\n" .
						

		mail($to,$subject,$message,$headers);
		$_SESSION['sign_msg'] = "Details Sent To Your Registered Email ID";
  		header('location:signup.php');

  		}
	}
	}
?>