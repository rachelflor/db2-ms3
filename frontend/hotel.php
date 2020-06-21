<?php
include_once('/Users/rachel/PhpstormProjects/frontend/connection.php');
function getAllHotels(){
  $connection = dbconnection();
  $sql = "SELECT * FROM Hotel";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_array($result);
  }
  return $data;
}




