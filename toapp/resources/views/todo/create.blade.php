<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create page</title>
  </head>
  <body>
   
  <div class="container">
        <a href="{{url('http://127.0.0.1:8000/product')}}" class="btn btn-primary my-3">Todo List</a>
        <form action="{{route('todo.store')}}" method="post">
             @csrf
             @method('post')
             <div class="form-group">
                <label for="">Id</label>
                <input type="text" class="form-control" name="Id" placeholder="Enter Your Task Id">

            </div>
            <br>
            
            <div class="form-group">
                <label for="">Task Name</label>
                <input type="text" class="form-control" name="Task Name" placeholder="Enter Your Task Name">

            </div>
            <br>
            <div class="form-group">
                <label for="">Task Type</label>
                <input type="text" class="form-control" name="Task Type" placeholder="Enter Your Task Type">

            </div>
            <br>
            <div class="form-group">
                <label for="">Task Reason</label>
                <input type="text" class="form-control" name="Task Reason" placeholder="Enter Your Task Reason">

            </div>

            <input type="submit" class="btn btn-primary my-3" value="Submit">
            
            
        </form>

    </div>

    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>