<?php
include 'include/common.php';
include 'include/functions.php';
//solves header issue
ob_start();
session_start();
//when session roleid does not exists or session roleid is not 2 (Not vendor) redirect to login page
if ((!isset($_SESSION["roleid"])) || ($_SESSION["roleid"] != 2) || (!isset($_SESSION["userid"]))) {
    header('Location: login.php');
} else {
    $userid = $_SESSION["userid"];
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title?></title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/image/icon/icon.jpg">
    <!-- Template CSS -->

</head>

<body>

    <section class="w3l-banner-slider-main inner-pagehny">
        <div class="breadcrumb-infhny">

            <div class="top-header-content">
                <header class="tophny-header">
                    <!-- Include Navbar -->
                    <?php
            include 'include/navbarVendor.php';
            ?>
                </header>
                <div class="breadcrumb-contentnhy">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <?php
                            //get petshop name from db using session userID

                            $sql = "CALL sp_getPetshopDetails($userid);";
                            $result = $conn->query($sql);

                            if ($result -> num_rows > 0) {
                                //output data for each row
                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['name'];
                                    echo '<h2 class="hny-title text-center">'.$name.'</h2>';
                                }
                            }
                             $result->close();
                             $conn->next_result();
                            ?>
                            <ol class="breadcrumb mb-0">
                                <li><a href="index.html">Home</a>
                                    <span class="fa fa-angle-double-right"></span>
                                </li>
                                <li class="active">Add Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //w3l-banner-slider-main -->

    <section class="blog-post-main">
        <!--/mag-content-->
        <div class="mag-content-inf py-5">
            <div class="container py-lg-5">
                <div style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->


                </div>
                <div class="blog-inner-grids bg-light">
                    <div class="mag-post-left-hny">
                        <div class="mag-hny-content">
                            <!--/set-1-->
                            <div class="blog-pt-grid-content">
                                <!--/leave-->
                                <div class="leave-comment-form mt-lg-5 mt-4" id="comment">
                                    <br>
                                    <h3 class="hny-title mb-0">Add <span>Product</span></h3>
                                    <p class="mb-4">Required fields are marked
                                        *
                                    </p>

                                    <form action="" method="post" enctype="multipart/form-data">
                                        <p class="mb-4 text-white text-center bg-dark">
                                            Product Details
                                        </p>

                                        <div class="input-grids row">

                                            <div class="form-group col-lg-6">
                                                <label>Name *</label>
                                                <input type="text" name="pname" class="form-control"
                                                    placeholder="Product Name" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Brand *</label>
                                                <input type="text" name="brand" class="form-control" placeholder="Brand"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" id="image" class="form-control"
                                                 required="">
                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description"
                                                required="" spellcheck="false"></textarea>
                                        </div>

                                        <div class="input-grids row">

                                            <div class="form-group col-lg-6">
                                                <label>Pet Category *</label>
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

                                            <div class="form-group col-lg-6">
                                                <label>Product Category *</label>
                                                <select class="form-control" name="prodcat" id="prodcat" required>
                                                    <option value="" selected="true" disabled="disabled">Product Category</option>
                                                    <?php
                                                    $sql = "CALL sp_getProdCategories();";
                                                    $result = $conn->query($sql);

                                                    if($result -> num_rows >0){
                                                        //output data for each row
                                                        while($row = $result->fetch_assoc()){
                                                            $id = $row['prodCatID'];
                                                            $name = $row['name'];
                                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                                        }
                                                    }
                                                    $result->close();
                                                    $conn->next_result();
                                                    ?>
                                                    
                                                </select>
                                            </div>

                                        </div>

                                        <p class="mb-4 text-white text-center bg-dark">
                                            Pricing Details
                                        </p>

                                        <div class="input-grids row">

                                            <div class="form-group col-lg-6">
                                                <label>Price * </label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend border border-dark rounded">
                                                        <div class="input-group-text">Rs</div>
                                                    </div>
                                                    <input type="number" name="price" class="form-control"
                                                        placeholder="Price" required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Quantity Available * </label>
                                                <input type="number" name="qoh" class="form-control"
                                                    placeholder="Quantity in stock" required="">
                                            </div>
                                        </div>

                                        <div class="input-grids row">
                                            <div class="form-group col-lg-6">
                                                <label>Discount</label>
                                                <select class="form-control" name="disc" id="disc"
                                                    onchange="switchDisc();" required>
                                                    <option value="0" selected="true">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="input-grids row" id="discountDetails">

                                            <div class="form-group col-lg-6">
                                                <label>% Discount * </label>
                                                <input type="number" name="per" class="form-control"
                                                    placeholder="% Discount" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Discount Days * </label>
                                                <input type="number" name="day" class="form-control"
                                                    placeholder="Discount Days" >
                                            </div>
                                        </div>

                                        <div class="submit text-right mt-5">
                                            <Button class="btn btn-primary" name="addProduct" value="post product">
                                                Submit</button>
                                        </div>
                                        <br>
                                    </form>

                                    <?php
                                    //submit form, fetch data from form, call function addProduct
                                    //go to another page to view posted product

                                    if (isset($_POST['addProduct'])) {
                                        
                                        //Fetch data from the fields
                                          
                                        $prodname = $_POST['pname'];
                                        $brand = $_POST['brand'];
                                        $desc = $_POST['description'];
                                        $qoh = $_POST['qoh'];
                                        $price = $_POST['price'];
                                        //discount percentage and days
                                        $val = $_POST['price'];
                                        if($val == "0"){
                                            $percdis = 0;
                                            $discdays = 0;
                                        }else{
                                            $percdis = $_POST['per'];
                                            $discdays = $_POST['day'];
                                        }

                                        $prodcatid = $_POST['prodcat'];
                                        $specialityid = $_POST['petcat'];
                                        $status = 1;
                                        $dateposted = date("Y/m/d h:i:s");
                                        $lastmodif = date("Y/m/d h:i:s");
                                        $petshopid= getPetshopID($userid);

                                        //add img field to form
                                        $statusMsg = '';
                                        $targetDir = "product/";
                                        $fileName = basename($_FILES["image"]["name"]);
                                        $targetFilePath = $targetDir . $fileName;
                                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                                        //allow certain file type
                                        $allowTypes = array('jpg','jpeg','png','gif','tiff','webp');

                                        if (in_array($fileType, $allowTypes)) {
                                            // Upload file to server
                                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                                                $result = addProduct($prodname, $brand, $desc, $fileName, $qoh, $price, $percdis, $discdays, $prodcatid, $specialityid, $status, $dateposted, $lastmodif, $petshopid);
                                                if ($result) {
                                                    //**********get add product success message, go to page to view posted product
                                                    header('Location: viewMyProducts.php');
                                                } else {
                                                    //**********get add product failed message
                                                    header('Location: fail.php');
                                                    //echo "<script>window.location.href='register.php';</script>";
                                                }
                                            } else {
                                                $statusMsg = "Sorry, there was an error uploading your file.";
                                                header("Location: fail.php");
                                            }
                                        }
                                    }
                                    
                                    ?>
                                </div>
                                <!--//leave-->
                                <!--//mag-hny-content-4-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--//mag-content-->
                <div style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->

                </div>

            </div>
        </div>
    </section>

    <section class="w3l-footer-22">
        <!-- Include Footer -->
        <?php
     include 'include/footer.php';
     ?>

    </section>


</body>

</html>
<script>
var disc = document.getElementById('disc');
var discDetails = document.getElementById('discountDetails');

//by default, invisible
discDetails.style.display = "none";

//on discount yes, make 2 text box visible
function switchDisc() {
    var discValue = document.getElementById('disc').value;
    var per = document.getElementById('per');
    var day = document.getElementById('day');

    if (discValue == 0) {
        discDetails.style.display = "none";
        per.required = false;
        day.required = false;

    } else if (discValue == 1) {
        discDetails.style.display = "block";
        per.required = true;
        day.required = true;
    }
}
</script>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!--Price Range-->
<script src="assets/js/jquery-ui.js"></script>
<script>
//<![CDATA[ 
$(window).load(function() {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 9000,
        values: [50, 6000],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values",
        1));

}); //]]>
</script>


<!--/login-->
<script>
$(document).ready(function() {
    $(".button-log a").click(function() {
        $(".overlay-login").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay-close1').on('click', function() {
    $(".overlay-login").fadeToggle(200);
    $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});
</script>
<!--//login-->
<script>
// optional
$('#customerhnyCarousel').carousel({
    interval: 5000
});
</script>
<!-- cart-js -->
<script src="assets/js/minicart.js"></script>
<script>
transmitv.render();

transmitv.cart.on('transmitv_checkout', function(evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) {}
    }
});
</script>

<!-- //cart-js -->
<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
$(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

});
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
$(function() {
    $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
    })
});
</script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>