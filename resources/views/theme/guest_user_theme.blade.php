<!DOCTYPE html>
<html lang="en">
  <head>
<style>
  html{
    scroll-behavior: auto;
  }
	.nav-link:hover{
		border-top:2px solid white;
		background-color:#d871f9f7;
		color:white;
	}
	.copyrights
	{
	color:#7f0794;
	}
	.mouse-icon
	{
	border: 2px solid white;
	background-color:red;
	}
	.ftco-category .category-wrap .text:hover{
    background: #7f0794;
}


</style>
    <title>E Tribe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('client/css1/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/animate.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/aos.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('client/css1/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/style.css')}}">
  </head>
  <body class="goto-here" data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91 9999988888</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">etribewebsite@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{asset('client/index.html')}}">E Tribe</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

			<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#gotoabout" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="#gotofooter" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="{{url('login')}}" class="nav-link">Login / Sign Up</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url({{asset('client/images/50.jpg')}})">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center" style="margin-top:-30rem;">
	              <h1 class="mb-2">We Provide Excellent Products </h1>
	              <h2 class="subheading mb-4">We deliver Ancient Tribal Products</h2>
	              <p><a href="{{url('login')}}" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url({{asset('client/images/85.jpg')}})">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center" style="margin-top:-30rem">
	              <h1 class="mb-2" >100% Natural Products</h1>
	              <h2 class="subheading mb-4">We deliver Ancient Tribal Products</h2>
	              <p><a href="{{asset('client/#')}}" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

      @yield('content')

    <div id="gotoabout">
    </div>
    <section class="ftco-section testimony-section" >
      <div class="container" >
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our Team </h2>
            <p>Coming together is a beginning. Keeping together is progress Working together is success.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="item">
                <div class="testimony-wrap p-5 pb-6">
                  <div class="user-img mb-5" style="background-image: url({{asset('client/images/venu.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="name">Venu Bura</p>

                  </div>
                </div>
              </div>
          </div>
		  <div class="col-sm">
            <div class="item">
                <div class="testimony-wrap p-5 pb-6">
                  <div class="user-img mb-5" style="background-image: url({{asset('client/images/mahesh.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">

                    <p class="name">Mahesh Rachha</p>

                  </div>
                </div>
              </div>
          </div>
		  <div class="col-sm">
            <div class="item">
                <div class="testimony-wrap p-5 pb-6">
                  <div class="user-img mb-5" style="background-image: url({{asset('client/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">

                    <p class="name">Hemant Dyavarkonda</p>

                  </div>
                </div>
              </div>
          </div>
		  <div class="col-sm">
            <div class="item">
                <div class="testimony-wrap p-5 pb-6">
                  <div class="user-img mb-5" style="background-image: url({{asset('client/images/omsai.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">

                    <p class="name">Omsai Kalekar</p>

                  </div>
                </div>
              </div>
          </div>

        </div>
      </div>
    </section>

    <hr>

    <footer class="ftco-footer ftco-section" id="gotofooter">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="{{asset('client/#')}}" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">E Tribe</h2>
              <p>Customer Is Always And Completely Right.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/ETribe9"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="('client/#')}}"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/etribeweb2020/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Shop</a></li>
                <li><a href="#gotoabout" class="py-2 d-block">About</a></li>
                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Journal</a></li>
                <li><a href="" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="{{asset('client/#')}}" class="py-2 d-block">FAQs</a></li>
	                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Ashok chowk,near WIT college,Solapur &nbsp -&nbsp 413005</span></li>
	                <li><a href="{{asset('client/#')}}"><span class="icon icon-phone"></span><span class="text">+91 9999988888</span></a></li>
	                <li><a href="{{asset('client/#')}}"><span class="icon icon-envelope"></span><span class="text">etribewebsite@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="copyrights"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i>
						</p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('client/js1/jquery.min.js')}}"></script>
  <script src="{{asset('client/js1/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('client/js1/popper.min.js')}}"></script>
  <script src="{{asset('client/js1/bootstrap.min.js')}}"></script>
  <script src="{{asset('client/js1/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('client/js1/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('client/js1/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('client/js1/owl.carousel.min.js')}}"></script>
  <script src="{{asset('client/js1/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('client/js1/aos.js')}}"></script>
  <script src="{{asset('client/js1/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('client/js1/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('client/js1/scrollax.min.js')}}"></script>
  <script src="{{asset('client/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{asset('client/js1/google-map.js')}}"></script>
  <script src="{{asset('client/js1/main.js')}}"></script>

  </body>
</html>
