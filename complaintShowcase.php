
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Catagory</title>
<style type="text/css">
	
	table{
		border-collapse: collapse;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size: 25px;
		text-align: center;
	}
	th{
		background-color: #588c7e;
		color: white;
	}
	tr:nth-child(even){
		background-color: #f2f2f2
	}
	input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 10px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
	
</style>
<title>Complaint Showcase</title>
</head>
<body>
	<header id="mainHeader">
		<div class="container" style="background-color: #ffcccc;padding: 10px;">
			<h1>Complaint Showcase</h1>
		</div> <!--container-->
	</header>
	<nav id="navbar">
		<div class="container"style="background-color: #ffcccc;font-size: 30;">
			<ul>
				<li ><a href="index.html">Home</a></li>
			</ul>
		</div> <!--container-->
	</nav>
	<div class="container text-center">
	</br>
	<h2>FILTER</h2>
	<p>Fill these boxes for specific complaints</p>
		<form action="complaintShowcase.php" method="POST">
			
			<input type="text" name="Catagory" placeholder="Catagory"/></br>
			<input type="text" name="UserId" placeholder="User Id"/><br/>
			<input type="text" name="Year" placeholder="Year"/><br/>
			<input type="text" name="Status" placeholder="Status"/><br/>
			<button type="submit" name="sub" class="btn btn-primary" style="width: 50%;">Show Complaints</button><br/>
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

					$query = "SELECT * FROM `complaints` WHERE 1";

					if($catagory)
						$query = $query." AND Catagory LIKE '$catagory'";
					if($year)
						$query = $query." AND Year LIKE '$year'";
					if($userId)
						$query = $query." AND UserId LIKE '$userId'";
					if($status)
						$query = $query." AND Status LIKE '$status'";

					$result = mysqli_query ($mysqli, $query);

					if(mysqli_num_rows($result) >0){
						echo
							"<tr><th>". "Coplaint ID" ."</th><th>". "UserId" ."</th><th>". "Catagory" ."</th><th>". "Year" ."</th><th>". "Staus" ."</th></tr>";
						while ($row = mysqli_fetch_row($result)){
							
							echo
							"<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
						}
						echo "</table>";
					}
					else{
						echo
						"<div class='container mt-5' style='width: 30rem;'>
							<div class='alert alert-danger text-center' role='alert'>
							No match found :(
							</div>
						</div>";
					}
				}
			?>
		</div>
	</div>
	</table>
	<p style="text-align: center;padding: 5px;background-color: #ffcccc;margin-top: 5%">Copyright: Md. Nuruzzaman, Id: 18301126, CSE370, Sec:06</p>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

