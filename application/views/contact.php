<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact | RTE</title>
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
                        <h2>contact</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>contact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Jatimulya Reegency, Bekasi 17510</h3>
              <p>Workshop place</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+62 800000000</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>info@rukmanatirtayasa.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

<!-- footer part start-->
<footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="single-footer-widget footer_1">
                         <h4>PT Rukmana Tirtayasa Konstruksi</h4>
                        <p>Experienced since 2017, PT Rukmana Tirtayasa Konstruksi is a general contracting company engaged in interior design, architecture, and construction.</p>
                        <p><span> Address :</span> Jatimulya Reegency, Bekasi 17510</p>
                        <p><span> Phone :</span> +62 800000000</p>
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