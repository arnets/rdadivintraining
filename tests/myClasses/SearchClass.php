<?php
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);
class Search
{
	public $data = array();
	public $connect;
	public function searching($query1, $query2)
	{

		$this->connect = mysqli_connect("localhost", "ishimwe", "Divin@12345", "testing");
		if ($query2 != "" && $query1 != "")
	    {

			$query = "SELECT * FROM test WHERE destination LIKE '%$query2%' AND source LIKE '%$query1%'";
		}
		else
		{
 			$query = "SELECT * FROM test ORDER BY id ASC";
		}

		//$statement = $this->connect->prepare($query);

		//if($statement->execute())
		$result = mysqli_query($this->connect, $query);
 			while($row = mysqli_fetch_assoc($result))
		 	{
  				$this->data[] = $row;
 			}
		 	echo json_encode($this->data);
	}
}
// $obj = new Search();
// $output = $obj->searching("","");
?>
