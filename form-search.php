<!DOCTYPE html>
<html>
<head>
	<title>my form</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.js"></script>
    <link href="css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!--     <style type="text/css">
        input[type="text"]{
            border-radius: 0px;
            width: 300px;
            height: 52px;
        }
        input[type="date"]{
            border-radius: 0px;
            width: 300px;
        }
    </style> -->    
</head>
<body>
    <div class="container">
   <br />
   <br />
   <div class="form-group">
    <div class="input-group">
     <div class="form-label-group">   
     <input type="text" name="search_text" id="search_text" placeholder="source" class="form-control typeahead" />
     <label class="demo-label" for="source">source city</label>
     </div>
     <div class="form-label-group">
     <input type="text" name="search_text2" id="search_text2" placeholder="destination" class="form-control typeahead" />
     <label class="demo-label" for="destination">destination city</label>
     </div>
     <div class="form-label-group">
     <input type="date" name="search_text3" id="search_text3" placeholder="Search by date" class="form-control typeahead" />
     <label class="demo-label" for="source">date</label>
     </div>
    </div>
    <button id="search" type="submit" class="btn btn-default">search</button>
   </div>
   <br />
   <div id="result"></div>
  </div>
<!-- <div class="jumbtron" style="margin-top: -350px;background: url(images/cover.jpg) no-repeat center center/cover;">   
<div class="form-inline" style="padding: 50px 0px 20px 20px;"> 
    <div class="form-label-group">
        <input type="text" name="source" id="search_text" class="form-control typeahead" placeholder="source city" required autofocus>
        <label class="demo-label" for="source">source city</label>
    </div>
    <div class="form-label-group">
        <input type="text" name="destination" id="destination search_text2" class="form-control typeahead" placeholder="destination city" required autofocus>
        <label class="demo-label" for="source">destination city</label>
    </div>
   <div class="form-label-group">
        <input type="date" name="departure" id="departure search_text3" min="" class="form-control typeahead" placeholder="departure" required autofocus>
        <label class="demo-label" for="departure">departure date</label>
    </div>
    <div class="form-label-group">
        <input type="date" name="return" id="return" class="form-control typeahead" placeholder="return" required autofocus>
        <label class="demo-label" for="return">return date</label>
    </div>
    <button type="submit" class="btn btn-success" id="search" name="search">search</button>
</div>
</div> -->
</body>
<script>
    $(document).ready(function () {
        $('#search_text').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "server.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#search_text2').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "server2.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
            }
        });
    });
</script>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query,query2,query3)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query,query2:query2,query3:query3},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search').click(function(){
  var search = $('#search_text').val();
  var search2 = $('#search_text2').val();
  var search3 = $('#search_text3').val();
  if(search != '')
  {
   load_data(search,search2,search3);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</html>