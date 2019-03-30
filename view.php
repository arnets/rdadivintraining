<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
</head>
<body>
<table style="border: 1px solid;background: gold;">
	<tr style="background: black;color: white">
		<td>source</td>
		<td>destination</td>
		<td>date</td>
	</tr>
    <?php
        include"connection.php";
        $queryy= $pdo->prepare("SELECT * from test ORDER BY id DESC");
        $queryy->execute();
        while($data= $queryy->fetch()){
    	echo'
        <tr>
         <td>'.$data['source'].'</td>
         <td>'.$data['destination'].'</td>
         <td>'.$data['date'].'</td>
        </tr>
    	';
        }
    	?>
</table>
<a href="form.php">back</a>
</body>
</html>