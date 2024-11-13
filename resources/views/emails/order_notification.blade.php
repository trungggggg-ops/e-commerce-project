<!-- resources/views/emails/order_notification.blade.php -->
<h1>New Order</h1>
<p>Hello Admin,</p>
<p>Bạn vừa có 1 đơn hàng bởi khách hàng tên {{ $userName }}.</p>

<a href="{{route('admin.users')}}"><p>Hãy vào kiểm tra.</p></a>