<?php


if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'study_hut');
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$roll=$_POST['rollnumber'];
	$email=$_POST['email'];
	$class=$_POST['class'];
	$ins=$_POST['institute'];
	$phn=$_POST['phone'];
	$add=$_POST['address'];
	
	$s="select * from student_profile where firstname='$fname' && lastname='$lname' && rollnumber='$roll' && email='$email' && class='$class' && institute='$ins' && phone='$phn' && address='$add'";
	$data=mysqli_query($con,$s);
	$num=mysqli_num_rows($data);
	if($num==1)
	{
		echo "";
	}
	else{
		$reg="insert into student_profile(firstname,lastname,rollnumber,email,class,institute,phone,address)values('$fname','$lname','$roll','$email','$class','$ins','$phn','$add')";
		mysqli_query($con,$reg);
		echo "";
	}
	
	
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/rstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		


	</head>
	
	<body>

	<div class="title"><center><h1> students Profile Form</h1></center></div><br>
	<img src="images/r8.png" alt="logo" class="logo">

		<div class="container">

			<div class="signup-form">
				
				<form action="#" method="POST">
				<div class ="form-left">
					<input type="text" name="firstname" placeholder="First Name:">
					<input type="number" name="rollnumber" placeholder="Roll Number:">
					<input type="text" name="class" placeholder="Class:">
					<input type="number" name="phone" placeholder="Phone Number:">
				</div>
				
				<div class="form-right">
				<input type="text" name="lastname" placeholder="Last Name:">
				<input type="email" name="email" placeholder="Email Id:">
				<input type="text" name="institute" placeholder="Institute Name:">
				<input type="text" name="address" placeholder="Address:">				
	
			  <input type="submit" name="submit" value="submit" class="submit-btn"> 
               <a href="display.php">click here to show students profile</a>			  
				</div>
				</form>

				</div>

		</div>
		
</html>

