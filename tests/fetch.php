<?php
//fetch.php
$source = $_POST['query'];
$dest = $_POST['query2'];
$departure_date = $_POST['query3'];
$return_date = $_POST['query4'];
$srcCity = $_POST['srcCity'];
$destCity = $_POST['destCity'];
echo "source is: <i style='color:gold'>".$source.":".$srcCity."</i> dest is: <i style='color:blue'>".$dest.":".$destCity."</i>departure date is: <i style='color:green'>".$departure_date."</i> return date is: <i style='color:grey'>".$return_date."</i>";
$connect = mysqli_connect("localhost", "ishimwe", "Divin@12345", "testing");
$output = '';
if(isset($_POST["query"]) && isset($_POST["query2"]) && isset($_POST["query3"]) && isset($_POST["query4"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $search2 = mysqli_real_escape_string($connect, $_POST["query2"]);
 $search3 = mysqli_real_escape_string($connect, $_POST["query3"]);
 $search4 = mysqli_real_escape_string($connect, $_POST["query4"]);
 $search5 = mysqli_real_escape_string($connect, $_POST["srcCity"]);
 $search6 = mysqli_real_escape_string($connect, $_POST["destCity"]);
 $query = "
  SELECT * FROM test WHERE source LIKE '%".$search.":".$search5."%'
  AND destination LIKE '%".$search2.":".$search6."%' AND depart_date LIKE
  '%".$search3."%' AND return_date LIKE '%".$search4."%' 
  ";
}
else
{
 $query = "
  SELECT * FROM test ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="row mb-2">
 ';
 while($row = mysqli_fetch_array($result))
 {
  $str = serialize($row);
  $strEnc = urlencode($str);
  $output .= '
  <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-150" style="border-radius:0px;">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">travel</strong>
              <p class="mb-1">
                <a class="text-muted" href="#">'.$row["source"].'</a><br>
                <center>|<br>|<br>\/</center>
                <a class="text-muted" href="#">'.$row["destination"].'</a><br>
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
              <div class="card-header">
              <a class="btn btn-primary" href="../views/single-view.php?data='.$strEnc.'">view more</a>
              </div>         
          </div>
        </div>
  ';
 }
 $output.='</div>';
 echo $output;
}
else
{
 echo '!!!!!Data Not Found';
}
?>
<!-- <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div> -->
