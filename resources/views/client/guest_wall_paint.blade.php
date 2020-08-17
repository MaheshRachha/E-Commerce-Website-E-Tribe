@extends('theme/guest_user_theme')
@section('content')
<div class="container">
		<!-- Home -->



	<br><br><br><br>

	<!-- Products -->

		<div class="products">
			<div class="section_container">
				<div class="container">
					<div class="row">
						@foreach ($data as $i)
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item hot">
									<div class="product_inner">
										<div class="product_image">

											<a href="">
												<img src="{{asset('productcategoryimages/Handcrafts/'.$i->supplier_id.'/'.$i->image)}}"  alt="">
											</a>

										</div>
										<div class="product_content text-center">
											<div class="product_title">{{$i->product_name}}</div>
											<div class="product_price">{{$i->price}}</div>
										
										</div>
									</div>
								</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>


</div>
@endsection
