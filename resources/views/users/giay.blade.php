@extends('layouts.index')

@section('main')
<style>
     <style>
        .content {
            display: flex;
        }
        .box {
            width: 50px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            cursor: pointer;
            margin-right: 5px;
        }
        .selected {
            background-color: lightblue;
        }
    </style>
</style>
<section class="chitietsp">
    <div class="container">
     
        <div class="row">
            <div class="col-md-4">
            
              @if(isset($details) && is_array($details))
                  @foreach ($details as $item)
                
                  @csrf
                <img src="{{asset($item->img)}}" width="100%" alt="" id="main-image">  
            </div>

            <div class="col-md-5 ">
                <h1 style="font-size: 20px; font-weight: bold;"></h1>
               <div class="content my-4">
                
                    
              
                 <span >Thương hiệu: <strong >{{$item->name}}</strong></span>
                 <span class="m-1">Mã sản phẩm: <strong>{{$item->id}}</strong></span> 
               </div>
               <div class="content my-4">
                <span style="font-size: 25px; color: red; font-weight: bold;" >{{$item->price}}đ<strong class="text-secondary m-3" style="font-size: 20px;">Giá niêm yết: 1.790.000₫</strong></span>
              </div>

              <div class="content my-4">
                <span class="my-1" style="color: green;" >Tiết kiệm: <strong style="color: red;">1.790.000₫</strong> so với giá thị trường</span>
              </div>
             
              {{-- <div class="content my-4">
                <span class="my-1">Size: </span>
              </div> --}}
              {{-- <div class="content my-4">
                <div class="box" data-value="L"><strong>L</strong></div>
                <div class="box" data-value="Xl"><strong>Xl</strong></div>
                <div class="box" data-value="XXl"><strong>XXl</strong></div>
                <div class="box" data-value="M"><strong>M</strong></div>
            </div> --}}
            {{-- <p>Bạn đã chọn: <span id="selected-value" >None</span></p> --}}
            <form action="{{route('users.add')}}" method="post">
              @csrf
              <input type="number" name="quantity" id="quantity" value="1" min="1">

              <input type="hidden" id="selected-size" name="selected_size" value="">
              <input type="hidden" id="selected-size" name="id" value="{{$item->id}}">
              <input type="hidden" id="selected-size" name="name" value="{{$item->name}}">
              <input type="hidden" id="selected-size" name="price" value="{{$item->price}}">
              <input type="hidden" name="img" value="{{($item->img)}}" id="">
              
              <div class="content my4">
                <button type="submit"  class="btn btn-primary btn-lg btn-block">Thêm vào giỏ hàng</button>
              </div>
            </form>
                @endforeach
              @endif
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
 document.querySelectorAll('.box').forEach(function(box) {
    box.addEventListener('click', function() {
        // Bỏ chọn tất cả các ô
        document.querySelectorAll('.box').forEach(function(box) {
            box.classList.remove('selected');
        });
        // Chọn ô hiện tại
        box.classList.add('selected');
        // Cập nhật giá trị đã chọn
        var selectedValue = box.getAttribute('data-value');
        document.getElementById('selected-value').innerText = selectedValue;
        // Lưu trữ giá trị đã chọn vào input ẩn
        document.getElementById('selected-size').value = selectedValue;
    });
});
</script>
@endsection