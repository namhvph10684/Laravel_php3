@extends('layout.masterad')

@section('title', 'Sửa Thông tin người dùng ')

@section('content-title', 'Sửa Thông tin người dùng')

@section('content')
<div class="content-wrapper">

    @if($errors->any())
<ul class='danger'>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
  <label for="">Họ Tên</label>
  <input type="text" name="name" class="form-control" placeholder="" value="{{$user->name}}">
</div>

<div class="form-group">
    <label for="">Email</label>
<input type="email" name="email" class="form-control" placeholder=""  value="{{$user->email}}">
</div>




<div class="form-group">

    <label for="">Ngày Sinh</label>
<input type="date" name="birthday" class="form-control" placeholder="" value="{{$user->birthday}}">

</div>

<div class="form-group">

    <label for="">SĐT</label>
<input type="text" name="phone" class="form-control" placeholder=""  value="{{$user->phone}}">

</div>

<div class="form-group">

    <label for="">Ảnh</label>
<input type="file" name="avatar" class="form-control" placeholder="">

@if ($user->avatar)
<img src="{{asset($user->avatar)}}" alt="{{$user->name}}" width="100">
@endif

</div>



<div class="form-group">
    <label for="">Quyền</label>
    <input type="radio" name="position" value="1" {{( $user->position === 1) ? 'checked' : ''}}>Admin
    <input type="radio" name="position" value="2" {{( $user->position === 2) ? 'checked' : ''}}>Khách hàng
   
</div>

<div class="form-group">
    <label for="">Trạng Thái</label>
    <input type="radio" name="status" value="0" {{( $user->status === 0) ? 'checked' : ''}}>Kích Hoạt
    <input type="radio" name="status" value="1" {{( $user->status === 1) ? 'checked' : ''}}>Không  Kích Hoạt
</div>



<div>
    
    <button class="btn btn-primary">Lưu</button>

    
    <button type=""  class="btn btn-warning">Quay Lại</button>
    
</div>
</form>
</div>
@endsection