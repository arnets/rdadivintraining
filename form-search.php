<!DOCTYPE html>
<html>
<head>
	<title>my form search</title>
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/countries.js"></script>
    <link href="css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
   <div class="form-group" style="margin-top: 1000px;">
    <div class="input-group">
    <div class="form-label-group">   
    <select class="form-control searching" id="search_text" name="search_text" style="height: 62px">
    </select>
     </div>
    <div class="form-label-group">   
    <select class="form-control searching" id="search_text2" name="search_text2" style="height: 62px;">
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
   <div id="result"></div>
  </div>
</body>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query,query2,query3,query4)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query,query2:query2,query3:query3,query4:query4},
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
  var search4 = $('#search_text4').val();
  if(search != '')
  {
   load_data(search,search2,search3,search4);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<script language="javascript">
  populateCountries("search_text");
  populateCountries("search_text2");
</script>
</html>