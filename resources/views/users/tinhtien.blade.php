@extends('layouts.index')

@section('main')
<section class="tinhtien">
  <div class="container">

    <h1 class="mt-5 mb-4">Tính Tiền</h1>
    <div class="row">
      <div class="col-md-12">
        <form id="updateCartForm" action="{{ route('users.checkout') }}" method="POST">
          @csrf
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cart->list() as $key => $value)
                @if(is_array($value) && isset($value['id']))
                  <tr>
                    <td>{{$value['id']}}</td>
                    @if(isset($value['name']))
                      <td>{{$value['name']}}</td>
                    @endif
                    <td class="price">{{$value['price']}}</td>
                    <td><img src="{{asset($value['img'])}}" class="img-fluid" style="max-width: 50px; max-height: 50px;"></td>
                    <td>
                      <div class="input-group">
                        <input type="number" class="form-control text-center quantity" value="{{$value['quantity']}}" name="quantity[{{$value['id']}}]" min="1" data-price="{{$value['price']}}">
                      </div>
                    </td>
                    <td class="total">{{number_format($value['price'] * $value['quantity'])}}</td>
                    <td>
                      <a href="{{ route('users.deleteCartItem', ['id' => $value['id']]) }}" class="btn btn-primary" type="button">Xóa</a>
                    </td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
            <div class="d-flex justify-content-between">
              <a href="{{route('users.deleteAll')}}" class="btn btn-primary">Xóa tất cả</a>
              <h4 class="text-end">Tổng Tiền: <span id="totalPrice">{{number_format($cart->getTotalPrice())}}</span></h4>
              <input type="hidden" class="form-control" id="totalPriceInput" name="totalPrice" value="{{$cart->getTotalPrice()}}">

            </div>
            <div class="text-end mt-3">
              <button type="submit" id="datHangBtn" class="btn btn-success">Đặt Hàng</button>
            </div>
        </form>
  </div>
  {!! $qrCode !!}
</section>

<script>
  document.querySelectorAll('.quantity').forEach(input => {
    input.addEventListener('input', function() {
        const quantity = parseFloat(this.value);
        const price = parseFloat(this.getAttribute('data-price'));
        const totalCell = this.closest('tr').querySelector('.total');
        const totalPrice = quantity * price;

        totalCell.textContent = totalPrice;

        let totalPriceSpan = 0;
        document.querySelectorAll('.total').forEach(totalCell => {
            totalPriceSpan += parseFloat(totalCell.textContent);
        });
        document.getElementById('totalPrice').textContent = totalPriceSpan;
        
        // Cập nhật giá trị của input tổng tiền
        document.getElementById('totalPriceInput').value = totalPriceSpan;
    });
});

</script>

@endsection
