<!DOCTYPE html>
<html>
<head>
	<title>my form save</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.js"></script>
    <link href="css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
<div class="jumbtron" style="margin-top: -350px;background: url(images/cover.jpg) no-repeat center center/cover;">   
<form class="form-inline" style="padding: 50px 0px 20px 20px;" method="POST"> 
    <div class="form-label-group">
        <input type="text" name="source" id="source" class="form-control typeahead" placeholder="source city" required autofocus>
        <label class="demo-label" for="source">source city</label>
    </div>
    <div class="form-label-group">
        <input type="text" name="destination" id="destination" class="form-control typeahead" placeholder="destination city" required autofocus>
        <label class="demo-label" for="source">destination city</label>
    </div>
   <div class="form-label-group">
        <input type="date" name="this_date" id="date" min="2019-04-06" class="form-control typeahead" placeholder="departure" required autofocus>
        <label class="demo-label" for="departure">date</label>
    </div><br><br>
    <button type="submit" class="btn btn-success" id="search" name="submit">save</button>
    <a href="form-search.php" class="btn btn-primary">view data</a>
</form>
</div>
</body>
</html>