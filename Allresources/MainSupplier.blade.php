<html>
<body>
    <table border=3>
      <tr><th>Supplier ID</th><th>Supplier Name</th><th>Contact Number</th><th>Email</th><th>edit</th><th>Delete</th></tr>
      @foreach($supplier as $row)
      <tr><td>{{$row['id']}}</td>
        <td>{{$row['supplier_name']}}</td>
        <td>{{$row['phone']}}</td>
        <td>{{$row['supplier_email']}}</td>
        <td>
          <a href="{{action('AddSupplierProduct@edit',$row['id'])}}">Update</a></td>
        <form name="f1" method="post" action="{{action('AddSupplierProduct@destroy',$row['id'])}}">
          @csrf
          @method('Delete')
        <td><button onclick="return confirm('Do you want to continue ?')"  type="submit">Delete</button></td>
      </form>
      </tr>
      @endforeach
    </table>
</body>
</html>
