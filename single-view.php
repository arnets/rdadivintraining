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
<div class="container">    
    <?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id']; 
        include"connection.php";
        $dsn ="mysql:host=localhost;dbname=testing";
        $user ="ishimwe";
        $pass ="D1 ";
        $con = new Connection($dsn,$user,$pass); 
        $query= $con->prepare("SELECT * from test WHERE id = ".$id." ORDER BY id DESC");
        $query->execute();
        $output .= '
            <div class="row mb-2">
                ';
        while($row= $query->fetch()){
        $output .= '
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-150">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">travel</strong>
              <p class="mb-1">
                <a class="text-muted" href="#">source: '.$row["source"].'</a><br>
                <center>|<br>|<br>\/</center>
                <a class="text-muted" href="#">destination: '.$row["destination"].'</a><br>
              </p>
              <p class="card-text mb-auto"></p>
            </div>
            <div class="card-body">
            <strong class="d-inline-block mb-2 text-primary">dates</strong>
              <p class="mb-1">
                <a class="text-muted" href="#">depart: '.$row["departure_date"].'</a><br>
                |<br>|<br>|<br>
                <a class="text-muted" href="#">retour: '.$row["return_date"].'</a><br>
              </p>
              </div>        
          </div>
        </div>
  ';
 }

 $output.='</div>';
 echo $output;
}
    	?>
<br>        
<a href="form-search.php" class="btn btn-primary">back</a>
</div>
</body>
</html>