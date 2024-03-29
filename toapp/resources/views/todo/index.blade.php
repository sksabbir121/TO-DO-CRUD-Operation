<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Todo List</title>
  </head>
  <body>
    <div class="container">
        <a href="{{url('http://127.0.0.1:8000/product/create')}}" class="btn btn-primary my-3">Add To List</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Task Name</th>
                <th scope="col">Task Type</th>
                <th scope="col">Task Reason</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
           @foreach($product as $product)
           <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->Task Name}}</td>
                <td>{{$product->Task Type}}</td>
                <td>{{$product->Task Reason}}</td>
                <td>
                    <a href="{{route('product.edit',['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.delete',['product'= $Product])}}">
                        @csrf
                        @method('delete')
                        <input type="Submit" value="Delete"/>
                    </form>
                </td>
           </tr>
           @endforeach
        </table>
            
                
        
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>