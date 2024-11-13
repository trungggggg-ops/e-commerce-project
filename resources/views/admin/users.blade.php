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
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới</h2>
            <form>
                <input type="text" placeholder="Tên">
                <input type="text" placeholder="Email">
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID sản phẩm</th>
                        <th>ID người dùng</th>
                        <th>Tên người dùng</th>
                        <th>Tên sản phẩm</th>
                        <th>Thành tiền</th>
                        <th>Hành động</th>
                        {{-- <th>Thao tác</th> <!-- Thêm cột mới --> --}}
                    </tr>
                </thead>
                <tbody>
                    
             
                    
                    @foreach ($data as $item)
                    
                    <tr>
                        <td>{{$item->id }}</td>
                        <td>{{ $item->id_user }}</td>
                        <td>{{ $item->user_name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                
                
                    
                  
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>
