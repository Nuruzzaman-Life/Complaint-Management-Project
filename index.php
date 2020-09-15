
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
</head>
<body>
	<div class="container text-center">
	</br>
	<h2>Search For Your Dream Job</h2>
		<form action="index.php" method="POST">
			
			<select name="Catagory" required>
                <option value="" disabled selected hidden>Choose Catagory</option>
				<option value = "Accounting/Finance"> Accounting/Finance </option>
				<option value = "Bank/ Non-Bank Fin. Institution"> Bank/ Non-Bank Fin. Institution </option>
				<option value = "Commercial/Supply Chain"> Commercial/Supply Chain </option>
				<option value = "Education/Training">Education/Training </option>
				<option value = "Driving/Motor Technician"> Driving/Motor Technician </option>
				<option value = "NGO/Development"> NGO/Development </option>
				<option value = "Beauty Care/ Health & Fitness"> Beauty Care/ Health & Fitness </option>
				<option value = "Hospitality/ Travel/ Tourism">Hospitality/ Travel/ Tourism </option>
				<option value = "Electrician/ Construction/ Repair"> Electrician/ Construction/ Repair </option>
				<option value = "Medical/Pharma"> Medical/Pharma </option>
				<option value = "Agro (Plant/Animal/Fisheries)"> Agro (Plant/Animal/Fisheries) </option>
				<option value = "Customer Support/Call Centre">Customer Support/Call Centre </option>
			</select>
			</br>
			<input type="text" name="Title" placeholder="Title"/><br/>
			<input type="text" name="Skill" placeholder="Skill"/><br/>
			<input type="text" name="Location" placeholder="Location"/><br/>
			<button type="submit" name="sub" class="btn btn-primary" style="width: 40%;">Search</button><br/>
		</form>
		<div class='row text-center'>	
			<?php
				require_once("Connection.php");
				if(isset($_POST['sub'])){
					$title = $_POST['Title'];
					$location= $_POST['Location'];
					$skill= $_POST['Skill'];
					$catagory= $_POST['Catagory'];

					$query = "SELECT * FROM jobs WHERE Catagory LIKE '$catagory'";

					if($title)
						$query = $query." AND Title LIKE '$title'";
					if($skill)
						$query = $query." AND Skill LIKE '$skill'";
					if($location)
						$query = $query." AND Location LIKE '$location'";

					$query_run = mysqli_query ($connect, $query);

					if(mysqli_num_rows($query_run) > 0){
						while ($row = mysqli_fetch_row($query_run)){
							echo
							"<div class='card col-4 mb-3'>
								<div class='card-body'>
									<h5 class='card-title'>$row[2]</h5>
									<p class='card-text'>
										Catagory: $row[1]</br>
										Skill: $row[3]</br>
										Location: $row[4]</br>
									</p>
									<a href='sms.php' class='card-link'> Apply Now </a>
								</div>
							</div>";
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

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

