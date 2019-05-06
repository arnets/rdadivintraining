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
</head>
<body>
    <div class="container">
   <div class="form-group" style="margin-top: 100px;">
    <div class="input-group">
    <div class="form-label-group">   
    <select class="form-control searching" id="search_text" name="search_text" style="height: 62px">
    </select>
     </div>
    <div class="form-label-group">   
    <select class="form-control searching" id="srcCity" name="srcCity" style="height: 62px">
    </select>
     </div>
    <div class="form-label-group">   
    <select class="form-control searching" id="search_text2" name="search_text2" style="height: 62px;">
    </select>
     </div>
    <div class="form-label-group">   
    <select class="form-control searching" id="destCity" name="destCity" style="height: 62px">
    </select>
     </div>
     <div class="form-label-group">
     <input type="date" name="search_text3" id="search_text3" placeholder="Search by date" class="form-control" />
     <label class="demo-label" for="source">date de depart</label>
     </div>
     <div class="form-label-group">
     <input type="date" name="search_text4" id="search_text4" placeholder="Search by date" class="form-control" />
     <label class="demo-label" for="source">date de retour</label>
     </div>
    </div>
    <button id="search" type="submit" class="btn btn-default">search</button>
   </div>
   <br />
   <div id="result" class="showResult"></div>
  </div>
</body>
<script>
$(document).ready(function(){
 $("#result").hide();
 load_data();

 function load_data(query,query2,query3,query4,srcCity,destCity)
 {
  $.ajax({
   url:"../controllers/fetch.php",
   method:"POST",
   data:{query:query,query2:query2,query3:query3,query4:query4,srcCity:srcCity,destCity:destCity},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search').click(function(){
  $("#result").slideToggle(500);
  var search = $('#search_text').val();
  var search2 = $('#search_text2').val();
  var search3 = $('#search_text3').val();
  var search4 = $('#search_text4').val();
  var search5 = $('#srcCity').val();
  var search6 = $('#destCity').val();
  if(search != '')
  {
   load_data(search,search2,search3,search4,search5,search6);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<script language="javascript">
  populateCountries("search_text","srcCity");
  populateCountries("search_text2","destCity");
</script>
</html>