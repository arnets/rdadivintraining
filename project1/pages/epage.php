<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
	<script type="text/javascript" src="../scripts/bootstrap.js"></script>
	<script type="text/javascript" src="../scripts/jquery.js"></script>
</head>
<body style="background-image: url(../Assets/images/bg.jpg);">
	<div class="row mt-3">
		<div class="container col-sm-4 bg-light">
			<form method="POST">
				<p>Your Booking request has been received.</p>
				<p>Please Enter Your Password to confirm.</p>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" placeholder="Enter pasword" name="pwd" required class="form-control">
				</div>
				<input type="submit" name="confirm" value="Confirm" class="btn btn-success">
			</form>
		</div>
	</div>
	<div class="row mt-2">
		<div class="container col-sm-4 bg-light pt-2">
			<?php
				if (isset($_POST["confirm"])) {
					echo "<div class='alert alert-success'>";
            			echo "<strong>Thank You for using our system.! Your Ticket will be sent to your email!!!!</strong>";
        			echo "</div>";
				}
			?>
		</div>
	</div>
</body>
</html>
