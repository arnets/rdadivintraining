<!DOCTYPE html>
<html>
<head>
	<title>my form search</title>
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="js/typeahead.js"></script> -->
    <script type= "text/javascript" src = "countries.js"></script>
    <link href="../public/css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
</head>
<body>
    <div class="container" ng-app="live_search_app" ng-controller="live_search_controller" ng-init="fetchData()">
    <div class="form-group" style="margin-top: 100px;">
    <div class="input-group">
    <div class="form-label-group">
    <select class="form-control searching" id="search_text" name="search_text" style="height: 62px" ng-model="insert_query">
    </select>
     </div>
    <!-- <div class="form-label-group">
    <select class="form-control searching" id="srcCity" name="srcCity" style="height: 62px">
    </select>
     </div> -->
    <div class="form-label-group">
    <select class="form-control searching" id="search_text2" name="search_text2" style="height: 62px;" ng-model="insert_query2">
    </select>
     </div>
    <!-- <div class="form-label-group">
    <select class="form-control searching" id="destCity" name="destCity" style="height: 62px">
    </select>
     </div> -->
     <!-- <div class="form-label-group">
     <input type="date" name="search_text3" id="search_text3" placeholder="Search by date" class="form-control"/>
     <label class="demo-label" for="source">date de depart</label>
     </div>
     <div class="form-label-group">
     <input type="date" name="search_text4" id="search_text4" placeholder="Search by date" class="form-control"/>
     <label class="demo-label" for="source">date de retour</label>
     </div> -->
    </div>
    <button id="search" type="submit" class="btn btn-default" ng-click="fetchData()">insert</button>
    <!-- {{search_query}}
    {{searchData}} -->
   </div>
   <br />
   <!-- <div id="result" class="showResult">
     <div class="row mb-2">
       <div class="col-md-6" ng-repeat="x in searchData">
          <div class="card flex-md-row mb-4 box-shadow h-md-150" style="border-radius:0px;">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">travel</strong>
              <p class="mb-1">
                <a class="text-muted" href="#">{{x.source}}</a><br>
                <center>|<br>|<br>\/</center>
                <a class="text-muted" href="#">{{x.destination}}</a><br>
              </p>
              <p class="card-text mb-auto"></p>
            </div>
            <div class="card-body">
            <strong class="d-inline-block mb-2 text-primary" ng-show="this">dates</strong>
              <p class="mb-1">
                <a class="text-muted" href="#">{{x.depart_date}}</a><br>
                |<br>|<br>|<br>
                <a class="text-muted" href="#">{{x.return_date}}</a><br>
              </p>
              </div>
              <div class="card-header">
              <!-- <a class="btn btn-primary" href="single-view.php?source={{x.source}}&destination={{x.destination}}&depart={{x.depart_date}}&return={{x.return_date}}">view more</a> -->
							<!-- <a class="btn btn-primary" href="" data-toggle="collapse" data-target="#more">view more</a>
              <div ng-show = "IsVisible">zxzczx</div>
              </div>
          </div>
					<div id="more" class="collapse">
					<div class="card flex-md-row mb-4 box-shadow h-md-150" style="border-radius:0px;">
						<div class="card-text">
							<strong class="d-inline-block mb-2 text-primary">MORE DATA</strong>
						</div>
						<div class="card-body d-flex flex-column align-items-start">
							<strong class="d-inline-block mb-2 text-primary">travel</strong>
							<p class="mb-1">
								<a class="text-muted" href="#">{{x.source}}</a><br>
								<center>|<br>|<br>\/</center>
								<a class="text-muted" href="#">{{x.destination}}</a><br>
							</p>
							<p class="card-text mb-auto"></p>
						</div>
						<div class="card-body">
						<strong class="d-inline-block mb-2 text-primary" ng-show="this">dates</strong>
							<p class="mb-1">
								<a class="text-muted" href="#">{{x.depart_date}}</a><br>
								|<br>|<br>|<br>
								<a class="text-muted" href="#">{{x.return_date}}</a><br>
							</p>
							</div>
							<div class="card-header">
              <a class="btn btn-primary" href="../Classes/controllers/myController.php?source={{x.source}}&destination={{x.destination}}&depart={{x.depart_date}}&return={{x.return_date}}">booking</a>
							 <a class="btn btn-primary" href="../Classes/controllers/dataHandler.php">view more</a> -->
              <!-- </div>
					</div>
				</div>
        </div>
      </div>
   </div> -->
  </div>
</body>
<script>
var app = angular.module('live_search_app', []);
app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"POST",
   url:"../Classes/controllers/Controller.php",
   data:{insert_query:$scope.insert_query,insert_query2:$scope.insert_query2}
  }).success(function(data){
   $scope.searchData = data;
  });
 };
});
</script>
<script language="javascript">
  populateCountries("search_text","srcCity");
  populateCountries("search_text2","destCity");
</script>
</html>
