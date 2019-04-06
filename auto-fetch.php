<?php
$connect = mysqli_connect("localhost","ishimwe","D1 ","testing");
$output='';
$sql = "SELECT * FROM test where source LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result)> 0)
{
	$output .= '<div class="table-responsive>
    <table class="table table bordered">
    <tr>
    <td>source</td>
    </tr>
	"';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<tr>
 		<td>'.$row["source"].'</td>
 		</tr>
		';
		echo $output;
	}
}
else{
	echo"no data found";
}
?>