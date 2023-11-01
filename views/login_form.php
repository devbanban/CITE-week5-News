<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DEVBANBAN - Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/1.jpg" rel="icon">
  <link href="assets/img/1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <?php echo link_tag('asset/frontend/vendor/animate.css/animate.min.css');?>
  <?php echo link_tag('asset/frontend/vendor/bootstrap/css/bootstrap.min.css');?>
  <?php echo link_tag('asset/frontend/vendor/bootstrap-icons/bootstrap-icons.css');?>
  <?php echo link_tag('asset/frontend/vendor/boxicons/css/boxicons.min.css');?>
  <?php echo link_tag('asset/frontend/vendor/glightbox/css/glightbox.min.css');?>
  <?php echo link_tag('asset/frontend/vendor/swiper/swiper-bundle.min.css');?>

  <!-- Template Main CSS File -->
  <?php echo link_tag('asset/frontend/css/style.css');?>

  <!-- =======================================================
  * Template Name: eBusiness
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
  <body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>My</span> Website</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1> 
          <a href="index.html"><img src="assets/img/1.jpg" alt="" class="img-fluid">
            <span> My</span> Website</a>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#news">News</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <!-- <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-left">
              <br><br>
              <h2>รายละเอียดข่าว</h2>
            </div>
          </div>
        </div> -->
        <div class="row">
          
          <!-- Start Left Blog -->
          <div class="col-lg-4 col-md-4 col-sm-4"></div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <br><br>
                <h3>Login</h3>
              </div>
              <form role="form" action="<?= site_url('login/authen'); ?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <div class="form-group mb-3">
                    <div class="col-sm-3 control-label">
                      Email
                    </div>
                    <div class="col-sm-9">
                      <input type="email" name="admin_email" class="form-control" required placeholder="email" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="col-sm-3 control-label">
                      Password
                    </div>
                    <div class="col-sm-9">
                      <input type="password" name="admin_pwd" class="form-control" required  minlength="2"   placeholder="password" autocomplete="off">
                    </div>
                  </div> 
                  <div class="form-group mb-3">
                    <div class="col-sm-3 control-label">
                    </div>
                    <div class="col-sm-9">
                      <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                  </div>
                  
                  </div><!-- /.box-body -->
                </form>
              </div>
              <!-- Start single blog -->
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog -->
      <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>e</span>Business</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    <?php if ($this->session->flashdata('login_error')): ?>
    swal("", "Username หรือ Password ไม่ถูกต้อง!", "warning");
    <?php endif; ?>
    </script>
      <!-- Vendor JS Files -->
  <script src="<?=base_url();?>asset/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>asset/frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url();?>asset/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url();?>asset/frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url();?>asset/frontend/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url();?>asset/frontend/js/main.js"></script>
  </body>
</html>