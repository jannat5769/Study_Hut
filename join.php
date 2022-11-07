<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Join</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<section class="header">
		  <nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				 <!-- <a class="navbar-brand" href="#"><img src = "images/logo1.png" class="logo"></a>	-->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="index.html"> Home</a></li>
					<li><a href="Restaurent.html">Restaurent</a></li>
					<li><a href="Menu.html">Menu</a></li>	
					<li><a href="join.html">Join Our Team </a></li>
					<li><a href="location.html">Location</a></li>
						 
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	 </section >

	<section class="join">
			<div class="container">
				<div class="row">
					<br>
					<br>
					<br>
					<!--<h3 class="text-c">If you are interested to join our team as a Chef,<br>please read the requirements and the advantages which are given below. </h3> -->
					<br>
					<br>
					<br>
					<br>

					<div class="col-md-4 ">
						<div class="chef">
							<div class="chef-t">
							<!--	<h1 class="text-j"><span class="r-heading1">Chef</span> </h1> -->
							<img src="<?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t1"]."";
		}
		?>" class="img-responsive center">
								<h3 class="text-j"><span class="r-heading1"><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t2"]."";
		}
		?></span> </h3>
							
						
							<!--	<h1 class="text-j"><span class="r-heading1">Chef</span> </h1> -->
							<img src="<?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t11"]."";
		}
		?>" class="img-responsive center">
								<h3 class="text-j"><span class="r-heading1"><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t22"]."";
		}
		?></span> </h3>
								
													
							</div>
							
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="need">
							<div class="need-t">
								<ul class="n-text">
								<p>
								<h2><strong>Academic:</strong></h2>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t3"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t4"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t5"]."";
		}
		?></li>
																
								</p>
								</ul>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
								<ul>
								<p>
								<h2><strong>Academic:</strong></h2>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t33"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t44"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t55"]."";
		}
		?></li>	
								</p>
								
								</ul>
								
						
							</div>
						</div>
					</div>
					
					<div class="col-md-4 ">
						<div class="need">
							<div class="need-t">
								<ul class="n-text">
								<p>
								<h2><strong>Personal:</strong></h2>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t6"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t7"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team1";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t8"]."";
		}
		?></li>
															
								</p>
								</ul>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
							  <br>
								<ul>
								<p>
								<h2><strong>Personal:</strong></h2>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t66"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t77"]."";
		}
		?></li>
								<li><?php
		$con=mysqli_connect("localhost","root","","study_hut");
		$query="select *from team2";
		$result=mysqli_query($con,$query);
		while($row =mysqli_fetch_array($result)){
		echo"".$row["t88"]."";
		}
		?></li>
								</p>
								
								</ul>
								
						
							</div>
						</div>
					</div>

					

			</div>
		</section>

		<br>
		<br>
		<br>

	<section class="footer">
			<div class= "container">
				<div class="row">
					<p>© 2018 AUST CAFE. All Rights Reserved. Vallagena BD group</p>
					
				</div>
				
			</div>
		</section>
	  
	  
  

</body>
</html>