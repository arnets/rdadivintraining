<!DOCTYPE html>
<html>
<head>
	<title>Details Form</title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
	<script type="text/javascript" src="../scripts/bootstrap.js"></script>
	<script type="text/javascript" src="../scripts/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('input[type="radio"]').click(function(){
				var inputvalue = $(this).attr("value");
				var targetdiv = $("."+inputvalue);
				// $(".box").not(targetdiv).hide();
				$(targetdiv).show();
			});
		});
	</script>
</head>
<body style="background-image: url(../Assets/images/bg.jpg);">
	<div class="row">
		<div class="container col-sm-4 bg-light mt-3">
			<form method="POST" class="" action="epage.php">
				<div class="form-group p-2 mb-0">
					<label for="Firstname">First Name:</label>
					<input type="text" name="fname" class="form-control" required>
				</div>
				<div class="form-group p-2 mb-0">
					<label for="lname">Last Name:</label>
					<input type="text" name="lname" class="form-control" required>
				</div>
				<div class="form-group p-2 mb-0">
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" required>
				</div><br>
				<div class="form-group mb-0 mt-0">
					<label class="form-label d-inline-block">Payment Method</label>
				</div>
				<div class="form-check mt-0">
					<input class="form-check-input" type="radio" name="radiobuttons" id="credit_card" value="credit_card">
					<label class="form-check-label">Credit Card</label>
					<div class="form-check credit_card box" style="display: none">
						<input class="form-check-input" type="radio" name="radiobuttons" id="credit_card_visa" value="credit_card_visa">
						<label class="form-check-label">VISA card</label>
						<input type="text" name="card_number" class="form-control credit_card_visa box" style="display: none;">
					</div>
					<div class="form-check credit_card box" style="display: none">
						<input class="form-check-input" type="radio" name="radiobuttons" id="credit_card_master" value="credit_card_master">
						<label class="form-check-label">Master card</label>
						<input type="text" name="card_number" class="form-control credit_card_master box" style="display: none;">
					</div>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="radiobuttons" id="momo" value="momo">
					<label class="form-check-label">Mobile Money(MoMo)</label>
					<input type="text" name="momo" placeholder="Enter Momo Phone Number" class="form-control momo box" style="display: none">
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="radiobuttons" id="paypal" value="paypal">
					<label class="form-check-label">PayPal</label>
					<input type="email" name="momo" placeholder="Enter paypal email" class="form-control paypal box" style="display: none"><br>
					<input type="password" name="momo" placeholder="Enter paypal password" class="form-control paypal box" style="display: none">
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="radiobuttons" id="debit_card" value="debit_card">
					<label class="form-check-label">Debit Card</label>
					<div class="form-check debit_card box" style="display: none">
						<input class="form-check-input" type="radio" name="radiobuttons" id="debit_card_visa" value="debit_card_visa">
						<label class="form-check-label">VISA card</label>
						<input type="text" name="momo" class="form-control debit_card_visa box" style="display: none;">
					</div>
					<div class="form-check debit_card box" style="display: none">
						<input class="form-check-input" type="radio" name="radiobuttons" id="debit_card_master" value="debit_card_master">
						<label class="form-check-label">Master card</label>
						<input type="text" name="momo" class="form-control debit_card_master box" style="display: none;">
					</div>
				</div>
				<input type="submit" name="submit" value="Book" class="btn btn-success mt-2">
			</form>
		</div>
	</div>
</body>
</html>