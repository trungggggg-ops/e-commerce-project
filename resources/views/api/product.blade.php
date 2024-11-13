<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category ID</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->category_id}}</td>
                <td>
                    <a href="{{route('edit',$item->id)}}">Update</a>

                    <form action="{{route('deleteProduct',$item->id)}}" method="post">
                        @csrf
                        @method("DELETE")
                        
                    <button type="submit"><i class="fas fa-trash-alt"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
