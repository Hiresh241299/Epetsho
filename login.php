<?php
include 'include/common.php';
//include 'include/dbConnection.php';
include 'include/functions.php';
//solves header issue
ob_start();
session_start();
//Check if session roleid exists
if (isset($_SESSION["roleid"])) {
    $session_roleID = $_SESSION["roleid"];
} else {
    $session_roleID = 0;
}
//testt
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title?></title>
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
                        <!-- <img src="assets/images/left2.jpg" class="img-fluid" alt="/"> -->
                        <div class="wrap bg-dark">
                            </br>
                            <h4 class="text-center text-white mb-4">Login</h4>
                            <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                                <!--/login-form-->
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <p class="login-texthny mb-2">Email address</p>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                            aria-describedby="emailHelp" placeholder="" required="">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <p class="login-texthny mb-2">Password</p>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            name="password" placeholder="" required="">
                                    </div>
                                    <div class="form-group">
                                        <div class="userhny-check">
                                            <label class="check-remember container">
                                                <input type="checkbox" class="form-check"> <span
                                                    class="checkmark"></span>
                                                <p class="privacy-policy">Remember me
                                            </label>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success submit-login btn mb-4" name="login"
                                        value="Login">

                                </form>
                                <!--//login-form-->
                                <?php
        
        if (isset($_POST['login'])) {
            //Fetch data from Login form
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            //verify user credentials
            if ((verifyUserCredentials($userEmail, $userPassword)) == true) {
                //create session for this user
                $_SESSION['userid'] = getUserID($userEmail);
                $_SESSION['roleid'] = getUserRole($userEmail);

                //check role id to redirect to appropriate page
                $roleid = getUserRole($userEmail);
                if ($roleid == 1) {
                    header('location: adminDashboard.php');
                }
                else if ($roleid == 2) {
                    header('Location: petshopHome.php');
                }else if ($roleid == 3) {
                    header('Location: index.php');
                }
            }
            //credentials does not match ********** DISPLAY ERROR MESSAGE HERE
            else {
                $_SESSION['roleid'] = 0;
            }
        }
        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 story-gd pl-lg-4">
                        <a class="navbar-brand" href="index.php">
                            <h3 class="hny-title"><span>E </span>Petshop</h3>
                        </a>
                        <!-- Add text here -->
                        <p></p>

                        <div class="row story-info-content mt-md-5 mt-4">

                            <div class="col-md-6 story-info">
                                <h5> <a href="#">01. Visit E-Petshop</a></h5>
                                <p>A wide range of products for all pets availabe.</p>


                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="#">02. Add To Cart</a></h5>
                                <p>Select the products you need for your pets and add them to your shopping cart.</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="#">03. Checkout</a></h5>
                                <p>Checkout when you finish your shopping.</p>
                            </div>
                            <div class="col-md-6 story-info">
                                <h5> <a href="#">04. Fast Delivery</a></h5>
                                <p>You products are deliered at your door step within 2 business days.</p>
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