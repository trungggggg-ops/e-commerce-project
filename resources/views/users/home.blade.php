
@extends('layouts.index')
@section('main')
 
<section class="mymaincontent my-3">
    <div class="container">
        <div class="cate-list mb-3">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/users/img/slider_1.webp')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/users/img/slider_1.webp')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/users/img/slider_1.webp')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- end slider -->

       

        <div class="product_list mb-3"  >
            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link backround-red text-white active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">ĐIỆN THOẠI</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-warning text-white" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">THỜI TRANG</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-info text-white" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                        aria-selected="false">GIA DỤNG</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="row backround-red">
                        <div class="col-md-3 py-3">
                            <img src="{{asset('assets/users/img/banner_1_tab.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 py-3">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border ">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/dien-thoai-samsung-galaxy-s21-ultra-5g-256g-g998b-bac-h0l175-b6ac0e17-afc8-42a9-bb4f-aecaf81ad7e2.png')}}"
                                                alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00123</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                
                                            <a href="{{route('users.giay')}}"><i class="fas fa-search icon"></i></a>
                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.webp')}}"
                                                alt="" class="img-fluid">
                                            <a href="" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 002</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                       <a href="{{route('users.dienthoai')}}"><i class="fas fa-search icon"></i></a>
                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                                alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>   
                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="row backround-yellow">
                        <div class="col-md-3">
                            <img src="{{asset('assets/users/img/banner_2_tab.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 py-3">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/304itd0-a0u-vuong-a0954654-0a43-4a9c-a026-5786147d0bf0.webp')}}"
                                                alt="" class="img-fluid">
                                             <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a> 
                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/31169fw-001-1.webp')}}" alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a> 

                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/3116z2w-a04-vuong.webp')}}" alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a> 

                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <div class="row backround-mauxanh">
                        <div class="col-md-3">
                            <img src="{{asset('assets/users/img/banner_3_tab.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 py-3">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/am-sieu-toc-15-lit-bear-zdh-b15t1-02122020.webp')}}" alt=""
                                                class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/may-xay-an-dam-3-coi-bear-llj-c04j1-gr-b03v1-12062021.webp')}}"
                                                alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                            <i class="fas fa-cog icon"></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="product-card position-relative bg-white border">
                                        <div
                                            class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset('assets/users/img/noi-com-dien-thong-minh-bear-sube015-dfb-b20a1-1620449971.webp')}}"
                                                alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                            <h4 class="mt-auto text-dange">690.000₫</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
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
        </div>
        <!-- end product_list -->

        <div class="product1-list mb-3">
            <div class="product_title border-bottom">
                <div class="row">
                    <div class="col-md-4 ">
                        <strong class="bg-danger text-white py-1 px-1">THỜI TRANG</strong>
                    </div>
                    <div class="col-md-8 text-end">
                        <a href="#" class=" text-yellow">Thời trang nữ</a>
                        <a href="#" class=" text-yellow">Thời trang nam</a>
                        <a href="#" class=" text-yellow"> Đồng hồ & Trang sức</a>
                        <a href="#" class=" text-yellow"> Giày dép nữ</a>
                        <a href="#" class=" text-yellow"> Giày dép nam</a>
                    </div>
                </div>
            </div>
            <div class="product_list-s py-3" >
                <div class="row">
                    <div class="col-md-5">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{asset('assets/users/img/banner_fashion_1.webp')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{asset('assets/users/img/banner_fashion_2.webp')}}" class="d-block w-100" alt="...">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7 " >
                        <div class="row">
                            

                        
                        @if(isset($giay))
                            @foreach($giay as $item)
                                <div class="col-md-4 mb-3 position-relative" >
                                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                        <div class="product-card position-relative bg-white border">
                                            <div
                                                class="d-flex flex-column justify-content-start align-items-start h-100">
                                                <img  alt="" src="{{asset($item->img)}}" class="img-fluid">
                                                <a href="#" class="text-yellow mt-3">{{$item->name}}</a>
                                                        <h4 class="mt-auto text-dange">{{number_format($item->price,0,'.',',')}}đ</h4>
    
                                                
                                                <div class="overlay">
                                                    <a href="{{ route('users.trangchitietgiay', ['id' => $item->id]) }}">
                                                        <i class="fas fa-search icon"></i>
                                                    </a>
                                                    <button href="#" ng-click="mua(sp)"><i class="fas fa-cog icon"></i></button></i>
                                                    <i class="fas fa-info-circle icon"></i>
                                                </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                
                <div class="row">
                    @if(isset($giay))
                            @foreach($giay as $item)
                                <div class="col-md-3 mb-3" >
                                    <div class="product-card position-relative bg-white border">
                                        <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset($item->img)}}" alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3">{{$item->name}}</a>
                                            <h4 class="mt-auto text-dange">{{$item->price}}đ</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="{{ route('users.trangchitietgiay', ['id' => $item->id]) }}">
                                                <i class="fas fa-search icon"></i>
                                            </a>
                                            <button href="#" ng-click="mua(sp)"><i class="fas fa-cog icon"></i></button></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    @endif            

                    <div class="col-md-3 mb-3" >
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/3116z2w-a04-vuong.webp')}}" alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3">Kappa giày thể thao Nam/Nữ 00</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="#!/trangchitiet/" ng-click="luuThongTinSanPham(sp)">
                                    <i class="fas fa-search icon"></i>
                                </a>
                                <button href="#" ng-click="mua(sp)"><i class="fas fa-cog icon"></i></button></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
          
               

                </div>
            </div>
        </div>
        <!-- end product1_list -->

        <div class="product2_list mb-3">
            <div class="product_title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <strong class="bg-danger text-white py-1 px-1">ĐỒ CÔNG NGHỆ</strong>
                    </div>
                    <div class="col-md-8 text-end">
                        <a href="#" class=" text-yellow">Điện thoại - Máy tính bảng</a>
                        <a href="#" class=" text-yellow">Phụ kiện - Thiết bị số</a>
                        <a href="#" class=" text-yellow"> Máy ảnh - Quay phim</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{asset('assets/users/img/banner_1.webp')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 " >
                    <div class="row">
                    @if(isset($dienthoai))
                        @foreach($dienthoai as $item)
                            <div class="col-md-3 mb-3 position-relative" >
                                <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                    <div class="product-card position-relative bg-white border">
                                        <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset($item->img)}}" alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3 ">{{$item->name}}</a>
                                            <h4 class="mt-auto text-dange">{{$item->price}}đ</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="#!/trangchitietdienthoai/" ng-click="luuThongTinSanPham(sp)">
                                                <i class="fas fa-search icon"></i>
                                            </a>
                                            <button href="#" ng-click="mua(sp)"><i class="fas fa-cog icon"></i></button></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif  
                       


                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{asset('assets/users/img/banner_2.webp')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 " >
                    <div class="row">
                        @if(isset($dienthoai))
                        @foreach($dienthoai as $item)
                            <div class="col-md-3 mb-3 position-relative" >
                                <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                    <div class="product-card position-relative bg-white border">
                                        <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                            <img src="{{asset($item->img)}}" alt="" class="img-fluid">
                                            <a href="#" class="text-yellow mt-3 ">{{$item->name}}</a>
                                            <h4 class="mt-auto text-dange">{{$item->price}}đ</h4>
                                        </div>
                                        <div class="overlay">
                                            <a href="#!/trangchitietdienthoai/" ng-click="luuThongTinSanPham(sp)">
                                                <i class="fas fa-search icon"></i>
                                            </a>
                                            <button href="#" ng-click="mua(sp)"><i class="fas fa-cog icon"></i></button></i>
                                            <i class="fas fa-info-circle icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif  


                    </div>

                </div>

            </div>
        </div>
        <!-- end product1_list -->


        <div class="product3_list mb-3">
            <div class="product_title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <strong class="bg-danger text-white py-1 px-1">GỢI Ý HÔM NAY</strong>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">iPhone 12 Pro Max Like New</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">iPhone 12 Pro Max Like New</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">iPhone 12 Pro Max Like New</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">iPhone 12 Pro Max Like New</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">iPhone 12 Pro Max Like New</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">iPhone 12 Pro Max Like New</a>
                                <h4 class="mt-auto text-dange">690.000₫</h4>
                            </div>
                            <div class="overlay">
                                <a href="trangchitiet/giay.html"><i class="fas fa-search icon"></i></a>
                                <i class="fas fa-cog icon"></i>
                                <i class="fas fa-info-circle icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product1_list -->


        <div class="tintuc">
            <div class="product_title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <strong class="bg-danger text-white py-1 px-1">TIN TỨC MỚI NHẤT</strong>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">Galaxy Z Fold 3 và Z Flip 3 sẽ có giá rẻ hơn</a>
                                <p class="mt-auto " style="color: #6c757d;">Hai smartphone đắt nhất của Samsung sẽ có giá rẻ hơn 400 USD so với thế hệ trước. Theo</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/bun-rieu-da-lat-1.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">Galaxy Z Fold 3 và Z Flip 3 sẽ có giá rẻ hơn</a>
                                <p class="mt-auto " style="color: #6c757d;">Hai smartphone đắt nhất của Samsung sẽ có giá rẻ hơn 400 USD so với thế hệ trước. Theo</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/khuyen-mai-viettel-31-08.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">Galaxy Z Fold 3 và Z Flip 3 sẽ có giá rẻ hơn</a>
                                <p class="mt-auto " style="color: #6c757d;">Hai smartphone đắt nhất của Samsung sẽ có giá rẻ hơn 400 USD so với thế hệ trước. Theo</p>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-3 position-relative">
                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                        <div class="product-card position-relative bg-white border">
                            <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                <img src="{{asset('assets/users/img/smart-tivi-samsung-55-inch-ua55tu8000kxxv-4k-uhd.webp')}}"
                                    alt="" class="img-fluid">
                                <a href="#" class="text-yellow mt-3 ">Galaxy Z Fold 3 và Z Flip 3 sẽ có giá rẻ hơn</a>
                                <p class="mt-auto " style="color: #6c757d;">Hai smartphone đắt nhất của Samsung sẽ có giá rẻ hơn 400 USD so với thế hệ trước. Theo</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end tin tuc -->
    </div>
</section>
<!-- end mymaincontent -->
@endsection
