@extends('layouts.index')

@section('main')

@extends('layouts.index')

@section('main')

<section class="chitietsp">
    <div class="container">
        <div class="row">
         
        </div>
        <div class="row">
            <div class="col-md-4">
              <input type="text" name="" id="" value="">
              
                <img src="" width="100%" alt="" id="main-image">  
                <div class="row">
                    <div class="thumbnail-images mt-3">
                      <img src="{{asset('assets/users/img/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.webp')}}" style="width: 70px;" alt="" onclick="changeImage('{{asset('assets/users/img/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.webp')}}')">
                      <img src="{{asset('assets/users/img/dien-thoai-samsung-galaxy-s21-ultra-5g-256g-g998b-bac-h0l175-b6ac0e17-afc8-42a9-bb4f-aecaf81ad7e2.webp')}}" style="width: 70px;" alt="" onclick="changeImage('{{asset('assets/users/img/dien-thoai-samsung-galaxy-s21-ultra-5g-256g-g998b-bac-h0l175-b6ac0e17-afc8-42a9-bb4f-aecaf81ad7e2.webp')}}')">
                      <img src="{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}" style="width: 70px;" alt="" onclick="changeImage('{{asset('assets/users/img/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.webp')}}')">
                      <img src="{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}" style="width: 70px;" alt="" onclick="changeImage('{{asset('assets/users/img/galaxy-fold-black-home-screen-open.webp')}}')">

                    </div>
                  </div>
            </div>

            <div class="col-md-5 ">
                <h1 style="font-size: 20px; font-weight: bold;"></h1>
               <div class="content my-4">
                 <span >Thương hiệu: <strong>Kappa</strong></span>
                 <span class="m-1">Mã sản phẩm: <strong>001</strong></span> 
               </div>
               <div class="content my-4">
                <span style="font-size: 25px; color: red; font-weight: bold;" >500000đ<strong class="text-secondary m-3" style="font-size: 20px;">Giá niêm yết: 1.790.000₫</strong></span>
              </div>

              <div class="content my-4">
                <span class="my-1" style="color: green;" >Tiết kiệm: <strong style="color: red;">1.790.000₫</strong> so với giá thị trường</span>
              </div>

              <div class="content my-4">
                <span class="my-1">Size: <strong>L</strong></span>
              </div>
              <div class="content my-4" style="display: flex;">
                <div class="box" style="width: 50px; height: 30px; border:1px solid black; text-align: center;"><strong>L</strong></div>
                <div class="box" style="width: 50px; height: 30px; border:1px solid black; text-align: center;"><strong>L</strong></div>
                <div class="box" style="width: 50px; height: 30px; border:1px solid black; text-align: center;"><strong>L</strong></div>
                <div class="box" style="width: 50px; height: 30px; border:1px solid black; text-align: center;"><strong>L</strong></div>
              </div>

              <div class="content my-4">
                <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-outline-secondary" ng-click="giamSoLuong(thongTinSanPham.id)">-</button>
                    </span>
                    <input type="text" class="form-control text-center"  ng-model="thongTinSanPham.quantity"  id="quantity" readonly>
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-outline-secondary" ng-click="tangSoLuong(thongTinSanPham.id)">+</button>

                    </span>
                  </div>
              </div>
              <div class="content my4">
                <button ng-click="mua(thongTinSanPham)" type="button" class="btn btn-primary btn-lg btn-block">Thêm vào giỏ hàng</button>
              </div>
     
            </div>

            <div class="col-md-3">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Thông tin hữu ích
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">Trung tâm bảo hành</button>
                    <button type="button" class="list-group-item list-group-item-action">Thông tin vận chuyển</button>
                    <button type="button" class="list-group-item list-group-item-action">Hướng dẫn thanh toán</button>
                    <button type="button" class="list-group-item list-group-item-action">Hướng dẫn thanh toán</button>
                    <button type="button" class="list-group-item list-group-item-action">Hướng dẫn thanh toán</button>
                    <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
                  </div>
            </div>
        </div>

        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    • Chất liệu: Đế ngoài: 100% Polyamide, phần trên: 20% Polyester và 80% Poliuretane.
• Bộ sưu tập: KOMBAT VONIR
• Thiết kế: Giày luyện tập đa năng được sản xuất với công nghệ KOMBAT. Phần trên thân giày kết hợp hài hòa giữa vải lưới và đệm nhiệt, đê ngoài cao su và đế giữa bằng Phylon tổng hợp. Miếng lót giày bằng đệm mút có tính đàn hồi và thông thoáng với dòng chữ Kappa. Nổi bật là chữ họa tiết chữ K ở phần sau thân giày.
• Phù hợp: Tập luyện thể thao, đi làm, đi chơi,...
• Xuất xứ thương hiệu: Italy
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">Nội dung tùy chỉnh viết ở đây</div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">Đánh giá Kappa giày thể thao Nam/Nữ 001</div>
                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
              </div>
        </div>
    </div>
</section>



<script>
function changeImage(imageUrl) {
document.getElementById('main-image').src = imageUrl;
}
</script>
@endsection

@endsection