<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Khan Mobiles & Stationery</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <!-- For crousal slideer -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
    <body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class=" active logo mr-auto"><a href="#header">Khan Mobiles & Stationery</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#product">Products</a></li>
          <li><a href="#contact">Contact Us</a></li>
      
          
        
          @if (Route::has('login'))
                <!-- <div class="top-right links"> -->
                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                <!-- </div> -->
            @endif

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#product" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/img/slider/1.jpg" alt="books" style="width:100%;">
      </div>

      <div class="item">
        <img src="assets/img/slider/2.jpg" alt="Stationery" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="assets/img/slider/3.jpg" alt="gifts" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    
    <section id="product" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <p>We are dealing with all kinds of Stationery items, Sports items, Mobiles & Computers accessories, Gift items, Electronics  items,<br>Easy paisa & Jazz cash, 
             School's uniforms, Copies, registers, School & College Books </p>
        </div>
        <div class="row justify-content-center">
                <div class="card  col-sm-3 p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
                <div class="card col-sm-3  p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div> 
                <div class="card col-sm-3  p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
                <div class="card  col-sm-3 p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
                <div class="card col-sm-3  p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div> 
                <div class="card col-sm-3  p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
                <div class="card  col-sm-3 p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
                <div class="card col-sm-3  p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div> 
                <div class="card col-sm-3  p-2 m-4" style="width: 20rem;">
                    <img class="card-img-top" src="assets/img/slider/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
               
               
        </div>
       
    </section><!-- End About Section -->

    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="contact" class="faq section-bg">

      <div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Contact Us</h2>
  <p>You can contact us</p>
</div>

<div>
  
    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207.49677809036993!2d73.11810928703464!3d33.68439897827035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfea9c3bf3d977%3A0xcf192b7af0de0e1a!2sRawal%20Town%20Market%20Rd%2C%20Rawal%20Town%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1595093388883!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="row mt-5">

  <div class="col-lg-4">
    <div class="info">
      <div class="address">
        <i class="icofont-google-map"></i>
        <h4>Location:</h4>
        <p>Main Market, Rawal Town Islamabad</p>
      </div>

      <div class="email">
        <i class="icofont-envelope"></i>
        <h4>Email:</h4>
        <p>info@example.com</p>
      </div>

      <div class="phone">
        <i class="icofont-phone"></i>
        <h4>Call:</h4>
        <p>+92 331 33929399</p>
      </div>

    </div>

  </div>

  <div class="col-lg-8 mt-5 mt-lg-0">

    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="form-row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          <div class="validate"></div>
        </div>
        <div class="col-md-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
          <div class="validate"></div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
        <div class="validate"></div>
      </div>
      <div class="mb-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>

  </div>

</div>

</div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="" class="contact">
      <div class="text-center">
        <h1> Products</h1>
        <h3>You have to get all these products from us at very low prices.</h3>

          <marquee>
          <img src="assets/img/accesories/bags.jpg" alt="bags" style="width:200px;height:200px;">
          <img src="assets/img/accesories/books.jpg" alt="books" style="width:200px;height:200px;">
          <img src="assets/img/accesories/calculator.jpg" alt="calculator" style="width:200px;height:200px;">
          <img src="assets/img/accesories/colors.jpg" alt="color" style="width:200px;height:200px;">
          <img src="assets/img/accesories/computers.jpg" alt="computers" style="width:200px;height:200px;">
          <img src="assets/img/accesories/gifts.png" alt="gifts" style="width:200px;height:200px;">
          <img src="assets/img/accesories/pencils.jpg" alt="pencils" style="width:200px;height:200px;">
          <img src="assets/img/accesories/pointers.jpg" alt="pointers" style="width:200px;height:200px;">
          <img src="assets/img/accesories/sports.jpg" alt="sports" style="width:200px;height:200px;">
          <img src="assets/img/accesories/uniform.jpg" alt="uniform" style="width:200px;height:200px;">

          </marquee>
    </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Khan Mobiles & Stationary</h3>
            <p>
              Main Market <br>
              Rawal Town <br>
              Islamabad<br><br>
              <strong>Phone:</strong> +92 334 5588964<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#product">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
              
            </ul>
          </div>

          


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span> Riphah International University</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by Riphah International University
        </div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
