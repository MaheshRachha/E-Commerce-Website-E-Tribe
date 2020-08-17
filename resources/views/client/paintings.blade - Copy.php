@extends('theme/main')

@section('title','Paintings')

@section('content')

<div class="container">
		<!-- Home -->

	<div class="home" style="background-image:url({{asset('client/images/elephant.png')}} ) ;width:1254px;height:466px; " >
		<span class="span_title">Handcrafts</span>
	</div>
	
	
	<br><br><br><br>
	
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
	
		
</div>

@endsection