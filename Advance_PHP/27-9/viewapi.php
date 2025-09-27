<?php
 
  include('connect.php');

  $sql = "select * from products";
  $response = array();
  $r = mysqli_query($con,$sql);


  while($row = mysqli_fetch_array($r))
  {
        $data["id"] = $row["id"];
        $data["product_name"] = $row["p_name"];
        $data["product_price"] = $row["p_price"];

        array_push($response,$data);
  }

  echo json_encode($response);
  mysqli_close($con);
?>