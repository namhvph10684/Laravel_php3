


@extends('layout.masterad')

@section('title', 'Thêm sản phẩm ')

@section('content-title', 'Thêm sản phẩm ')

@section('content')
<div class="content-wrapper">

    @if($errors->any())
    <ul class='danger'>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Tên Sản Phẩm</label>
          <input type="text" name="name" class="form-control" placeholder="" >
        </div>
        
        <div class="form-group">
            <label for="">Mô Tả Chi tiết</label>
        <input type="text" name="description" class="form-control" placeholder="">
        </div>
        
        
        
        <div class="form-group">
            <label for="">Mô Tả ngắn</label>
        <input type="text" name="short_description" class="form-control" placeholder="">
        </div>
        
        
        <div class="form-group">
        
            <label for="">Giá</label>
        <input type="number" name="price" class="form-control" placeholder="">
        
        </div>
        
        <div class="form-group">
        
            <label for="">Ảnh</label>
        <input type="file" name="thumbnail_url" class="form-control" placeholder="">
        
        </div>

        <div class="form-group">
        
            <label for="">Số Lượng</label>
        <input type="number" name="quantity" class="form-control" placeholder="">
        
        </div>
        
        <div class="form-group">
            <label for="">Mã Danh Mục</label>
            <select name="category_id" id="" class="form-control">
        
                @foreach($cate as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
              
        
        <div class="form-group">
            <label for="">Kích thước</label>
            <input type="radio" name="size" value="0">Nhỏ
            <input type="radio" name="size" value="1">Lớn
           
        </div>
        
        <div class="form-group">
            <label for="">Trạng Thái</label>
            <input type="radio" name="status" value="1">Kích Hoạt
            <input type="radio" name="status" value="2">Không  Kích Hoạt
        </div>
        
        
        
        <div>
            <button class="btn btn-primary">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
</div>

@endsection