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
    <div class="col3">
        
        @if(session('msg'))
        <h1>{{session('msg')}}</h1>
        @endif

        <h2>Thêm Mới Sản Phẩm</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="product_name" value="{{old('product_name')}}" placeholder="Tên sản phẩm">
            @error('product_name')
                <div class="" style="color: red">{{ $message }}</div>
            @enderror
            
            <input type="text" name="product_price" placeholder="Giá">
            @error('product_price')
                <div class="alert alert-danger"style="color: red">{{ $message }}</div>
            @enderror
            
            <select name="category">
                <option value="1">Giày</option>
                <option value="2">Điện thoại</option>
            </select>
            @error('category')
                <div class="alert alert-danger"style="color: red">{{ $message }}</div>
            @enderror
            
            <input type="file" name="product_image"> 
            @error('product_image')
                <div class="alert alert-danger"style="color: red">{{ $message }}</div>
            @enderror
            
            <button type="submit" value="Thêm">Thêm</button>
            @csrf
        </form>
    </div>
    
        <div class="col9">
            <h2>Danh Sách Sản Phẩm Điện Thoại</h2>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($dienthoai))
                    @foreach($dienthoai as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{asset($item->img)}}" alt=""></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>50</td>
                        <td>10</td>
                        <td class="action-icons">
                            <a href="{{route('admin.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
                            <form action="{{route('admin.delete',$item->id)}}" method="post">
                                @csrf
                                @method("DELETE")
                                
                            <button type="submit"><i class="fas fa-trash-alt"></i>Xoa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
                    <!-- Các hàng khác -->
                </tbody>
            </table>
            <div class="pagination-container mt-4">
                {{ $giay->links() }}
            </div> 
        </div>
        
        <div class="col9">
            <h2>Danh Sách Sản Phẩm Giày</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($giay))
                        @foreach($giay as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><img src="{{asset($item->img)}}" alt=""></td>
                            <td>{{$item->name}}</td>

                            <td>{{$item->price}}</td>
                            <td>50</td>
                            <td>10</td>
                            <td class="action-icons">
                                <a href="{{route('admin.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
                                <form action="{{route('admin.delete',$item->id)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    
                                <button type="submit"><i class="fas fa-trash-alt"></i>Xoa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                    <!-- Các hàng khác -->
                </tbody>
            </table>
            <div class="pagination-container mt-4">
                {{ $giay->links() }}
            </div> 
        </div>
        
    </div>
</section>

</body>
</html>
