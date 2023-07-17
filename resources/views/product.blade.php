<!DOCTYPE html>
<html lang="en">
<head>
  <title>image crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>

<div class="container">
  <h2>Image crud</h2>

  <div style="float:right">
    <a class="btn btn-success" href="{{route('add.product')}}">{{_('Add New Product')}}</a>
  </div>    

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=> $product )
      <tr>
        <td>{{ $key+1 }}</td>
        <td>
            <img style="width: 150px; height:100px;"src="{{ asset('images/products/' . $product->image) }}" alt="Product Image">
        </td>
        <td>{{ $product->name }}</td>
        <td>
            <a class="btn btn-primary" href="{{route('edit.product',$product->id)}}">{{_('Edit')}}</a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure want to delete data?')" href="{{route('delete.product',$product->id)}}">{{_('Delete')}}</a>
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>
