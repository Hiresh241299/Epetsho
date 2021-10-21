<?php
include 'include/common.php';
//include 'include/dbConnection.php';
include 'include/functions.php';
session_start();
//when session roleid does not exists or session roleid is not 2 (Not vendor) redirect to login page
if ((!isset($_SESSION["roleid"])) || ($_SESSION["roleid"] != 2)) {
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
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <!-- CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/image/icon/icon.jpg">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
    <!-- CSS -->

    <style>
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        color: white;
    }
    .tinted {
        filter: brightness(50%);
        }
    </style>
</head>

<body>
    <!--Navbar-->
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
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Navbar -->

    <!-- Main content : Vendor Dashboard, gets notif, product sold, number of products, profits, customer messages -->

    <!-- //Main Content -->
    <section class="w3l-post-grids-6">
        <!--/mag-content-->
        <div class="post-6-mian py-5">
            <div class="container py-lg-5">
                <div class="blog-inner-grids">

                    <!-- statistics collapsible -->
                    <div class="rounded bg-light">
                        <h2>
                            Statistics
                            <button class="btn btn-primary rounded float-right" id="statBtn" data-toggle="collapse"
                                href="#collapseExample" aria-expanded="true" onclick="changeSign('stat');"
                                aria-controls="collapseExample">
                                <i class="fa fa-minus" id="stat"></i>
                            </button>
                        </h2>

                        <div class="collapse show " id="collapseExample">
                            <div class="card card-body">
                                <!--place content here-->
                                <!--stats card row-->
                                <div class="post-hny-grids row mt-5">
                                    <?php
                        //create an array (PRODUCTs, CUSTOMERs, SPECIALITIES, SALES)
                        //loop and echo the code below

                        $countProduct = getCountMyProducts($userid);
                        $countCustomer = 0;
                        $countSpecialities = 0;
                        $countSales = 0;

                        $staName = array("PRODUCTS", "CUSTOMERS", "SPECIALITIES", "SALES");
                        $staCount = array($countProduct, $countCustomer, $countSpecialities, $countSales);
                        $imgName = array("s1", "s2", "s3", "s4");

                        for($i = 0; $i < sizeof($staCount); $i++){
                        echo '<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                        <a href="#">
                            <figure>
                                <img class="img-fluid rounded tinted " src="assets/images/'.$imgName[$i].'.jpg" alt="blog-image">
                                <div class="centered">
                                    <h3 class="text-center"><a class="text-white" href="#">'. $staCount[$i].' <br>
                                    '. $staName[$i].'</a></h3>
                                </div>
                            </figure>
                        </a>
                    </div>';
                        }
                        ?>
                                </div>
                                <!--stats card-->
                                <!--//place content here-->
                            </div>
                        </div>
                    </div>

                    <!-- //statistics collapsible -->

                    <br><br>

                    <!-- Customer Order Collapsible-->
                    <div class="rounded bg-light">
                        <h2>
                            Customer Orders
                            <button class="btn btn-primary rounded float-right" id="orderplus" data-toggle="collapse"
                                href="#collapseExample2" aria-expanded="true" onclick="changeSign('order');"
                                aria-controls="collapseExample2">
                                <i class="fa fa-minus" id="order"></i>
                            </button>
                        </h2>

                        <div class="collapse show " id="collapseExample2">
                            <div class="card card-body">
                                <!--place content here-->
                                <!-- Datatable -->
                                <table id="table_id" class="display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>price</th>
                                            <th>Total</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- repeat within body-->
                                        <?php
                                        /*
                                
                                //fetch product from database, using session userid
                                $psid = getPetshopID($userid);
                                $sql = "CALL sp_getMyProductDetails($psid);";
                            $result = $conn->query($sql);

                            if ($result -> num_rows > 0) {
                                //output data for each row
                                while ($row = $result->fetch_assoc()) {
                                    $img = $row['imgPath'];
                                    $name = $row['pname'];
                                    $brand = $row['brand'];
                                    $desc = $row['description'];
                                    $pcname = $row['pcname'];
                                    $sname = $row['sname'];
                                    $qoh = $row['qoh'];
                                    $price = $row['price'];
                                    echo '<tr>
                                <td width="16%"><img src="assets/images/productKoiking.jpg" alt="Img" width="100%"
                                        height="100%"></td>
                                <td><b><span style="text-transform:uppercase">'.$brand.'</span></b> - '.$name.'</td>
                                <td>'.$desc.'</td>
                                <td>'.$sname.' '.$pcname.' food</td>
                                <td>'.$qoh.'</td>
                                <td>'.$price.'</td>
                                <td width="15%">
                                    <button class="btn btn-primary" title="View"><i class="fa fa-eye iblack"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-warning" title="Edit"><i class="fa fa-edit iblack"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" title="Delete"><i class="fa fa-trash iblack"
                                            aria-hidden="true"></i></button>

                                </td>
                                </tr>';
                                }
                            }
                             $result->close();
                             $conn->next_result();

                             */
                                ?>
                                        <!-- //repeat body-->
                                    </tbody>

                                </table>
                                <!-- //Datatable -->
                                <!--//place content here-->
                            </div>
                        </div>
                    </div>
                    <!-- Customer Order collapsible-->

                    <br><br>

                    <!-- collapsible-->
                    <div class="sing-post-thumb mb-lg-5 mb-4 row">
                        <div class="col-6">
                            <!-- Low stock collapsible -->
                            <div class="rounded bg-light">
                                <h2>
                                    Low Stock product
                                    <button class="btn btn-primary rounded float-right" id="lowStockBtn"
                                        data-toggle="collapse" href="#collapseLowStock" aria-expanded="true"
                                        onclick="changeSign('lowStock');" aria-controls="collapseLowStock">
                                        <i class="fa fa-minus" id="lowStock"></i>
                                    </button>
                                </h2>

                                <div class="collapse show " id="collapseLowStock">
                                    <div class="card card-body">
                                        <!--place content here-->
                                        
                                        <!--//place content here-->
                                    </div>
                                </div>
                            </div>
                            <!-- //Low stock collapsible -->
                        </div>
                        <div class="col-6">
                            <!-- Messages collapsible -->
                            <div class="rounded bg-light">
                                <h2>
                                    Messages
                                    <button class="btn btn-primary rounded float-right" id="msgBtn"
                                        data-toggle="collapse" href="#collapsemsg" aria-expanded="true"
                                        onclick="changeSign('msg');" aria-controls="collapsemsg">
                                        <i class="fa fa-minus" id="msg"></i>
                                    </button>
                                </h2>

                                <div class="collapse show " id="collapsemsg">
                                    <div class="card card-body">
                                        <!--place content here-->
                                        
                                        <!--//place content here-->
                                    </div>
                                </div>
                            </div>
                            <!-- // Messages collapsible -->
                        </div>
                    </div>
                    <!-- collapsible-->
                </div>
                <!--//mag-content-->
                <div style="margin: 8px auto; display: block; text-align:center;">
                    <!---728x90--->
                </div>
            </div>
        </div>
    </section>
    <!-- //Main-->



    <!-- //Main content -->




    <section class="w3l-footer-22">
        <!-- Include Footer -->
        <?php
     include 'include/footer.php';
     ?>

    </section>


</body>

</html>

<script>

function changeSign(docId) {
    var msgBtn = document.getElementById(docId);
    if (msgBtn.className == "fa fa-minus") {
        msgBtn.className = "fa fa-plus";
    } else {
        msgBtn.className = "fa fa-minus";
    }
}


</script>

<?php include "bottomScripts.php"; ?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
<script>
//initialising datatable
$(document).ready(function() {
    $('#table_id').DataTable();
});
</script>