@extends('layout.masterad')

@section('title', 'Thêm người dùng ')

@section('content-title', 'Thêm người dùng ')

@section('content')
<div class="content-wrapper">

    @if($errors->any())
    <ul class='danger'>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Họ tên</label>
          <input type="text" name="name" class="form-control" placeholder="" >
        </div>
        
        <div class="form-group">
            <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="">
        </div>
        
        
        
        <div class="form-group">
            <label for="">Mật Khẩu</label>
        <input type="password" name="password" class="form-control" placeholder="">
        </div>
        
        
        <div class="form-group">
        
            <label for="">Ngày Sinh</label>
        <input type="date" name="birthday" class="form-control" placeholder="">
        
        </div>
        
        <div class="form-group">
        
            <label for="">SĐT</label>
        <input type="text" name="phone" class="form-control" placeholder="">
        
        </div>
        
        <div class="form-group">
        
            <label for="">Ảnh</label>
        <input type="file" name="avatar" class="form-control" placeholder="">
        
        </div>
              
        
        <div class="form-group">
            <label for="">Quyền</label>
            <input type="radio" name="position" value="1">Admin
            <input type="radio" name="position" value="2">Khách Hàng
           
        </div>
        
        <div class="form-group">
            <label for="">Trạng Thái</label>
            <input type="radio" name="status" value="0">Kích Hoạt
            <input type="radio" name="status" value="1">Không  Kích Hoạt
        </div>
        
        
        
        <div>
            <button class="btn btn-primary">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
</div>

@endsection