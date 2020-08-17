@extends('theme/main')

@section('title','Add Product')

@section('content')


  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-sm">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">REQUEST TO ADD A PRODUCT!</h1>
              </div>


              <form class="user"  method="post" action="{{ URL::to('request')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
					<span class="heading">Product Name :</span>
                    <input type="text" name="product_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Product Name" >
                </div>
                <div class="form-group">
                  <span class="heading">Product Image:</span>
                  <br>
                  <input name="product_image" type="file" id="examplePhoto" >
                        </div>

                  <div class="form-group">
                    <span class="heading">Category Type :</span>
                      <input type="text" name="product_category" class="form-control form-control-user"  placeholder="Handcrafs Or Arts Or Wall paints Or Forest Products" >
                  </div>

				<div class="form-group">
					<span class="heading">Product Quantity :</span>
                    <input type="integer" name="product_quantity" class="form-control form-control-user"  placeholder="Product Quantity ">
                </div>

                <div class="form-group">
					<span class="heading">Price For Single Quantity :</span>
					<input type="integer" name="price" class="form-control form-control-user"  placeholder="Prices">
                </div>
                <button class="btn btn-primary btn-user btn-block " style="margin-left:0rem;">
                  REQUEST
              </button>
              </form>
            </div>
          </div>


        </div>
      </div>
    </div>

  </div>

@endsection
