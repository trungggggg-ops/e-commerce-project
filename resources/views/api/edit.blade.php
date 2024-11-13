<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Update Product</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('updateProduct', $data->id) }}">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">

                <div class="form-group">
                    <label for="product_name">Name</label>
                    <input type="text" class="form-control" id="product_name" value="{{ $data->name }}" name="product_name">
                </div>

                <div class="form-group">
                    <label for="product_price">Price</label>
                    <input type="text" class="form-control" id="product_price" value="{{ $data->price }}" name="product_price">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                        <option {{ $data->category_id == '1' ? 'selected' : '' }} value="1">Giày</option>
                        <option {{ $data->category_id == '2' ? 'selected' : '' }} value="2">Điện thoại</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a  href="{{route('product')}}" class="btn btn-primary">Quay lai</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
