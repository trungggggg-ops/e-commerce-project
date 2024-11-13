@extends('layouts.index')
@section('main')

<body>


    <div class="container mt-5 py-3">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center mb-4">Đăng Nhập</h2>
           
            <form method="post" action="{{route('users.postlogin')}}">
              @csrf  
              <div class="form-group" name="myForm">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="email"placeholder="Nhập tên đăng nhập" >
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="newPassword" name="password" placeholder="Nhập mật khẩu" >

              </div>
           
              <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
              <br>

              <a href="{{route('users.register')}}">Đăng kí</a>
              <a href="{{route('users.forgetpassword')}}">Quên mật khẩu</a> 
             
                @if(session('errors'))
                    <div class="alert alert-danger">
                        {{ session('errors') }}
                    </div>
                @endif

                @if(session('msg'))
                <div class="alert alert-danger">
                    {{ session('errors') }}
                </div>
              @endif
            </form>
          </div>
        </div>

      </div>


@endsection