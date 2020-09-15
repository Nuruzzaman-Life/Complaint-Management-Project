
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Catagory</title>
<style>
	body{
		background-image: url("3.jpg");
		/* background-position-x: 0%, 100%;*/
		/* background-repeat: repeat-y;*/
		 background-size: 100%; 
		/* background-position-y: 68%; */
		
	}
	
	input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
	select{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
		
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;		
	}
	select:focus{
		min-width:150px;
	}
</style>
<title>Complaint Showcase</title>
</head>
<body>
	<header id="mainHeader">
		<div class="container">
			<h1>Complaint Showcase</h1>
		</div> <!--container-->
	</header>
	<nav id="navbar">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
			</ul>
		</div> <!--container-->
	</nav>
	<div class="container text-center">
	</br>
	<h2>FILTER</h2>
	<p>Filling every boxes is not mandatory</p>
		<form action="complaintShowcase.php" method="POST">
			
			<input type="text" name="Catagory" placeholder="Catagory"/></br>
			<input type="text" name="UserId" placeholder="User Id"/><br/>
			<input type="text" name="Year" placeholder="Year"/><br/>
			<input type="text" name="Status" placeholder="Status"/><br/>
			<button type="submit" name="sub" class="btn btn-primary" style="width: 40%;">Show Complaints</button><br/>
		</form>

		<h1>All Complaints</h1>
		<table>
		<div class='row text-center'>	
			<?php
				require_once("db_connect.php");
				if(isset($_POST['sub'])){
					$catagory = $_POST['Catagory'];
					$userId= $_POST['UserId'];
					$year= $_POST['Year'];
					$status= $_POST['Status'];

					$query = "SELECT * FROM `comlaints` WHERE 1";

					if($catagory)
						$query = $query." AND Catagory LIKE '$catagory'";
					if($year)
						$query = $query." AND Year LIKE '$year'";
					if($userId)
						$query = $query." AND UserId LIKE '$userId'";
					if($status)
						$query = $query." AND Status LIKE '$status'";

					$result = mysqli_query ($mysqli, $query);

					if(mysqli_num_rows($result) !=0){
						while ($row = mysqli_fetch_row($result)){
							
							echo
							"<h1>{$row[0]}</hi>
							<h1>{$row[1]}</hi>
							<h1>{$row[2]}</hi>
							<h1>{$row[3]}</hi> <br>";
						}
					}
					else{
						echo
						"<div class='container mt-5' style='width: 30rem;'>
							<div class='alert alert-danger text-center' role='alert'>
							No match found
							</div>
						</div>";
					}
				}
			?>
		</div>
	</div>
	</table>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

