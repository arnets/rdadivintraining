<?php
include '../Classes/Connection.php';
// $data = json_decode(file_get_contents("php://input"));
// $source = $data->source;
// $destination = $data->destination;
// $srcCity = $data->srcCity;
// $destCity = $data->destCity;
// $departDate = $data->departDate;
// $returnDate = $data->returnDate;
$dsn ="mysql:host=localhost;dbname=testing";
$user ="";
$pass ="";
$connect = new Connection($dsn,$user,$pass);
$form_data = json_decode(file_get_contents("php://input"));
$query = '';
$data = array();
if(isset($form_data->search_query)  && isset($form_data->search_query2))
{
 $search_query = $form_data->search_query;
 $search_query2 = $form_data->search_query2;
 $query = "
 SELECT * FROM test 
 WHERE destination LIKE '%$search_query2%' AND source LIKE '%$search_query%' 
 ";
}
else
{
 $query = "SELECT * FROM test ORDER BY id ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>