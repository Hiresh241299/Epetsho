<?php
//Create database connection
include "include/dbConnection.php";

//Check connection
if($conn -> connect_error){
    die("connection failed:" . $conn->connect_error);
}

//sql
$sql = "SELECT prodCatID, name
FROM prodcategory";

//Query sql
$output = "Available Categories: \n";
$result = $conn->query($sql);

if($result -> num_rows > 0){
    //output data for each row
    while($row = $result->fetch_assoc()){
        //FOR LATER USE, when filling forms
        //escape the input so that database does not see data as code// Prevent SQL Injection
        //$first = mysqli_real_escape_string($conn, $POST['first']);
        $catID = $row['prodCatID'];
        $name = $row['name'];
        $output .= nl2br($catID. " " . $name . "\n");
    }
}else{
    $output = "No Category availale";
}

echo $output;


//Creating Session for testing
session_start();
$_SESSION["roleid"]=3;
?>