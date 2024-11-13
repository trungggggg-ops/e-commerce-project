
@extends('layouts.index')
@section('main')
<div class="container mt-5 py-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('users.resetpasswordPost')}}" method="post">
                @csrf
                <input type="hidden" value="{{$token}}" name="token" id="">
                {{-- <input type="email" name="email"> <br>
                <input type="password" name="password" id=""> --}}
                <div class="form-group">
                    <label for="email">Nhập gmail</label>
                    <input type="email" class="form-control" name="email" id="" placeholder="Gmail...">
                </div>
                <div class="form-group">
                    <label for="password">Password mới</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="Gmail...">
                </div>
                @if ($errors->has('email'))
                 <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif 
                @if ($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif 
                <button type="submit" class="btn btn-primary btn-block">Gửi</button>
            </form>
        </div>
    </div>          
</div>
@endsection