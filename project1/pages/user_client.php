<?php
   class client{
      public function __construct(){
         $params = array('location'=>'http://localhost/rdanewproject/project1/pages/user_server.php',
                          'uri'=>'urn://localhost/rdanewproject/project1/pages/user_server.php',
                          'trace'=>1);
         $this->instance = new SoapClient(NULL,$params);
      }
      public function getSeat($data_array){
        return $this->instance->__soapcall('getSeats',$data_array);
      }
   }
   $client = new client( );
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
  <script type="text/javascript" src="../scripts/bootstrap.js"></script>
  <script type="text/javascript" src="../scripts/jquery.js"></script>
</head>
<body style="background-image: url(../Assets/images/bg.jpg);">
  <div class="container bg-light mt-3">
    <form class="form-inline" method="POST">
      <div class="form-group p-2">
        <label for="source">From:</label>
        <input type="text" name="source" class="form-control" placeholder="Enter Departure" required>
      </div>
      <div class="form-group p-2">
        <label for="destin">Destination:</label>
        <input type="text" name="destination" class="form-control" placeholder="Enter Destination" required>
      </div>
      <div class="form-group p-2">
        <label for="depart_date">Departure Date:</label>
        <input type="date" name="depart_date" class="form-control" required>
      </div>
      <div class="form-group p-2">
        <label for="return_date">Return Date:</label>
        <input type="date" name="return_date" class="form-control" required>
      </div>
      <div class="form-group p-2">
        <label for="passenger">N<sup>o</sup> of Passenger:</label>
        <input type="number" name="passenger" class="form-control" placeholder="1" style="width: 80px;" required>
      </div><br>
      <input type="submit" name="search" value="Search" class="btn btn-success">
    </form>
  </div>
  <form method="POST" action="detailsform.php">
    <div class="container mt-3 bg-light p-2"> 
      <?php
        if (isset($_POST["search"])) {
          $data_array = array('source'=>$_POST['source'],
                    'destination'=>$_POST['destination'],
                    'depart_date'=>$_POST['depart_date'],
                    'return_date'=>$_POST['return_date'],
                    'passenger'=>$_POST['passenger']
          );
          $datas = $client->getSeat($data_array);
          if (!empty($datas)) {
            echo "<table class='table table-striped'>";
              echo "<thead>
                      <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Depart Date</th>
                        <th>Return Date</th>
                        <th>Available seat</th>
                        <th>Decision</th>
                      </tr>
                    </thead>";
                    echo "<tbody>";
                      foreach ($datas as $key) {
                        echo "<tr>";
                          echo "<td>".$key['source']."</td>";
                          echo "<td>".$key['destination']."</td>";
                          echo "<td>".$key['depart_date']."</td>";
                          echo "<td>".$key['return_date']."</td>";
                          echo "<td>".$key['seat']."</td>";
                          echo "<td> <input type='submit' name='book' value='Book' class='btn btn-success'></td>";
                        echo "</tr>";
                      }
                      echo "</tbody>";
            echo "</table>";  
          }
          else{
            echo "<div class='alert alert-danger'>";
                echo "<strong>Sorry! No book found for this search. Try for other book.</strong>";
            echo "</div>";
          }
        }
      ?>
    </div>
  </form>
</body>
</html>