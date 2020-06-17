<?php
require_once("../backend/index.php");
 echo getAllHotels() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="hotel.css">
  <title>Hotels</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/img/icons8-lit-80.png" />


</head>
<body>

<div class="icon-bar">
  <a class="active" href="/src/pages/hotels/hotel.html"><img src="/img/hotel.png"/></a>
  <a href="/src/pages/bars/bar.html"><img src="/img/wine.png"/></a>
  <a href="/src/pages/booking/booking.html"><img src="/img/calendar.png"/></a>
  <a href="/src/pages/reservation/reservation.html"><img src="/img/calendarR.png"/></a>
  <a href="/src/pages/contact/contact.html"><img src="/img/contact.png"/></a>
</div>

<div class="hotelBlock">
  <div class="titleSearch">
    <h1>Hotels</h1>
    <div class="searchBlock">
      <input type="text" placeholder="Geben Sie ein Hotelname ein ..."/>
      <button type="button">Suchen</button>
    </div>
  </div>
  <div class="hotelList">
    <h1>Something</h1>
  </div>
</div>
</body>
</html>
