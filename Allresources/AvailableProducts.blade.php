<html>
<body>
    <table border=3>
      <tr><th>Product ID</th><th>Supplier id</th><th>Product Name</th><th>Product Quantity</th><th>Image</th><th>Price</th><th>edit</th><th>Delete</th></tr>
      @foreach($res as $row)
      <tr><td>{{$row['id']}}</td>
        <td>{{$row['supplier_id']}}</td>
        <td>{{$row['product_name']}}</td>
        <td>{{$row['quantity']}}</td>
        <td>{{$row['image']}}</td>
        <td>{{$row['price']}}</td>
        <td>
          <a href="{{action('ProductResource@edit',$row['id'])}}">Edit</a></td>
        <form name="f1" method="post" action="{{action('ProductResource@destroy',$row['id'])}}">
          @csrf
          @method('Delete')
        <td><button onclick="return confirm('Do you want to continue ?')"  type="submit">Delete</button></td>
      </form>
      </tr>
      @endforeach
    </table>
</body>
</html>
