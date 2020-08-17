@extends('theme/main_supplier')

@section('title','Paintings')

@section('content')

<div class="container mt-2">
		<!-- Home -->

	<div class="home" style="background-image:url({{asset('client/images/75.jpg')}} ); width: 102.8%;height: 340px;left: -14px;top: -20px;" >
	</div>
<span class="span_title">Paintings</span>


	<br><br><br><br>

	<!-- Products -->

		<div class="products">
					<div class="row">
						@foreach ($data as $i)
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item hot">
									<div class="product_inner">
										<div class="product_image">
											<a href="">
												<img src="{{asset('productcategoryimages/paintings/'.$i->supplier_id.'/'.$i->image)}}"  alt="">
											</a>

										</div>
										<div class="product_content text-center">
											<div class="product_title">{{$i->product_name}}</div>
											<div class="product_price"> Rs.{{$i->price}}</div>
										</div>
									</div>
								</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>

@endsection