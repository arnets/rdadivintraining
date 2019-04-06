<!DOCTYPE html>
<html>
<head>
	<title>my form</title>
</head>
<body>
	<?php
	include"query.php";
    if (isset($_POST['submit'])) {
    	$source="'".$_POST['source']."'";
    	$dest ="'".$_POST['destination']."'";
    	$date = "'".$_POST['this_date']."'";
    	$insert= new Query();
    	$insert->data[0] = $source;
    	$insert->data[1] = $dest;
    	$insert->data[2] = $date;
    	$insert->field[0] = "source";
    	$insert->field[1] = "destination";
    	$insert->field[2] = "date";
    	$insert->insert(3,'test');
    }
	?>
<form method="POST" action="form.php" style="background: gold;padding: 10px 0px 20px 20px;"> 
	<label><h3>MY FORM</h3></label>
	<select name="source">
		<option>kicukiro</option>
		<option>nyarugenge</option>
		<option>gasabo</option>
	</select><br><br>
	<select name="destination">
		<option>kicukiro</option>
		<option>nyarugenge</option>
		<option>gasabo</option>
	</select><br><br>
	<input type="date" name="this_date"><br><br>
	<button type="submit" name="submit">submit</button>
	<a href="view.php">view data</a>
</form>
</body>
</html>