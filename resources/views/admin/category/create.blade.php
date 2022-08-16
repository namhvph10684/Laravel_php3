@extends('layout.masterad')

@section('title', 'Thêm mới danh mục ')

@section('content-title', 'Thêm mới danh mục ')

@section('content')
<div class="content-wrapper">

  @if($errors->any())
    <ul class='danger'>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{route('cate.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Tên Danh Mục</label>
          <input type="text" name="name" class="form-control" placeholder="" >
        </div>

        <div class="form-group">
          <label for="">Ảnh</label>
          <input type="file" name="thumbnail_url" class="form-control" placeholder="" >
        </div>
        
        
        <div>
            <button class="btn btn-primary">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
</div>

@endsection