<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <table border="3">
        <tr><th>Category ID</th><th>Category Name</th><th>Description</th><th>Category Image</th><th>Edit</th><th>Delete</th></tr>
        @foreach($res as $row)
        <tr><td>{{$row['id']}}</td>
          <td>{{$row['category_name']}}</td>
          <td>{{$row['description']}}</td>
          <td>{{$row['image']}}</td>
          <td>
            <a href="{{action('AddProductCategory@edit',$row['id'])}}">Edit</a>
          </td>
          <form name="f1" method="post" action="{{action('AddProductCategory@destroy',$row['id'])}}">
              @csrf
              @method('Delete')
            <td><button onclick="return confirm('Do you want to continue ?')" type="submit">Delete</button></td>
          </form>
        </tr>
        @endforeach
      </table>
  </body>
</html>
