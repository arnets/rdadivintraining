<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.js"></script>
    <link href="css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="table-responsive">    
<table class="table talbe bordered">
	<a href="form.php" class="btn btn-primary">back</a>
    <tr>
		<th>source</th>
		<th>destination</th>
		<th>date</th>
	</tr>
    <?php
        include"connection.php";
        $dsn ="mysql:host=localhost;dbname=testing";
        $user ="ishimwe";
        $pass ="D1 ";
        $con = new Connection($dsn,$user,$pass); 
        $query= $con->prepare("SELECT * from test ORDER BY id DESC");
        $query->execute();
        while($data= $query->fetch()){
    	echo'
        <tr>
         <td>'.$data['source'].'</td>
         <td>'.$data['destination'].'</td>
         <td>'.$data['date'].'</td>
        </tr>
    	';
        }
    	?>
</table>
</div>
</body>
</html>