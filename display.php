<html>
<head>
<title> display students profile </title>
</head>
<body>

    <div class="title"><center><h1>students Profile</h1></center></div>
	<div class="container">
<center>
<table border="3">
	
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>roll Number</th>
<th>Email</th>
<th>class</th>
<th>Institute</th>
<th>phone Number</th>
<th>Address</th>
</tr>


<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'study_hut');
$s="select * from student_profile";	
$data=mysqli_query($con,$s);
$num=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
//echo $result['firstname']." ".$result['lastname']." ".$result['rollnumber']." ".$result['email']." ".$result['class']." ".$result['institute']." ".$result['phone']." ".$result['address'];

if($num!=0){
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['firstname']."</td>
		<td>".$result['lastname']."</td>
		<td>".$result['rollnumber']."</td>
		<td>".$result['email']."</td>
		<td>".$result['class']."</td>
		<td>".$result['institute']."</td>
		<td>".$result['phone']."</td>
		<td>".$result['address']."</td>
		</tr>
		";
	}
}
else{
	echo " ";
}

?>
</table>
</center>
</div>
</body>
</html>
