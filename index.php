<?php 
require_once 'dashboard/includes/db.php';
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/animate.min.css">
    <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">
    <!-- <link rel="stylesheet" href="assets/frontend/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
                            <?php 
                                $select_query = "SELECT image_value FROM logo_images WHERE image_type='logo'";
                                $logo = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query))['image_value'];
                            ?>
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img src="dashboard/uploads/logo_images/<?= $logo?>" alt="Logo"></a>
                                <?php 
                                $select_query = "SELECT image_value FROM logo_images WHERE image_type='small_screen_logo'";
                                $s_logo = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query))['image_value'];
                                ?>
                                <a href="index.php" class="navbar-brand s-logo-none"><img src="dashboard/uploads/logo_images/<?= $s_logo?>" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-search">
                                    <!-- <a href="#"><i class="fa fa-search"></i></a> -->
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
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                
                <a href="index.php">fhtrhrth
                    <img src="dashboard/uploads/logo_images/<?= $logo?>" alt="" />
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

                <?php
                $select_query = "SELECT * FROM `socialmedias`";
                $socialmedias = mysqli_query($db_connect, $select_query);
                ?>
                            
                <?php foreach($socialmedias as $socialmedia):?>
                    <a href="<?=$socialmedia['socialmedialink']?>"><i class="<?=$socialmedia['socialmedia_icon']?>"></i></a>
                <?php endforeach; ?>
                
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <?php 
                                $select_query = "SELECT * FROM `settings` WHERE setting_name='owner_name'";
                                $owner_name = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                            ?>
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$owner_name['setting_value']?></h2>
                            <?php 
                                $select_query = "SELECT * FROM `settings` WHERE setting_name='owner_about'";
                                $owner_about = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                            ?>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$owner_about['setting_value']?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                            
                                <?php foreach($socialmedias as $socialmedia):?>
                                    <li><a href="<?=$socialmedia['socialmedialink']?>"><i class="<?=$socialmedia['socialmedia_icon']?>"></i></a></li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                            <a href="#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                        <?php 
                                $select_query = "SELECT image_value FROM logo_images WHERE image_type='profile_image'";
                                $profile_image = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query))['image_value'];
                            ?>
                            <img src="dashboard/uploads/logo_images/<?= $profile_image?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="assets/frontend/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                        <?php 
                                $select_query = "SELECT image_value FROM logo_images WHERE image_type='about_image'";
                                $about_image = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query))['image_value'];
                            ?>
                            <img src="dashboard/uploads/logo_images/<?= $about_image?>" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                        <?php 
                                $select_query = "SELECT * FROM `settings` WHERE setting_name='about_me'";
                                $about_me = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                        ?>
                            <p><?= $about_me['setting_value'] ?></p>
                            <h3>Skill:</h3>
                        </div>
                        <?php
                        $select_query = "SELECT * FROM `skills`";
                        $skills = mysqli_query($db_connect, $select_query);
                        ?>
                        <?php foreach ($skills as $skill) : ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?= $skill['year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $skill['sujbect'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skill['percentage'] ?>%;" aria-valuenow="<?= $skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $service_select = "SELECT * FROM `services` WHERE status = 'active'";
                    $services = mysqli_query($db_connect, $service_select);
                    ?>
                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['service_icon'] ?>"></i>
                                <h3><?= $service['service_name'] ?></h3>
                                <p>
                                    <?= $service['service_des'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $select_query = "SELECT * FROM `portfolios`";
                    $portfolios = mysqli_query($db_connect, $select_query);
                    $serial = 1;
                    ?>
                    <?php foreach ($portfolios as $portfolio) : ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="dashboard/uploads/portfolio_image/<?= $portfolio['portfolio_image'] ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $portfolio['portfolio_category'] ?></span>
                                    <h4><a href="portfolio-single.php?id=<?= $portfolio['id'] ?>"><?= $portfolio['portfolio_name'] ?></a></h4>
                                    <a href="portfolio-single.php?id=<?= $portfolio['id'] ?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php
                        $select_query = "SELECT * FROM `features`";
                        $features = mysqli_query($db_connect, $select_query);
                        ?>
                        <?php foreach ($features as $feature) : ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $feature['features_icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $feature['features_count'] ?></span></h2>
                                        <span><?= $feature['features_name'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <?php
                            $select_query = "SELECT * FROM `testimonials`";
                            $testimonials = mysqli_query($db_connect, $select_query);
                            $serial = 1;
                            ?>
                            <?php foreach ($testimonials as $testimonial) : ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="dashboard/uploads/testimonials_photos/<?= $testimonial['image'] ?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?= $testimonial['description'] ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $testimonial['name'] ?></h5>
                                            <span><?= $testimonial['designation'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="assets/frontend/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <?php
                    $select_query = "SELECT * FROM `companies`";
                    $companies = mysqli_query($db_connect, $select_query);

                    ?>
                    <?php foreach ($companies as $company) : ?>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="dashboard/uploads/company_photos/<?= $company['company_image'] ?>" alt="img">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                        <?php 
                                $select_query = "SELECT * FROM `settings` WHERE setting_name='contact_info_description'";
                                $contact_info_description = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                            ?>
                            <p><?= $contact_info_description['setting_value']?></p>
                            <?php 
                                $select_query = "SELECT * FROM `settings` WHERE setting_name='office_in'";
                                $office_in = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
                            ?>
                            <h5>OFFICE IN <span><?= $office_in['setting_value']?></span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><span>Address :</span><?=$owner_address['setting_value']?></li>
                                    <li><i class="fa fa-headphones"></i><span>Phone :</span><?=$owner_phone['setting_value']?></li>
                                    <li><i class="fa fa-envelope"></i><span>e-mail :</span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3cacdc5cce3c6dbc6ced3cfc68dc0ccce"><?=$owner_email['setting_value']?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="send_message.php" method="POST">
                                <input type="text" name="name" placeholder="your name *">
                                    <?php if (isset($_SESSION['name_error'])):?>
                                    <div id="emailHelp" class=" text-danger">
                                        <?= $_SESSION['name_error'];?>
                                    </div>
                                    <br>
                                    <?php endif; ?>
                                    <?php unset($_SESSION['name_error']); ?>
                                <input type="email" name="email" placeholder="your email *">
                                    <?php if (isset($_SESSION['email_error'])):?>
                                    <div id="emailHelp" class=" text-danger">
                                        <?= $_SESSION['email_error'];?>
                                    </div>
                                    <br>
                                    <?php endif; ?>
                                    <?php unset($_SESSION['email_error']); ?>
                                <textarea name="message" id="message" placeholder="your message *"></textarea>
                                <?php if (isset($_SESSION['message_error'])):?>
                                    <div id="emailHelp" class=" text-danger">
                                        <?= $_SESSION['message_error'];?>
                                    </div>
                                    <br>
                                    <?php endif; ?>
                                    <?php unset($_SESSION['message_error']); ?>
                                <button class="btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
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
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
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

</html>