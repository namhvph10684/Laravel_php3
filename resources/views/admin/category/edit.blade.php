@extends('layout.masterad')

@section('title', 'Sửa danh mục ')

@section('content-title', 'Sửa danh mục ')

@section('content')
<div class="content-wrapper">

  @if($errors->any())
    <ul class='danger'>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{route('cate.update',$cate->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
          <label for="">Tên Danh Mục</label>
          <input type="text" name="name" class="form-control" placeholder="" value="{{$cate->name}}" >
        </div>
        

        <div class="form-group">
        
          <label for="">Ảnh</label>
      <input type="file" name="thumbnail_url" class="form-control" placeholder="">
      @if ($cate->thumbnail_url)
      <img src="{{asset($cate->thumbnail_url)}}" alt="{{$cate->thumbnail_url}}" width="100">
      @endif
      
      </div>
        
        <div>
            <button class="btn btn-primary">Lưu</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
</div>

@endsection