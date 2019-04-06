<?php
//fetch.php
$source = $_POST['query'];
$dest = $_POST['query2'];
$date = $_POST['query3'];
echo "source is: ".$source." dest is: ".$dest." date is: ".$date;
$connect = mysqli_connect("localhost", "ishimwe", "D1 ", "testing");
$output = '';
if(isset($_POST["query"]) && isset($_POST["query2"]) && isset($_POST["query3"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $search2 = mysqli_real_escape_string($connect, $_POST["query2"]);
 $search3 = mysqli_real_escape_string($connect, $_POST["query3"]);
 $query = "
  SELECT * FROM test WHERE source LIKE '%".$search."%'
  AND destination LIKE '%".$search2."%' AND date LIKE
  '%".$search3."%' 
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
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>source</th>
     <th>destination</th>
     <th>date</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["source"].'</td>
    <td>'.$row["destination"].'</td>
    <td>'.$row["date"].'</td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>