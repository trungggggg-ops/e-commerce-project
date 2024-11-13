<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    {{-- link icon --}}
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/users/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/users/css/css.css')}}">
    <title> @yield('title') </title>

</head>

<body >

    <section class="myheader" >
        <div class="container py-3">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('assets/users/img/logo.webp')}}" alt="">
                </div>
                <div class="col-md-4 ">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  placeholder="Từ khoá tìm kiếm"
                            aria-label="Từ khoá tìm kiếm" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row ">
                        <div class="col">
                            <div class="row ">
                                <div class="col-3">
                                    <div class="fs-3 text-danger"><i class="bi bi-telephone-fill"></i></div>
                                </div>
                                <div class="col-9">
                                    Hỗ trợ
                                    <strong class="text-danger">00000000</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row ">
                                <div class="col-3">
                                    <div class="fs-3 text-danger"><i class="bi bi-person-circle"></i></div>
                                </div>
                                <div class="col-9"> 
                                    Xin chào 
                                    {{-- @if(isset($email))
                                        {{$email}}
                                    @endif --}}
                                    @if(Auth::check())
                                        {{Auth::user()->name}} <br>

                                        
                                        <form action="{{route('users.logout')}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-link text-danger p-0" style="text-decoration: none;">
                                                <strong>Logout</strong>
                                              </button>
                                        </form>
                                     @else
                                     <br>
                                    <strong class="text-danger"><a href="{{route('users.login')}}" style="color: rgba(var(--bs-danger-rgb),var(--bs-text-opacity)); text-decoration: none;">Login</a></strong>
                                     <form action="{{route('users.logout')}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-link text-danger p-0" style="text-decoration: none;">
                                                <strong>Logout</strong>
                                              </button>
                                        </form>
                                    
                                    @endif
                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" >
                    <div class="row">
                        <div class="col-4">
                            <a href="{{route('users.index')}}" class="position-relative">
                                <div class="fs-3"><i class="bi bi-cart4"></i></div>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" >
                                    {{$cart->getQuantity()}}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        </div>
                        
                      
                        <div class="col-4">
                            <a href="#" class="position-relative">
                                <div class="fs-3 "><i class="bi bi-heart-fill"></i></div>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="position-relative">
                                <div class="fs-3 "><i class="bi bi-heart-fill"></i></div>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end header -->

    <section class="mymainmenu bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-white py-2">
                    <nav>
                        <ul class="nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link dropdown-toggle text-white active" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    DANH MỤC SẢN PHẨM
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon1.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Điện thoại-Máy tính Bảng</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon2.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Phụ kiện-Thiết bị sổ xố</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon3.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Máy ảnh- Quay phim</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon4s.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Điện gia dụng - Nhà bếp </a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon5.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Laptop - Thiết bị IT</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon6.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Máy chơi game - Trò chơi</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon7.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Trang sức - Sành điệu</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon8.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Thời trang - Làm đẹp</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon9s.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Nhà cửa - Đời sống</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon10.webp')}}" class="img-fluid"
                                                style="width: 30px;" alt="">Điện thoại-Máy tính Bảng</a></li>


                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end 3 -->


                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg bg-danger">
                        <div class="container-fluid">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav nav-underline me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white" aria-current="page" href="{{route('users.trangchu')}}">TRANG CHỦ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{route('users.gioithieu')}}">GIỚI THIỆU</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="{{route('users.sanpham')}}">SẢN PHẨM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link   text-white" aria-disabled="true" href="{{route('users.tintuc')}}">TIN TỨC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  text-white" aria-disabled="true">TUYỂN DỤNG</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  text-white" aria-disabled="true">LIÊN HỆ</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

  

