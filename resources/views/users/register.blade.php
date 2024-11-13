@extends('layouts.index')

@section('main')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <h2 class="text-center mb-4">Đăng Ký</h2>

                <form method="post" action="{{ route('users.postregister') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Tên đăng nhập:</label>
                        <input type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" name="username">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"  value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <a href="{{ route('users.login') }}">Đăng nhập</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>

                </form>
            </div>
        </div>
    </div>
@endsection
