@extends('layouts.index')

@section('main')
    <section class="sanpham">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-3 border shadow-lg">
                    <nav class="nav flex-column py-4">
                        <strong class="fs-4 ">Danh mục sản phẩm</strong>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="{{route('users.sanpham')}}"><img src="{{asset('assets/users/img/icon6.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Điện thoại</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="{{route('users.danhmucgiay')}}"><img
                                    src="{{asset('assets/users/img/304itd0-a0u-vuong-a0954654-0a43-4a9c-a026-5786147d0bf0.webp')}}" class="img-fluid"
                                    style="width: 30px;" alt="">GIAY</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/bun-rieu-da-lat-1.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Máy ảnh - Quay phimi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img
                                    src="{{asset('assets/users/img/dien-thoai-samsung-galaxy-s21-ultra-5g-256g-g998b-bac-h0l175-b6ac0e17-afc8-42a9-bb4f-aecaf81ad7e2.png')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Điện gia dụng - Nhà bếpi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon1.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Laptop - Thiết bị ITi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon2.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Máy chơi game - Trò chơi</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon3.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Trang sức - Sành điệu</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon4s.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Thời trang - Làm đẹp</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon5.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Nhà cửa đời sống</a></li>
                        <li class="py-2 hover_sp"><a class="dropdown-item" href="#"><img src="{{asset('assets/users/img/icon6.webp')}}"
                                    class="img-fluid" style="width: 30px;" alt="">Sách - Tiểu thuyết</a></li>


                    </nav>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div class="row border py-4">
                        <div class="col-md-1">
                            <img src="{{asset('assets/users/img/default-logo.webp')}}" class="img-fluid">
                        </div>
                        <div class="col-md-11">
                            <h1 class="fs-4">TẤT CẢ SẢN PHẨM</h1>
                            <p>Ở đây chúng tôi có rất nhiều sản phẩm đáp ứng cho nhu cầu thiết yếu của khách hàng, với
                                phương châm bán hàng chất lượng gặt hái thành công, mọi thông tin thắc mắc xin gửi về
                                ego.deploy@gmail.com hoặc qua số điện thoại 0388287614 để được hỗ trợ giải đáp thắc mắc về
                                sản phẩm.
                                Chúng tôi hy vọng đem lại lợi ích cho khách hàng nhiều hơn qua từng sản phẩm.</p>
                        </div>
                    </div>
                    <div class="row py-2"> </div>



                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" ng-click="order='price'">Giá tăng</button>
                            <button class="btn btn-primary" ng-click="order='-price'">Giá giảm</button>
                            <button class="btn btn-primary" ng-click="order='name'">Tên A-Z</button>
                            <button class="btn btn-primary" ng-click="order='-name'">Tên Z-A</button>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <form action="{{ route('users.danhmucgiay') }}" method="GET" class="d-flex">
                                    <input type="text" class="form-control" name="search" placeholder="Tìm kiếm..." value="{{ request('search') }}">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4">
                        @if(isset($giay))
                        @foreach($giay as $item)
                            <div class="col-md-3 mb-3">
                                <div class="product-card position-relative bg-white border ">
                                    <div class="d-flex flex-column justify-content-start align-items-start h-100">
                                        <img src="{{asset($item->img)}}"
                                            alt="" class="img-fluid">
                                        <a href="#" class="text-yellow mt-3">{{$item->name}}</a>
                                        <h4 class="mt-auto text-dange">{{$item->price}}₫</h4>
                                    </div>
                                    <div class="overlay">

                                        <a href="{{route('users.trangchitietgiay',['id'=>$item->id])}}"><i
                                                    class="fas fa-search icon"></i></a>
                                        <i class="fas fa-cog icon"></i>
                                        <i class="fas fa-info-circle icon"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif 
                        <div class="pagination-container mt-4">
                            {{ $giay->links() }}
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection 