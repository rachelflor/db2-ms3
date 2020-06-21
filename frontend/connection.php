<?php
function dbconnection(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';
  try {
    $connection = mysqli_connect($host, $user, $password, "bookingworld");
    if(!$connection) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
  } catch (Exception $e){
    echo $e ->getMessage();
  }
  return $connection;
}


function getMinRoomPriceByHotelId(int $hotelId): int {
  $dbconnect = dbconnection();
  $sql = 'SELECT MIN(Preis_pro_Nacht) FROM Zimmer WHERE Hotel_ID= '.$hotelId. '' ;
  //$result = mysqli_query($con, "SELECT * FROM `TableName` ORDER BY `PID` DESC LIMIT 1");
  $result = mysqli_query($dbconnect, $sql);

  while($row = mysqli_fetch_array($result)){
    $data = $row["MIN(Preis_pro_Nacht)"];}

  return $data;
}


function searchHotelName(string $hotelName){
  $dbconnect = dbconnection();
  $sql = 'SELECT * FROM Hotel WHERE HotelName LIKE' .$hotelName.'';

  $result = mysqli_query($dbconnect, $sql);


}

function reserveRoomById(int $hotelId){
  if(isset($_POST['hotelReservationButton'])){
    echo '<span> ".$hotelId." </span>';
  }

}

function sendReservation(){

}

