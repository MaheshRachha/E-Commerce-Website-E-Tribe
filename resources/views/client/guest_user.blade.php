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

	<link rel="stylesheet" href="{{asset('client/css1/style.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/animate.css')}}">
    
	
	<!--for Captcha
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	
	
	
	
	
    <link rel="stylesheet" href="{{asset('client/css1/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/aos.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('client/css1/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('client/css1/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('client/css1/icomoon.css')}}">
    
	
	
	
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
			  <!--<li class="nav-item"><a ="{{url('login')}}" class="nav-link">Login / Sign Up</a></li>-->
			  <li class="nav-item"><button onclick="document.getElementById('123').style.display='block'" class="nav-link">SignUp/Login</button></li>

	        </ul>
					<!--pop-pop-->
					<div id="123" class="j2">
						<div class="j1 animate-top ">
							<span onclick="document.getElementById('123').style.display='none'" class="w-button display-topright">&times;</span>
							<div class="content123">
								
										
									

										  
											  <form class="user" method="post" action="{{url('checkLogin')}}">
												{{csrf_field()}}
												<h2 class="nameLogin">Login</h2>
												  <span class="u1">Username</span>
												  <input type="email" name="username" class="username" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username"  >
												
												
													<span class="p1">Password</span>
												  <input type="password" name="password" class="password" id="exampleInputPassword" placeholder="Password">
												
												<div class="custom-control custom-checkbox small">
													<input type="checkbox" class="custom-control-input" id="customCheck">
													<label class="custom-control-label" for="customCheck" style="color:#7f0794;margin-left: -1rem;">Remember Me</label>
												</div>													
												  
												  
												  
												  
												  <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
														  <label for="password" style="position: relative; /* top: 0rem; */font-size: 12px;color: #9C27B0;left: -14rem;" class="col-md-4 control-label">Captcha</label>


														  <div class="col-md-6">
															  <div class="captcha">
															  <span style="    left: -14rem;position: relative;top: -9px;">{!! captcha_img() !!}</span>
															  <button type="button" class="btn btn-success btn-refresh" style="    position: relative;top: -3rem;left: -6rem;"><i class="fa fa-refresh"></i></button>
															  </div>
															  <!--<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">-->
																<input type="text" name="captcha" class="captcha11" id="captcha" placeholder="Enter Captcha">

															  @if ($errors->has('captcha'))
																  <span class="help-block">
																	  <strong>{{ $errors->first('captcha') }}</strong>
																  </span>
															  @endif
														  </div>
													  </div>
												  <input type="submit" class="login" value="Login">
											</form>
											  <hr>
											  <div class="text-center">
												<button class="forgot" onclick="document.getElementById('forget123').style.display='block'">Forgot Password?</button>
											  </div>
											  <div class="text-center">
												
												<button class="n" onclick="document.getElementById('sign123').style.display='block'">Create an Account!</button>
											  </div>
										<div id="sign123" class="signj2">
											<div class="signj1 signanimate-top ">
												<span onclick="document.getElementById('sign123').style.display='none'" class="signw-button signdisplay-topright">&times;</span>
												<div class="signcontent123">
													
															
														

															  
																  
																	<div class="signnameing">SignUp</div>		
																 <form class="user" method="post" action=" {{action('ControllerRegistration@store')}} " enctype="multipart/form-data">
																		{{csrf_field()}}
																	  <span class="photo">Photo :</span><br>
																		<input type="file" name="cust_photo" id="examplePhoto" class="photo" >
																	  <span class="fullname">Full Name :</span>
																		<input type="text" name="cust_name"  class="fullname1" id="exampleFirstName" placeholder="Full Name" >
																	<span class="Cnumber">Contact Number :</span>
																		<input type="integer" name="cust_phone" class="Cnumber1" id="examplePhoneNumber" placeholder="Enter Contact Number">  
																	<span class="email_username">Email ID / Username :</span>
																		<input type="email" name="cust_email" class="email_username1" id="exampleInputEmail" placeholder="Email Address">	
																	<span class="password_cust">Password :</span>
																		<input type="password" name="new_password" class="password_cust1" id="exampleInputPassword" placeholder="New Password">
																	<span class="conf_password">Confirm Password :</span>
																		<input type="password" name="confirm_password" class="conf_password1" id="exampleRepeatPassword" placeholder="Confirm Password">
																	<span class="homeadd">Home Address :</span>
																		<input type="text" name="cust_home_addr" class="homeadd1" id="exampleHomeAddress" placeholder="Enter Home Address">
																	<span class="offadd">Office Address :</span>
																		<input type="text" name="cust_office_addr" class="offadd1" id="exampleOfficeAddress" placeholder="Office Address">
																	<input type="submit" value="SIGN - UP" class="signuplogin">
																</form>
																
																<div class="leftsideback" >

																		<div class="social-class" style="padding-left: 20%;padding-right: 84%;margin-top: -510px;padding-top: 195%;;width: 100%;height: 100%;background-image: linear-gradient(180deg,#d47f0029 10%,#f39921cf 70%);"  >
																		 
																		
																		
																		</div>
					
																</div>
																
																
																
																
																
																
																
																
																
																
													
														</div>
													</div>
												</div>	  
											  
											  
											  
											  
											  
											  
											  
											  
											  
											  
											  
										<div id="forget123" class="forgetj2">
											<div class="forgetj1 forgetanimate-top ">
												<span onclick="document.getElementById('forget123').style.display='none'" class="forgetw-button forgetdisplay-topright">&times;</span>
												<div class="forgetcontent123">
													
															
														

															  
																  <form class="user" method="post" action="{{url('checkLogin')}}">
																	{{csrf_field()}}
																		
																 
																	 
																	  <span class="forgetu1">Username</span>
																	  <input type="email" name="username" class="forgetusername" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username"  >
																	
																	
																		<span class="forgetp1">New Password</span>
																	  <input type="password" name="password" class="forgetpassword" id="exampleInputPassword" placeholder="New Password">
																	  <input type="submit" class="forgetlogin" value="Submit">
																	  
																		  
																</form>
													
														</div>
													</div>
												</div>
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
										
										
									
								</div>
							</div>
						</div>
					
						
						
						
						
						
						
					<!--pop-pop-->
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
	              <p><a href="{{asset('client/#')}}" class="btn btn-primary">View Details</a></p>
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


    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over Rs.1000</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Safely Packed</h3>
                <span>Excellent Packing</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex fadeInUp ftco-animated" style="background-image: url( {{asset('client/images/55.jpg')}} );">
									<div class="text text-center">
										<h2>Tribal Products</h2>
										<p>Decorate your kingdom with our Accessories</p>
										<p><a href="{{asset('client/#')}}" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"  style="background-image: url({{asset('client/images/69.jpg')}});">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="{{asset('client/#')}}">Handcrafts</a></h2>
									</div>
								</div>
								<div  class="category-wrap ftco-animate img d-flex align-items-end fadeInUp ftco-animated" style="background-image: url({{asset('client/images/44.jpg')}});">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="{{asset('client/#')}}">Wall Paintings</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end fadeInUp ftco-animated" style="background-image: url( {{asset('client/images/img17.jpg')}} );">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="{{asset('client/#')}}">Minor Forest Products</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end fadeInUp ftco-animated" style="background-image: url( {{asset('client/images/53.jpg')}} );">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="{{asset('client/#')}}">Arts</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/27.jpg')}}" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Antique Bull</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹1200.00</span><span class="price-sale">₹800.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/79.jpeg')}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Antique Bell</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>₹1200.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/70.jpg')}}" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Antique POT</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>₹1200.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/30.jpg')}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Handcrafted Horse</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>₹1200.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>


    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/32.jpg')}}" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Antique Horse</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹1200.00</span><span class="price-sale">₹800.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/img7.jpg')}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Wall Paint by Picaso</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>₹1200.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/52.jpg')}}" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Modern Statue</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>₹1200.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="{{asset('client/#')}}" class="img-prod"><img class="img-fluid" src="{{asset('client/images/37.jpg')}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{asset('client/#')}}">Tribal Gesture</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>₹1200.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{asset('client/#')}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{asset('client/#')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section img" style="background-image: url({{asset('client/images/49.jpg')}});">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate fadeInUp ftco-animated">
          	<span class="subheading">Best Price For You</span>
            <h2 class="mb-4">Deal of the day</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <h3><a href="{{asset('client/#')}}">Golden Nandi</a></h3>
            <span class="price">₹120000 <a href="{{asset('client/#')}}">now ₹80000 only</a></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days">100<span>Days</span></div>
						  <div class="time pl-3" id="hours">06<span>Hours</span></div>
						  <div class="time pl-3" id="minutes">53<span>Minutes</span></div>
						  <div class="time pl-3" id="seconds">52<span>Seconds</span></div>
						</div>
          </div>
        </div>   		
    	</div>
    </section>
	<div id="gotoabout">
	</div>
    <section class="ftco-section testimony-section" >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our Team </h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
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

    <footer class="ftco-footer ftco-section" >
      <div class="container" id="gotofooter">
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
              <p>quote on line no 609 index.html</p>
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
                <li><a href="{{asset('client/#')}}" class="py-2 d-block">About</a></li>
                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Journal</a></li>
                <li><a href="{{asset('client/#')}}" class="py-2 d-block">Contact Us</a></li>
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