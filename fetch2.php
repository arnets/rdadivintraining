<?php
include"../models/connection.php";

$source = $_POST['query'];
$dest = $_POST['query2'];
$departure_date = $_POST['query3'];
$return_date = $_POST['query4'];
$srcCity = $_POST['srcCity'];
$destCity = $_POST['destCity'];
echo "source is: <i style='color:gold'>".$source.":".$srcCity."</i> dest is: <i style='color:blue'>".$dest.":".$destCity."</i>departure date is: <i style='color:green'>".$departure_date."</i> return date is: <i style='color:grey'>".$return_date."</i>";
$dsn ="mysql:host=localhost;dbname=testing";
$user ="ishimwe";
$pass ="Divin@12345";
$pdo = new Connection($dsn,$user,$pass);
$output = '';
if(isset($_POST["query"]) && isset($_POST["query2"]) && isset($_POST["query3"]) && isset($_POST["query4"]))
{

 $search = $_POST["query"];
 $search2 = $_POST["query2"];
 $search3 = $_POST["query3"];
 $search4 = $_POST["query4"];
 $search5 = $_POST["srcCity"];
 $search6 = $_POST["destCity"];

  $query = $pdo->prepare("
  SELECT * FROM test WHERE source LIKE '%".$search.":".$search5."%'
  AND destination LIKE '%".$search2.":".$search6."%' AND depart_date LIKE
  '%".$search3."%' AND return_date LIKE '%".$search4."%' 
  ");
}
else
{
 $query = $pdo->prepare("
  SELECT * FROM test ORDER BY id
 ");
}
$query->execute();
if($query->rowCount()>0)
{
 $output .= '
  <div class="row mb-2">
 ';
 while($row = $query->fetch())
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
