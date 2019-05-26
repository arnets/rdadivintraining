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
  <?php
if (isset($_GET['source']))
{
  ?>
<div class="container" style="padding-top: 10px;">    
  <div id="result" class="showResult">
     <div class="row mb-2">
       <div class="col-md-6" ng-repeat="x in searchData">
          <div class="card flex-md-row mb-4 box-shadow h-md-150" style="border-radius:0px;">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">travel</strong>
              <p class="mb-1">
                <a class="text-muted" href="#"><?php echo $_GET['source'];?></a><br>
                <center>|<br>|<br>\/</center>
                <a class="text-muted" href="#"><?php echo $_GET['destination'];?></a><br>
              </p>
              <p class="card-text mb-auto"></p>
            </div>
            <div class="card-body">
            <strong class="d-inline-block mb-2 text-primary">dates</strong>
              <p class="mb-1">
                <a class="text-muted" href="#"><?php echo $_GET['depart'];?></a><br>
                |<br>|<br>|<br>
                <a class="text-muted" href="#"><?php echo $_GET['return'];?></a><br>
              </p>
              </div>       
          </div>
        </div>
      </div>
   </div>
<br>        
<a href="form-search.php" class="btn btn-primary">back</a>
</div>
<?php
}
?>
</body>
</html>