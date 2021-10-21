<?php
//Create database connection
header('Access-Control-Allow-Origin: *');
include "dbConnection.php";

//check connection
if ($conn -> connect_error) {
    die("connection failed:" . $conn->connect_error);
}

//verify user credentials
function verifyUserCredentials($email, $passw)
{
    global $conn;
    
    //sql to verify user credentials
    //$sql = "SELECT email, password
    //FROM user
    //WHERE email = '$email'
    //AND password = '$password' ";

    //$sql = "CALL sp_checkUser('paul@gmail.com', '12345');";
    $sql = "CALL sp_verifyUserCredentials('$email');";

    $output = false;

    //query Sql
    $result = $conn->query($sql);
    //result
    
    if ($result -> num_rows > 0) {
        //output password form db
        while ($row = $result->fetch_assoc()) {
            if (password_verify($passw, $row['password'])) {
                $output = true;
            }
        }
    }

    return $output;
}

//add user
function addUser($fname, $lname, $gender, $dob, $street, $town, $district, $email, $mobile, $reg, $pass, $status, $role)
{
    include "dbConnection.php";

    $sql = "CALL sp_addUser('$fname', '$lname', '$gender', '$dob', '$street', '$town', '$district', '$email', '$mobile', '$reg', '$pass', '$status', '$role');";
    $result = mysqli_query($conn, $sql);

    return $result;
    //if($result){
        //**********get registration success message
        //header('Location: login.php');
        //echo "<script>window.location.href='login.php';</script>";
    //}else{
        //**********get registration failed message
        //header('Location: ecommerce.php');
        //echo "<script>window.location.href='register.php';</script>";
    //}
}

//get user role
function getUserRole($email)
{
    include "dbConnection.php";
    $output= 0;
    //$sql = "SELECT roleID
    //FROM user
    //WHERE email = '$email' ";
    $sql = "CALL sp_getUserRole('$email');";

    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        //output data for each row
        while ($row = $result->fetch_assoc()) {
            $output = $row['roleID'];
        }
    }
    
    return $output;
}

//get user ID
function getUserID($email)
{
    include "dbConnection.php";
    $output= 0;
    $sql = "CALL sp_getUserID('$email');";

    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        //output data for each row
        while ($row = $result->fetch_assoc()) {
            $output = $row['userID'];
        }
    }
    
    return $output;
}

//add petshop
//by default petshop status is 0
//admin must accept petshop, then vendor can post product etc.
function addPetshop($pname, $desc, $street, $town, $district, $long, $lat, $status, $userID, $specialityID, $dateReg)
{
    include "dbConnection.php";
    $sql = "CALL sp_addPetshop('$pname', '$desc', '$street', '$town', '$district', '$long', '$lat', '$status', '$userID', '$specialityID', '$dateReg');";
    $result = mysqli_query($conn, $sql);

    return $result;
}

//add product
function addProduct($prodname, $brand, $desc, $img, $qoh, $price, $percdis, $discdays, $prodcatid, $specialityid, $status, $dateposted, $lastmodif, $petshopid)
{
    include "dbConnection.php";
    $sql = "CALL sp_addProduct('$prodname', '$brand', '$desc', '$img','$prodcatid', '$specialityid', '$status', '$dateposted','$qoh', '$price', '$percdis', '$discdays','$lastmodif', '$petshopid');";
    $result = mysqli_query($conn, $sql);

    return $result;
}

//get petshopID
function getPetshopID($uid)
{
    include "dbConnection.php";
    $petshopid = "";
    //fetch petshop id from db
    $sql = "CALL sp_getPetshopID($uid);";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $petshopid = $row['petshopID'];
        }
    }
    return $petshopid;
}

//count my products
function getCountMyProducts($uid)
{
    include "dbConnection.php";
    $pid = getPetshopID($uid);
    $count = "";
    //fetch petshop id from db
    $sql = "CALL sp_countMyProducts($pid);";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $count = $row['COUNT(petshopID)'];
        }
    }
    return $count;
}

//send email
//[send email to admin when customer or vendor register]
//[send email to vendor when admin accept request]
//[send email to customer and vendor when successfully register to E-Petshop]
function sendEmail($email, $fname, $lname, $subject, $body)
{
    include 'sendMail.php';
    return $mailstatus;
}

//check email

//check number

//create user
