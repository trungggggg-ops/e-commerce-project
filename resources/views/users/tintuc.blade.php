@extends('layouts.index')

@section('main')
    
    
  

    
<section class="danhmuc_tinuc">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-2">
                <div class="row ">
                    <h1 class="fs-5 rounded-top rounded-end bg-danger text-white py-2">Danh mục tin tức</h1>
                    <nav class="nav flex-column py-4">
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon6.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Điện thoại - Máy tính bảng</a>
                        </li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img
                                    src="{{asset('assets/users/img/304itd0-a0u-vuong-a0954654-0a43-4a9c-a026-5786147d0bf0.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Phụ kiện - Thiết bị sối</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img
                                    src="{{asset('assets/users/img/bun-rieu-da-lat-1.webp')}}" class="img-fluid" style="width: 30px;"
                                    alt="">Máy ảnh - Quay phimi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img
                                    src="{{asset('assets/users/img/dien-thoai-samsung-galaxy-s21-ultra-5g-256g-g998b-bac-h0l175-b6ac0e17-afc8-42a9-bb4f-aecaf81ad7e2.png')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Điện gia dụng - Nhà bếpi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon1.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Laptop - Thiết bị ITi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon2.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Máy chơi game - Trò chơi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/usets/img/icon3.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Trang sức - Sành điệu</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon4s.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Thời trang - Làm đẹp</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon5.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Nhà cửa đời sống</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon6.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Sách - Tiểu thuyết</a></li>
                    </nav>
                </div>



            </div>

            <div class="col-md-1"></div>
            <div class="col-md-9">
                <div class="row ">
                    <div class="text-center">
                        <h1 class="fs-5 rounded-top rounded-end bg-danger text-white py-2 px-10">Danh mục tin tức
                        </h1>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="text-center">
                        <h1 class="fs-5 rounded-top rounded-end bg-danger text-white py-2 px-10">Đời sống
                        </h1>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="product-card position-relative bg-white border ">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 001</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">

                                <a href="../trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>


@endsection