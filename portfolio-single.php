<?php require_once 'dashboard/includes/db.php' ?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 12:15:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/frontend/css/animate.min.css">
        <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/frontend/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
        <link rel="stylesheet" href="assets/frontend/css/slick.css">
        <link rel="stylesheet" href="assets/frontend/css/aos.css">
        <link rel="stylesheet" href="assets/frontend/css/default.css">
        <link rel="stylesheet" href="assets/frontend/css/style.css">
        <link rel="stylesheet" href="assets/frontend/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="assets/frontend/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="assets/frontend/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#service">service</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="index.php#portfolio">portfolio</a></li>
                                            <!-- <li class="nav-item "><a class="nav-link" href="blog.html">Blog</a></li> -->
                                            <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-search">
                                        <!-- <a href="#"><i class="fas fa-search"></i></a> -->
                                    </div>
                                    <div class="header-btn">
                                        <a href="dashboard/uploads/cv/Resume of Tanvir Ahmmed.pdf" class="btn">HIRE <span>NOW</span></a>
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.php">
                        <img src="assets/frontend/img/logo/logo.png" alt="" />
                    </a>
                </div>
                
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                <?php 
                 $select_query = "SELECT * FROM `settings` WHERE setting_name='owner_address'";
                 $owner_address = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                ?>
                    <h4>Office Address</h4>
                    <p><?=$owner_address['setting_value']?></p>
                </div>
                <div class="contact-list mb-30">
                <?php 
                 $select_query = "SELECT * FROM `settings` WHERE setting_name='owner_phone'";
                 $owner_phone = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                ?>
                    <h4>Phone Number</h4>
                    <p><?=$owner_phone['setting_value']?></p>
                    
                </div>
                <div class="contact-list mb-30">
                <?php 
                 $select_query = "SELECT * FROM `settings` WHERE setting_name='owner_email'";
                 $owner_email = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                ?>
                    <h4>Email Address</h4>
                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="066f68606946637e676b766a632865696b"><?=$owner_email['setting_value']?></a></p>
                </div>
                </div>
                <div class="side-instagram">
                    <a href="#"><img src="assets/frontend/img/project/p1.jpg" alt="img"></a>
                    <a href="#"><img src="assets/frontend/img/project/p2.jpg" alt="img"></a>
                    <a href="#"><img src="assets/frontend/img/project/p3.jpg" alt="img"></a>
                    <a href="#"><img src="assets/frontend/img/project/p4.jpg" alt="img"></a>
                    <a href="#"><img src="assets/frontend/img/project/p5.jpg" alt="img"></a>
                    <a href="#"><img src="assets/frontend/img/project/p1.jpg" alt="img"></a>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">PORTFOLIO DETAILS</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <?php
                    $id = $_GET['id'];
                    $select_query = "SELECT * FROM `portfolios` WHERE id=$id";
                    $portfolios = mysqli_query($db_connect, $select_query);
                    $portfolio = mysqli_fetch_assoc($portfolios);
                    ?>
            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="dashboard/uploads/portfolio_image/<?=$portfolio['portfolio_image']?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <span><?=$portfolio['portfolio_category']?></span>
                                    <h2><?=$portfolio['portfolio_name']?></h2>
                                    <p><?=$portfolio['portfolio_details']?></p>
                                    <div class="blog-list-meta">
                                        <?php
                                       
                                        $url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                        ?>
                                        <ul>
                                            <li class="blog-post-date">
                                                <div class="blog-details-tag">
                                                    <i class="fas fa-tags"></i>
                                                    <a href="#">Warehouse</a>
                                                    <a href="#">Ocean</a>
                                                    <a href="#">Freight</a>
                                                    <a href="#">Railway</a>
                                                </div>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="http://www.facebook.com/sharer/sharer.php?u=<?=$url?>&t=<?=$portfolio['portfolio_name']?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="assets/frontend/img/blog/post_avatar_img.png" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Thomas Herlihy</h5>
                                                <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                                    condimem
                                                    egestliberos dolor auctor
                                                    tellus.</p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-next-prev">
                                    <ul>
                                        <li class="blog-prev">
                                            <a href="#"><img src="assets/frontend/img/icon/left_arrow.png" alt="img">Previous Post</a>
                                        </li>
                                        <li class="blog-next">
                                            <a href="#">Next Post<img src="assets/frontend/img/icon/right_arrow.png" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/frontend/js/popper.min.js"></script>
        <script src="assets/frontend/js/bootstrap.min.js"></script>
        <script src="assets/frontend/js/isotope.pkgd.min.js"></script>
        <script src="assets/frontend/js/one-page-nav-min.js"></script>
        <script src="assets/frontend/js/slick.min.js"></script>
        <script src="assets/frontend/js/ajax-form.js"></script>
        <script src="assets/frontend/js/wow.min.js"></script>
        <script src="assets/frontend/js/aos.js"></script>
        <script src="assets/frontend/js/jquery.waypoints.min.js"></script>
        <script src="assets/frontend/js/jquery.counterup.min.js"></script>
        <script src="assets/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="assets/frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/frontend/js/plugins.js"></script>
        <script src="assets/frontend/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 12:15:43 GMT -->
</html>
