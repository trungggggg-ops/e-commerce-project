@extends('layouts.index')
@section('main')
<div class="container mt-5 py-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('users.forgetpasswordPost')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Nhập gmail</label>
                    <input type="email" class="form-control" name="email" id="" placeholder="Gmail...">
                </div>
              
                 @if ($errors->has('email'))
                   <div class="text-danger">{{ $errors->first('email') }}</div>
                  @endif  
                @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                 @endif               
    
                <button type="submit" class="btn btn-primary btn-block">Gửi</button>
            </form>
        </div>
    </div>          
</div>
@endsection