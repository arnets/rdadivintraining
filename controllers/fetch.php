<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include"common/soapHandler.php";
$id_array = array('id' => '1');
echo $client->fetchData($id_array);

// if($query->rowCount()>0)
// {
//  $output .= '
//   <div class="row mb-2">
//  ';
//  while($row = $query->fetch())
//  {
//   $str = serialize($row);
//   $strEnc = urlencode($str);
//   $output .= '
//   <div class="col-md-6">
//           <div class="card flex-md-row mb-4 box-shadow h-md-150" style="border-radius:0px;">
//             <div class="card-body d-flex flex-column align-items-start">
//               <strong class="d-inline-block mb-2 text-primary">travel</strong>
//               <p class="mb-1">
//                 <a class="text-muted" href="#">'.$row["source"].'</a><br>
//                 <center>|<br>|<br>\/</center>
//                 <a class="text-muted" href="#">'.$row["destination"].'</a><br>
//               </p>
//               <p class="card-text mb-auto"></p>
//             </div>
//             <div class="card-body">
//             <strong class="d-inline-block mb-2 text-primary">dates</strong>
//               <p class="mb-1">
//                 <a class="text-muted" href="#">depart: '.$row["departure_date"].'</a><br>
//                 |<br>|<br>|<br>
//                 <a class="text-muted" href="#">retour: '.$row["return_date"].'</a><br>
//               </p>
//               </div>
//               <div class="card-header">
//               <a class="btn btn-primary" href="../views/single-view.php?data='.$strEnc.'">view more</a>
//               </div>         
//           </div>
//         </div>
//   ';
//  }
//  $output.='</div>';
//  echo $output;
// }
// else
// {
//  echo '!!!!!Data Not Found';
// }

?>
