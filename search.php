<?php
        include"connection.php";
        $dsn ="mysql:host=localhost;dbname=testing";
        $user ="ishimwe";
        $pass ="D1 ";
        $con = new Connection($dsn,$user,$pass);
        $searchTerm =$_GET['term'];
        $query= $con->prepare("SELECT * from test where source like '%".$searchTerm."%' ORDER BY source ASC");
        while($row = $query->fetch_assoc()){
            $data[] = $row['source'];
        } 
        echo json_encode($data);
    	?>