<?php
ob_start();
include 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <!-- CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/image/icon/icon.jpg">
    <!-- CSS -->
</head>

<body>
    <section class="w3l-specification-6">
        <!-- /specification-6-->
        <div class="specification-6-mian py-5">
            <div class="container py-lg-5">
                <div class="row story-6-grids text-left">
                    <div class="col-lg-5 story-gd">

                        <!--registration-form-->
                        <!--class = "wrap"-->
                        <div class="wrap bg-dark">
                            </br>
                            <h4 class="text-center text-white mb-4">Pet Shop Details</h4>

                            <div class="login-bghny p-md-5 p-4 mx-auto mw-100">

                                <form action="" method="post">

                                    <div class="form-group">
                                        <p class="login-texthny mb-2 text-white">Pet Shop Name</p>
                                        <input type="text" class="form-control" id="pname" placeholder="" name="pname"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <p class="login-texthny mb-2 text-white">Description</p>
                                        <input type="text" class="form-control" id="desc" placeholder="" name="desc"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <p class="login-texthny mb-2 text-white">Street</p>
                                        <input type="text" class="form-control" id="street" placeholder="" name="street"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <p class="login-texthny mb-2 text-white">Town</p>
                                        <input type="text" class="form-control" id="town" placeholder="" name="town"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <p class="login-texthny mb-2 text-white">District</p>
                                        <input type="text" class="form-control" id="district" placeholder=""
                                            name="district" required>
                                    </div>
                                    <!-- Drop down checkbox speciality, petshop can have more than one specialities -->
                                    <div class="form-group">
                                        <p class="login-texthny mb-2 text-white">Speciality</p>
                                        <!--<input type="text" class="form-control" id="speciality" placeholder=""
                                            name="speciality" required> -->
                                            <select class="form-control" name="petcat" id="petcat" required>
                                                    <option value="" selected="true" disabled="disabled">Pet Category</option>
                                                    <?php
                                                    $sql = "CALL sp_getPetCategories();";
                                                    $result = $conn->query($sql);
                        
                                                    if ($result -> num_rows > 0) {
                                                        //output data for each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            $id = $row['specialityID'];
                                                            $name = $row['name'];
                                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                                        }
                                                    }
                                                     $result->close();
                                                     $conn->next_result();
                                                    ?>
                                                    

                                                </select>
                                    </div>

                                    <input type="submit" class="btn btn-success submit-login btn mb-4" name="reg"
                                        value="Register">
                                </form>
                            </div>
                        </div>
                        <?php
        if (isset($_POST['reg'])) {
            include 'include/functions.php';
            //Fetch data from the fields
              
            $pname = $_POST['pname'];
            $desc = $_POST['desc'];
            $street = $_POST['street'];
            $town = $_POST['town'];
            $district = $_POST['district'];
            $long = "1";
            $lat = "1";
            $status = "1";
            $speciality = $_POST['speciality'];
            $reg = date("Y/m/d h:i:s");
            $userID = $_GET['id'];

            //$addpetsh = addPetshop("Dy", "breeding", "tt", "tt", "tt", 12 , 12 , 1 , 31 , 1, "1999-08-08");
            $result = addPetshop($pname, $desc, $street, $town, $district, $long, $lat, $status, $userID, $speciality, $reg);

            if ($result) {
                //**********get registration success message
                header('Location: login.php');

            } else {
                //**********get registration failed message
                //header('Location: ecommerce.php');
                header('Location: registerPetshop.php?id=' . $userID);
            }
        }
?>
                    </div>
                    <div class="col-lg-7 story-gd pl-lg-4">
                        <a class="navbar-brand" href="index.php">
                            <h3 class="hny-title"><span>E </span>Petshop</h3>
                        </a>
                        <p></p>

                        <div class="row story-info-content mt-md-5 mt-4">

                            <div class="col-md-6 story-info">
                                <h5> <a href="#">01. Setup E-Petshop</a></h5>
                                <p>Insert the required details about your petshop.</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="#">02. Add Products</a></h5>
                                <p>Add your products and categories them accordingly.</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="#">03. Make Sales</a></h5>
                                <p>Attract more customers to increase sales.</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="#">04. Connect With Customers</a></h5>
                                <p>Keep in touch with existing and prospect customers.</p>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- //specification-6-->
</body>

</html>
<?php include "bottomScripts.php"; ?>