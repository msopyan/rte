<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portofolio | RTE</title>
    <link rel="icon" href="<?php echo base_url().'theme/img/favicon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/themify-icons.css'?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/flaticon.css'?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href=<?php echo base_url().''?> title="Go to Home"> <img src="<?php echo base_url().'theme/img/logo.png'?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href=<?php echo base_url().''?>>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=<?php echo base_url().'about'?>>About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Architecture</a>
                                        <a class="dropdown-item" href="#">Construction</a>
                                        <a class="dropdown-item" href="#">Interior Design</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href=<?php echo base_url().'contact'?>>Get a Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>Portofolio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

        <!-- our_project part start-->
        <section class="our_project section_padding" id="portfolio">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-10">
                    <div class="section_tittle">
                        <h2>Our Portofolio</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10">
                    <div class="filters portfolio-filter project_menu_item">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".buildings">Construction</li>
                            <li data-filter=".rebuild">Interior Design</li>
                            <li data-filter=".architecture">Architecture</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filters-content">
                <div class="row justify-content-between portfolio-grid">
                    <div class="col-lg-4 col-sm-6 all buildings">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/co/1.jpeg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Property</p>
                                    <a href="#"><h2>Contruction</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all rebuild">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/id/1.jpg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Design</p>
                                    <a href="#"><h2>Housing & Resto</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all rebuild">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/id/2.jpg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Design</p>
                                    <a href="#"><h2>Housing & Resto</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all rebuild">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/id/3.jpg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Design</p>
                                    <a href="#"><h2>Housing & Resto</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all architecture">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/arc/1.jpg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Property</p>
                                    <a href="#"><h2>Housing & Resort</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all architecture">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/arc/2.jpg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Property</p>
                                    <a href="#"><h2>Housing & Resort</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all architecture">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?php echo base_url().'theme/img/project/arc/3.jpg'?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Property</p>
                                    <a href="#"><h2>Housing & Resort</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_project part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="single-footer-widget footer_1">
                         <h4>PT Rukmana Tirtayasa Konstruksi</h4>
                        <p>Experienced since 2017, PT Rukmana Tirtayasa Konstruksi is a general contracting company engaged in interior design, architecture, and construction.</p>
                        <p><span> Address :</span> Jatimulya Reegency, Bekasi 17510</p>
                        <p><span> Phone :</span> +2 36 265 (8060)</p>
                        <p><span> Email : </span>info@rukmanatirtayasa.com </p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Best Services</h4>
                        <div class="contact_info">
                            <ul>
                                <li>
                                    <a href="#">Architecture</a>
                                </li>
                                <li>
                                    <a href="#">Interior Design</a>
                                </li>
                                <li>
                                    <a href="#">Construction</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Our Gallery</h4>
                        <div class="footer_img">
                            <a href="#"><img src="img/footer_img/footer_1.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_2.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_3.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_4.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_5.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_6.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_7.jpg" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text ">
                        <div class="row">
                            <div class="col-lg-7 ">
                                <p class="footer-text text-center">
                                 &copy; <script>document.write(new Date().getFullYear());</script> PT. Rukmana Tirtayasa Konstruksi All rights reserved</p>
                            </div>
                            <!--<div class="col-5">
                                <div class="footer-text text-center">
                                    <ul>
                                        <li>
                                            <a href="#">Architecture</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="<?php echo base_url().'theme/js/jquery-1.12.1.min.js'?>"></script>
<!-- popper js -->
<script src="<?php echo base_url().'theme/js/popper.min.js'?>"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
<!-- easing js -->
<script src="<?php echo base_url().'theme/js/jquery.magnific-popup.js'?>"></script>
<!-- swiper js -->
<script src="<?php echo base_url().'theme/js/swiper.min.js'?>"></script>
<!-- isotope js -->
<script src="<?php echo base_url().'theme/js/isotope.pkgd.min.js'?>"></script>
<!-- particles js -->
<script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jquery.nice-select.min.js'?>"></script>
<!-- swiper js -->
<script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jquery.counterup.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
<!-- custom js -->
<script src="<?php echo base_url().'theme/js/custom.js'?>"></script>
</body>

</html>