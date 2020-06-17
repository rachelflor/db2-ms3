

<?php

function dbconnection(){
    $hostname='127.0.0.1';
    $username='root';
    $password='';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=bookingworld",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        echo 'Connected to Database<br/>';
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    return $dbh;
}

function getAllHotels () {
    $dbh = dbconnection();
    $sql = "SELECT * FROM Hotel";
    $hotels = $dbh->query($sql);

    $result = $hotels->fetchAll(PDO::FETCH_OBJ);
   return json_encode($result);
   // var_dump($result);
    $dbh = null;
}

?>