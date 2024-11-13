
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trang Quản Trị</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">

</head>
<body>

<header>
    <h1>Trang Quản Trị</h1>
</header>

<nav>
    <ul>
        <li><a href="{{route('admin.index')}}">Trang Chủ</a></li>
        <li><a href="{{route('admin.product')}}">Sản phẩm</a></li>
        <li><a href="{{route('admin.users')}}">Người dùng</a></li>
    </ul>
</nav>

<section>
    <div class="container2">
        {{-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
        @if(session('msg'))
        <h1>{{session('msg')}}</h1>
        @endif
        <section>
            @if($data)
            <form method="post" action="{{ route('admin.updateProduct', $data->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <label for="product_name">Tên sản phẩm:</label><br>
                <input type="text" id="product_name" value="{{ $data->name }}" name="product_name"><br>
                @error('product_name')
                    <div class="" style="color: red">{{ $message }}</div>
                @enderror
        
                <label for="product_price">Giá:</label><br>
                <input type="text" id="product_price" value="{{ $data->price }}" name="product_price"><br>
                @error('product_price')
                    <div class="" style="color: red">{{ $message }}</div>
                @enderror
        
                <label for="category">Danh mục:</label><br>
                <select name="category">
                    <option {{ $data->iddm == '1' ? 'selected' : '' }} value="1">Giày</option>
                    <option {{ $data->iddm == '2' ? 'selected' : '' }} value="2">Điện thoại</option>
                </select><br>
        
                <label for="product_image">Hình ảnh:</label><br>
                <img src="{{ asset($data->img) }}" alt=""><br>
                <input type="file" id="product_image" name="product_image" ><br>
        
                <button type="submit">Cập nhật</button>
            </form>
        @endif
        
        </section>
    </div>
</section>

</body>
</html>
