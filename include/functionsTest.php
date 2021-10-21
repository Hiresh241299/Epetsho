<?php
include "functions.php";

//verify user credentials
if (verifyUserCredentials("hireshmh24@gmail.com","12345")){
    echo "user exists";
}else{
    echo "user does not exists";
    echo password_hash(12345, PASSWORD_DEFAULT);
}

//add user
//$res = addUser("newtest", "test", "Male", "1999-08-08", "test", "test", "test", "test@gmail.com", "52345678", "1999-08-08", password_hash("test123",PASSWORD_DEFAULT), 1, 1);
//echo "Add User :" . $res;

//get user role
echo getUserRole("hireshmh24@gmail.com");

echo "\n";
//get user id
echo getUserID("hiresh@gmail.com");

//add petshop
//$addpetsh = addPetshop("Dy", "breeding", "tt", "tt", "tt", 12 , 12 , 1 , 31 , 1, "1999-08-08");
//echo $addpetsh;


//add product
//$result = addProduct("Pimafix", "API", "Medication", "x", 30, 2000, 0, 0, 2, 1, 1, "2021-09-14 09:22:26", "2021-09-14 09:22:26",1);
//if ($result == 1){
//    echo "Product added";
//}else{
 //   echo "Product failed to add";
//}


//get petshop id
echo "petshop id is" . getPetshopID(31);

//send email (email, fname, lname, subject, body)
$result = sendEmail("hireshmh24@gmail.com", "Hiresh", "Mohun", "E-petshop Registration", "Please view the terms and conditions before
accepting! 
");
if($result == 1){
    echo "\n mail sent!!";
}else if ($result == 0){
    echo "\n mail not sent!!!!";
}

//add admin
//$res = addUser("newtest", "test", "Male", "1999-08-08", "test", "test", "test", "test@gmail.com", "52345678", "1999-08-08", password_hash("test123",PASSWORD_DEFAULT), 1, 1);
$result = addUser("Hiresh", "Mohun", "Male", "1999-12-24", "", "", "", "admin@gmail.com", 59251209, "2021-09-14 09:22:26", password_hash("admin",PASSWORD_DEFAULT), 1,1);

if ($result == 1){
    echo "\n admin created successfully";
}else{
    echo "\n admin not created";
}
?>