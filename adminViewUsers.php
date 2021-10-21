<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Dashboard</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
    <section>

        <!-- Side bar -->
        <?php
        include 'admininclude/sidebar.php';
        ?>
        <!-- //Side bar -->

        <!-- Navbar -->
        <?php
        include 'admininclude/navbar.php';
        ?>
        <!-- //Navbar -->


        <!-- main content start -->
        <div class="main-content">

            <!-- content -->
            <div class="container-fluid content-top-gap">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <div class="welcome-msg pt-3 pb-4">
                    <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
                    <p>Very detailed & featured admin.</p>
                </div>

                <!-- Datatable-->
                <div class="data-tables">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card card_border p-4">
                                <h3 class="card__title position-absolute">All Employees Info</h3>
                                <div class="table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length" id="example_length"><label></label></div>
                                        <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                            <div class="dataTables_length" id="example_length"><label></label></div>
                                            <!--<div id="example_filter" class="dataTables_filter"><label><input
                                                        type="search" class="" placeholder="Search"
                                                        aria-controls="example"></label></div> -->
                                            <table id="example" class="display dataTable no-footer" style="width:100%"
                                                role="grid" aria-describedby="example_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Emp. Name: activate to sort column descending"
                                                            style="width: 239px;" aria-sort="ascending">Emp. Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Designation: activate to sort column ascending"
                                                            style="width: 362px;">Designation</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Joining date: activate to sort column ascending"
                                                            style="width: 188px;">Joining date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Emp. Status: activate to sort column ascending"
                                                            style="width: 195px;">Emp. Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="assets/images/avatar5.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Alexander</td>
                                                        <td class="">Interior web design</td>
                                                        <td class="">08/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img src="assets/images/avatar3.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Anderson</td>
                                                        <td class="">Chief Financial Officer (CFO)</td>
                                                        <td class="">06/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="assets/images/avatar4.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Charlotte</td>
                                                        <td class="">Office Manager</td>
                                                        <td class="">08/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img src="assets/images/avatar2.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Davidson</td>
                                                        <td class="">Integration Specialist</td>
                                                        <td class="">09/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="assets/images/avatar1.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Elexa ker</td>
                                                        <td class="">HR operations</td>
                                                        <td class="">07/01/2020</td>
                                                        <td><span class="badge badge-success">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="assets/images/avatar5.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Alexander</td>
                                                        <td class="">Interior web design</td>
                                                        <td class="">08/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img src="assets/images/avatar3.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Anderson</td>
                                                        <td class="">Chief Financial Officer (CFO)</td>
                                                        <td class="">06/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="assets/images/avatar4.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Charlotte</td>
                                                        <td class="">Office Manager</td>
                                                        <td class="">08/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img src="assets/images/avatar2.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Davidson</td>
                                                        <td class="">Integration Specialist</td>
                                                        <td class="">09/01/2020</td>
                                                        <td><span class="badge badge-warning">In active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="assets/images/avatar1.jpg"
                                                                class="rounded-circle mr-2" width="40px" alt="">
                                                            Elexa ker</td>
                                                        <td class="">HR operations</td>
                                                        <td class="">07/01/2020</td>
                                                        <td><span class="badge badge-success">Active</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                            Showing 1 to 5 of 19 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a
                                                class="paginate_button previous disabled" aria-controls="example"
                                                data-dt-idx="0" tabindex="-1" id="example_previous">Previous</a><span><a
                                                    class="paginate_button current" aria-controls="example"
                                                    data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                                    aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a
                                                    class="paginate_button " aria-controls="example" data-dt-idx="3"
                                                    tabindex="0">3</a><a class="paginate_button "
                                                    aria-controls="example" data-dt-idx="4" tabindex="0">4</a></span><a
                                                class="paginate_button next" aria-controls="example" data-dt-idx="5"
                                                tabindex="0" id="example_next">Next</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Datatable-->
            </div>
            <!-- //content -->



        </div>
        <!-- main content end-->
    </section>
    <!--footer section start-->
    <?php
    include 'admininclude/footer.php';
    ?>
    <!--footer section end-->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- /move top -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>

    <!-- chart js -->
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/utils.js"></script>
    <!-- //chart js -->

    <!-- Different scripts of charts.  Ex.Barchart, Linechart -->
    <script src="assets/js/bar.js"></script>
    <script src="assets/js/linechart.js"></script>
    <!-- //Different scripts of charts.  Ex.Barchart, Linechart -->
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <script src="assets/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- close script -->
    <script>
    var closebtns = document.getElementsByClassName("close-grid");
    var i;

    for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
        });
    }
    </script>
    <!-- //close script -->

    <!-- disable body scroll when navbar is in active -->
    <script>
    $(function() {
        $('.sidebar-menu-collapsed').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
    </script>
    <!-- disable body scroll when navbar is in active -->

    <!-- loading-gif Js -->
    <script src="assets/js/modernizr.js"></script>
    <script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
    <!--// loading-gif Js -->

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>