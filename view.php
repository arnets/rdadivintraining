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
        $dsn ="mysql:host=localhost;dbname=testing";
        $user ="ishimwe";
        $pass ="D1 ";
        $con = new Connection($dsn,$user,$pass); 
        $query= $con->prepare("SELECT * from test ORDER BY id DESC");
        $query->execute();
        while($data= $query->fetch()){
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