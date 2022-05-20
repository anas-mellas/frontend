<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

   <!--Nav Bar-->
  <?php
    include('nav.php');
    include('../dash/traitement/function.php');
  ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/crea.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Our Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Design Creation</h3>
                      <p>We put our technical know-how and our creativity at your service in order to achieve your objectives and optimize your costs. We provide a complete service, from design, printing to delivery of all your documents.
We can also deliver your document digitally or, of course, print directly from your own files…</p>
                    </div>
                  </div>
          </div>
          <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Offset Printing</h3>
                      <p>produced on a printing press using printing plates and wet ink. This type of print takes a little longer to produce as there is more setup time and the final product must dry before finishing can take place. At the same time, offset printing traditionally produces the highest quality available on the widest variety of media and offers the greatest degree of control over color. Additionally, offset printing is the most economical choice when producing a large number of prints from a few originals.</p>
                    </div>
                  </div>
              </div>
          <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Digital Printing</h3>
                      <p>used to be called "copy", but this term is now obsolete. Today, instead of copying a paper original, the vast majority of digital printing is output directly from electronic files. Digital printing is the fastest way to produce small print runs, especially when there are a lot of originals. The quality level of digital printing is now extremely close to offset printing. Although digital printing works well on most media today, there are still papers and jobs where offset printing works better. There are also stocks and jobs where digital printing will work as well or better than offset printing.</p>
                    </div>
                  </div>
          </div>
          <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Packaging</h3>
                      <p>Offset printing is typically used for presentation boxes, brochures, posters, and displays; Flexographic printing is typically used for shipping packaging, folding boxes, stackable display boxes and wrapping papers.</p>
                    </div>
                  </div>
          </div>
          
        </div>
      </div>
    </section>
		
		

     <?php
      include('footer.php');
    ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>