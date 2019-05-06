<?php		
	$keyword = strval($_POST['query']);
	$search_param = "%{$keyword}%";
	$conn =new mysqli('localhost', 'ishimwe', 'D1 ' , 'testing');

	$sql = $conn->prepare("SELECT * FROM test WHERE source LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$sourceResult[] = $row["source"];
		}
		echo json_encode($sourceResult);
	}
	$conn->close();
?>

