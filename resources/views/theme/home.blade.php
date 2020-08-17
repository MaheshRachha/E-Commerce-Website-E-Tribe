@extends('theme/main')
 
@section('data')
    <div class="content">
		<!-- Home -->

	<div class="home">
		<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('client/images/50.jpg')}})"></div>
						<div class="home_content_container">
							<div class="home_content">
								<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								</div>
								<div class="home_title" >20 % Discount on the <br>New Collection  </div>
								<div class="button button_1 home_button trans_200"><a href="{{asset('client/categories.html')}}">Shop NOW!</a></div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('client/images/backimage.jpg')}})"></div>
						<div class="home_content_container">
							<div class="home_content">
								<div class="home_title" style="color:white;">20 % Discount on the <br>New Collection  </div>
								<div class="button button_1 home_button trans_200"><a href="{{asset('client/categories.html')}}">Shop NOW!</a></div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('client/images/backimage3.jpg')}})"></div>
						<div class="home_content_container">
							<div class="home_content">
								<div class="home_title" style="color:white;">20 % Discount on the <br>New Collection  </div>
								<div class="button button_1 home_button trans_200"><a href="{{asset('client/categories.html')}}">Shop NOW!</a></div>
							</div>
						</div>
					</div>

				</div>

				<!-- Home Slider Navigation -->
				<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{asset('client/images/prev.png')}}" alt=""></div></div>
				<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{asset('client/images/next.png')}}" alt=""></div></div>

			</div>
		</div>

		<!-- Boxes -->

		<div class="boxes">
			<div class="section_container">
				<div class="container">
					<div class="row">

						<!-- Box -->
						<div class="col-lg-4 box_col">
							<div class="box">
								<div class="box_image"><img src="{{asset('client/images/70.jpg')}}" alt=""></div>
								<div class="box_title trans_200"><a href="{{asset('client/Handcrafts.html')}}">Handcrafts collection</a></div>
							</div>
						</div>

						<!-- Box -->
						<div class="col-lg-4 box_col">
							<div class="box">
								<div class="box_image"><img src="{{asset('client/images/44.jpg')}}" alt=""></div>
								<div class="box_title trans_200"><a href="{{asset('client/Paintings.html')}}">Paintings collection</a></div>
							</div>
						</div>

						<!-- Box -->
						<div class="col-lg-4 box_col">
							<div class="box">
								<div class="box_image"><img src="{{asset('client/images/52.jpg')}}" alt=""></div>
								<div class="box_title trans_200"><a href="{{asset('client/Arts.html')}}">Arts Collection</a></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Categories -->

		<div class="categories">
			<div class="section_container">
				<div class="container">
					<div class="row">
						
						<div class="col text-center">
							<div class="categories_list_container">
								<ul class="categories_list d-flex flex-row align-items-center justify-content-start">
									<li><a href="{{asset('client/categories.html')}}">new arrivals</a></li>
									<li><a href="{{asset('client/categories.html')}}">recommended</a></li>
									<li><a href="{{asset('client/categories.html')}}">best sellers</a></li>
								</ul>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="section_container">
				<div class="container">
					<div class="row">
					
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item hot">
									<div class="product_inner">
										<div class="product_image">
											<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/28.jpg')}}"  alt=""></a>
											<div class="product_tag">hot</div>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Antique Bull</div>
											<div class="product_price">₹1200</div>
											<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
										</div>
									</div>
								</div>
						</div>

						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item">
									<div class="product_inner">
										<div class="product_image"><a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/img6.jpg')}}" alt=""></a>
										<div class="product_tag"></div>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Wall Arts</div>
											<div class="product_price">₹190</div>
											<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
										</div>
									</div>
								</div>
						</div>
						
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item sale">
									<div class="product_inner">
										<div class="product_image">
											<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/30.jpg')}}" alt=""></a>
											<div class="product_tag">sale</div>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Antique Horse</div>
											<div class="product_price">₹3000</div>
											<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
										</div>
									</div>
								</div>
						</div>
						
						
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item">
									<div class="product_inner">
										<div class="product_image">
											<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/58.jpg')}}" alt=""></a>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Handcrafted POT</div>
											<div class="product_price">₹599</div>
											<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
										</div>
									</div>
								</div>
						</div>
						
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item">
									<div class="product_inner">
										<div class="product_image">
											<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/31.jpg')}}" alt=""></a>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Handcrafted Horse</div>
											<div class="product_price">₹7999</div>
											<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
										</div>
									</div>
								</div>
						</div>
						
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item new">
									<div class="product_inner">
										<div class="product_image">
											<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/img17.jpg')}}" alt=""></a>
											<div class="product_tag">new</div>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Timber</div>
											<div class="product_price">₹5999</div>
										</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
									</div>
								</div>
						</div>
						
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item">
									<div class="product_inner">
										<div class="product_image">
										<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/63.jpg')}}" alt=""></a>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Antique POT</div>
											<div class="product_price">₹1500</div>
										</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
									</div>
								</div>
						</div>
						
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item sale">
									<div class="product_inner">
										<div class="product_image">
											<a href="{{asset('client/single_product.html')}}"><img src="{{asset('client/images/49.jpg')}}" alt=""></a>
											<div class="product_tag">sale</div>
										</div>
										<div class="product_content text-center">
											<div class="product_title">Golden Nandi</div>
											<div class="product_price">₹49999</div>
										</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="{{asset('client/cart.html')}}">add to cart</a></div>
									</div>
								</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<div class="newsletter">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('client/images/newsletter.jpg')}}" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="newsletter_content text-center">
							<div class="newsletter_title_container">
								<div class="newsletter_title">subscribe to our newsletter</div>
								<div class="newsletter_subtitle">we won't spam, we promise!</div>
							</div>
							<div class="newsletter_form_container">
								<form action="#" id="newsletter_form" class="newsletter_form">
									<input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
									<button class="newsletter_button">submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection