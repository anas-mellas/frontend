<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TECH PRINT</title>
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
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/printing.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">We Print Your Thoughts!</h1>
	            <p style="font-size: 18px;">we are at your service! </p>
            </div>
          </div>
        </div>
      </div>
    </div>
   
     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form action="rent.php" class="request-form ftco-animate bg-primary" method="POST">
		          		<h2>Commandez Maintenant!</h2>
			    				<div class="form-group">
			    					<label for="" class="label">votre commande</label>
			    					<input type="text" name="votre commande" class="form-control" placeholder="produit, quantité, etc">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Adresse de livraison </label>
			    					<input type="text" name="Adresse de livraison" class="form-control" placeholder="Votre Adresse">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Mode de livraison </label>
			    					<input type="text" name="Mode de livraison" class="form-control" placeholder="standard, express, collecte, etc">
			    				</div>
			    					<div class="form-group">
			    					<label for="" class="label">Paiement </label>
			    					<input type="text" name="Paiement" class="form-control" placeholder="carte crédit, PayPal, virement, etc">
			    				</div>

			    				<div class="d-flex">
			    					
				              	</div>
					            
			    				
                  <?php
                     if(isset($_SESSION['id_user'])){
                  ?>
			    				<div class="form-group">
					              <input type="submit" value="valider votre commande" class="btn btn-secondary py-3 px-4">
					        </div>
                  <?php
                    }else{
                  ?>
                  <div class="form-group">
                        <a class="btn btn-secondary py-3 px-4" href="login.php">Login First !</a>
                  </div>
                   <?php 
                    }
                  ?>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Print your way to success </h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">we make your business anywhere look great </h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">An impressive team at your service</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Receive Your order fastly</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					    	</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>

    
    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="60">0</strong>
                <span>Year <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Products</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2590">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
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
			                <h3 class="heading mb-2">Offset Printing </h3>
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

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="text pt-4">
                    <p class="mb-4">I really like the service of TechPrint !</p>
                    <p class="name">Bsim Zineb</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="text pt-4">
                    <p class="mb-4">I recommended it to everyone, everywhere !</p>
                    <p class="name">Asmae Chaib</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="text pt-4">
                    <p class="mb-4">The service is very fast! i recommend it</p>
                    <p class="name">Soukaina El Mrabet</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
<div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="text pt-4">
                    <p class="mb-4">thank you TechPrint!</p>
                    <p class="name">Amira Markad</p>
                    <span class="position">Client</span>
                  </div>
                </div>
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