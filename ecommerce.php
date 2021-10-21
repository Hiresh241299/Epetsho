<?php include 'include/common.php';?>
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
    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main">
        <div class="top-header-content">
            <header class="tophny-header">
                <!-- Include Navbar -->
                <?php
			include 'include/navbar.php';
			?>
            </header>
            <div class="bannerhny-content-main">

                <!--/banner-slider-->
                <div class="content-baner-inf">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Women's
                                            Fashion
                                            <br>50% Off
                                        </h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item2">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Men's
                                            Fashion
                                            <br>60% Off
                                        </h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item3">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Women's
                                            Fashion
                                            <br>50% Off
                                        </h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item4">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Men's
                                            Fashion
                                            <br>60% Off
                                        </h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--//banner-slider-->
                <!--//banner-slider -->
                <!--<div class="right-banner">
                    <div class="right-1">
                        <h4>
                            Men's
                            Fashion
                            <br>50% Off
                        </h4>
                    </div>
                </div> -->

            </div>

    </section>
    <!-- //w3l-banner-slider-main -->

    <section class="w3l-ecommerce-main-inn">
        <!--/mag-content-->
        <div class="ecomrhny-content-inf py-5">
            <div class="container py-lg-5">
                <div style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->


                </div>
                <!--/row1-->
                <div class="ecommerce-grids row">
                    <div class="ecommerce-left-hny col-lg-4">
                        <!--/ecommerce-left-hny-->
                        <aside>
                            <div class="sider-bar">
                                <div class="single-gd mb-5">

                                    <h4>Search <span>here</span></h4>
                                    <form action="#" method="post" class="search-trans-form">
                                        <input class="form-control" type="search" name="search"
                                            placeholder="Search here..." required="">
                                        <button class="btn read-2">
                                            <span class="fa fa-search"></span>
                                        </button>

                                    </form>
                                </div>
                                <!-- /Gallery-imgs -->

                                <div class="single-gd mb-5">
                                    <h4>Product <span>Categories</span></h4>
                                    <ul class="list-group single">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Accessories
                                            <span class="badge badge-primary badge-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Suits
                                            <span class="badge badge-primary badge-pill">18</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Footwear
                                            <span class="badge badge-primary badge-pill">12</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Blazers
                                            <span class="badge badge-primary badge-pill">10</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-gd mb-5">
                                    <h4>Filter by <span>Price</span></h4>

                                    <ul class="dropdown-vjm-transitu6">
                                        <li>

                                            <div id="slider-range"
                                                class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                
                                            </div>
                                            <input type="text" id="amount"
                                                style="border: 0; color: #ffffff; font-weight: normal;">
                                        </li>
                                    </ul>


                                    <!--//Gallery-imgs-->
                                </div>

                                <div class="single-gd mb-5">
                                    <h4>Discount </h4>
                                    <div classes="box-hny">
                                        <label class="containerhny-checkbox">15% or More
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">20% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">35% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">55% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="containerhny-checkbox">65% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">75% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>

                                </div>
                                <div class="single-gd customer-rev left-side mb-5">
                                    <h4>Customer <span>Color</span></h4>

                                    <ul class="product-color">
                                        <li>
                                            <input type="checkbox" name="color-check" id="redcheck" checked="checked">
                                            <label for="redcheck" style="background-color:red;"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="color-check" id="#A2C2C9check"
                                                checked="checked">
                                            <label for="#A2C2C9check" style="background-color:#A2C2C9;"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="color-check" id="#EFDBD4check"
                                                checked="checked">
                                            <label for="#EFDBD4check" style="background-color:#EFDBD4;"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="color-check" id="#2196F3check"
                                                checked="checked">
                                            <label for="#2196F3check" style="background-color:#2196F3;"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="color-check" id="#4CAF50check"
                                                checked="checked">
                                            <label for="#4CAF50check" style="background-color:#4CAF50;"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="color-check" id="#00BCD4check"
                                                checked="checked">
                                            <label for="#00BCD4check" style="background-color:#00BCD4;"></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-gd left-side mb-5">
                                    <h4>Customer Ratings</h4>
                                    <ul class="ratingshyny">
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span>5.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star-o" aria-hidden="true"></span>
                                                <span>4.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                                <span class="fa fa-star-o" aria-hidden="true"></span>
                                                <span>3.5</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star-o" aria-hidden="true"></span>
                                                <span class="fa fa-star-o" aria-hidden="true"></span>
                                                <span>3.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                                <span class="fa fa-star-o" aria-hidden="true"></span>
                                                <span class="fa fa-star-o" aria-hidden="true"></span>
                                                <span>2.5</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="single-gd mb-5 border-0">
                                    <h4>Recent <span>Products</span></h4>
                                    <div class="row special-sec1 mt-4">
                                        <div class="col-4 img-deals">
                                            <a href="ecommerce-single.html"><img src="assets/images/shop-88.jpg"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="col-8 img-deal1">
                                            <h5 class="post-title">
                                                <a href="ecommerce-single.html">Blue Sweater</a>
                                            </h5>

                                            <a href="ecommerce-single.html" class="price-right">$499.00</a>
                                        </div>

                                    </div>
                                    <div class="row special-sec1 mt-4">
                                        <div class="col-4 img-deals">
                                            <a href="ecommerce-single.html"><img src="assets/images/shop-77.jpg"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="col-8 img-deal1">
                                            <h5 class="post-title">
                                                <a href="ecommerce-single.html">White T-Shirt</a>
                                            </h5>
                                            <a href="ecommerce-single.html" class="price-right">$575.00</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </aside>
                        <!--//ecommerce-left-hny-->
                    </div>
                    <div class="ecommerce-right-hny col-lg-8">
                        <div class="row ecomhny-topbar">
                            <div class="col-6 ecomhny-result">
                                <h4 class="ecomhny-result-count"> Showing all 9 Results</h4>
                            </div>
                            <div class="col-6 ecomhny-topbar-ordering">

                                <div class="ecom-ordering-select d-flex">
                                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    <select>
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by Popularity</option>
                                        <option value="rating">Sort by Average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by Price: low to high</option>
                                        <option value="price-desc">Sort by Price: high to low</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <!-- /row-->
                        <div class="ecom-products-grids row">
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2 transmitv">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-1.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-11.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Women Maroon Top">
                                                <input type="hidden" name="amount" value="899.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a>
                                        </h3>
                                        <span class="price"><del>$975.00</del>$899.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-2.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-22.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                                <input type="hidden" name="amount" value="599.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Men's Pink Shirt </a>
                                        </h3>
                                        <span class="price"><del>$775.00</del>$599.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-3.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-33.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Dark Blue Top">
                                                <input type="hidden" name="amount" value="799.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Dark Blue Top </a></h3>
                                        <span class="price"><del>$875.00</del>$799.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-4.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-44.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Women Tunic">
                                                <input type="hidden" name="amount" value="399.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Women Tunic </a></h3>
                                        <span class="price"><del>$475.00</del>$399.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-5.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-55.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                                <input type="hidden" name="amount" value="299.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Yellow T-Shirt</a></h3>
                                        <span class="price"><del>$575.00</del>$299.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-6.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-66.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Straight Kurta">
                                                <input type="hidden" name="amount" value="699.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Straight Kurta </a></h3>
                                        <span class="price"><del>$775.00</del>$699.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-7.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-77.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                                <input type="hidden" name="amount" value="599.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">White T-Shirt </a></h3>
                                        <span class="price"><del>$675.00</del>$599.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-8.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-88.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                                <input type="hidden" name="amount" value="499.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Blue Sweater</a></h3>
                                        <span class="price"><del>$575.00</del>$499.99</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mb-4">
                                <div class="product-grid2 transmitv">
                                    <div class="product-image2">
                                        <a href="ecommerce-single.html">
                                            <img class="pic-1 img-fluid" src="assets/images/shop-1.jpg">
                                            <img class="pic-2 img-fluid" src="assets/images/shop-11.jpg">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                            </li>

                                            <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                                                        class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Women Maroon Top">
                                                <input type="hidden" name="amount" value="899.99">
                                                <button type="submit"
                                                    class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a>
                                        </h3>
                                        <span class="price"><del>$975.00</del>$899.99</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- //row-->
                        <!--/row2-->
                        <div class="ecom-slider-hny">
                            <div class="ecommerce-banv covers-9">
                                <div class="csslider infinity" id="slider1">
                                    <input type="radio" name="slides" checked="checked" id="slides_1">
                                    <input type="radio" name="slides" id="slides_2">
                                    <input type="radio" name="slides" id="slides_3">

                                    <ul class="banner_slide_bg">
                                        <li>
                                            <div class="wrapper">
                                                <div class="cover-top-center-9">
                                                    <div class="w3ls_cover_txt-9">
                                                        <h6 class="tag-cover-9">30% Off</h6>
                                                        <h3 class="title-cover-9">Men's Suit</h3>

                                                        <div class="read-more-button">
                                                            <a href="ecommerce-single.html" class="read-btn btn">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wrapper">
                                                <div class="cover-top-center-9">
                                                    <div class="w3ls_cover_txt-9">
                                                        <h6 class="tag-cover-9">50% Off</h6>
                                                        <h3 class="title-cover-9">Men's Footerwear</h3>

                                                        <div class="read-more-button">
                                                            <a href="ecommerce-single.html" class="read-btn btn">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wrapper">
                                                <div class="cover-top-center-9">
                                                    <div class="w3ls_cover_txt-9">
                                                        <h6 class="tag-cover-9">50% Off</h6>
                                                        <h3 class="title-cover-9">Women's Footwear</h3>

                                                        <div class="read-more-button">
                                                            <a href="ecommerce-single.html" class="read-btn btn">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="arrows">
                                        <label for="slides_1"></label>
                                        <label for="slides_2"></label>
                                        <label for="slides_3"></label>

                                    </div>
                                    <div class="navigation">
                                        <div>
                                            <label for="slides_1"></label>
                                            <label for="slides_2"></label>
                                            <label for="slides_3"></label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--//row22-->
                    </div>
                </div>
                <!--//row1-->

                <!--/pagination-->
                <div class="pagination">
                    <ul>
                        <li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
                        <li><a href="#page-number" class="active">1</a></li>
                        <li><a href="#page-number">2</a></li>
                        <li><a href="#page-number">3</a></li>

                        <li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
                    </ul>
                </div>
                <!--//pagination-->

            </div>
        </div>
        <!--//mag-content-->
    </section>




    <section class="w3l-footer-22">
        <!-- Include Footer -->
        <?php
	 include 'include/footer.php';
	 ?>

    </section>


</body>

</html>

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