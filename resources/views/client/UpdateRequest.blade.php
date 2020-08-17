
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Update Request</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('client/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-sm">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Request!</h1>
                <form class="user" method="post" action="{{action('RequestController@update',$request_id)}}" enctype="multipart/form-data">
              </div>
                {{ csrf_field() }}
                @method('patch')
                <div class="form-group">
          <span class="heading">Product Name :</span>
                    <input type="text" name="product_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Product Name" value="{{$res['product_name']}}" >
                </div>
                <div class="form-group">
                  <span class="heading">Product Image:</span>
                  <br>
                  <input name="product_image" type="file" id="examplePhoto" value="{{$res['product_image']}}" >
                        </div>

                  <div class="form-group">
                    <span class="heading">Category Type :</span>
                      <input type="text" name="product_category" class="form-control form-control-user"  placeholder="Handcrafs Or Arts Or Wall paints Or Forest Products" value="{{$res['product_category']}}">
                  </div>

        <div class="form-group">
          <span class="heading">Product Quantity :</span>
                    <input type="integer" name="product_quantity" class="form-control form-control-user"  placeholder="Product Quantity" value="{{$res['product_quantity']}}">
                </div>

                <div class="form-group">
          <span class="heading">Price For Single Quantity :</span>
          <input type="integer" name="price" class="form-control form-control-user"  placeholder="Prices" value="{{$res['price']}}">
                </div>
                <div class="form-group">
			        <button style="margin-left: 0rem;" class="btn btn-primary btn-user btn-block">
                  Update Request
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
