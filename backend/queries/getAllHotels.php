<?php
$connection = mysqli_connect('localhost', root, "", "Hotel");
$message = "";
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM Hotel";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) == 0){
        $message = "Es wurde keine Hotel gefunden";
    } else {

    }
}
