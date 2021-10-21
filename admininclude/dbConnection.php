<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petshopdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //set Appropriate timezone
    date_default_timezone_set("Indian/Mauritius");
?>