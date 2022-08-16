


@extends('layout.masterad')

@section('title', 'Sửa sản phẩm ')

@section('content-title', 'Sửa sản phẩm ')

@section('content')
<div class="content-wrapper">

    @if($errors->any())
    <ul class='danger'>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="">Tên Sản Phẩm</label>
          <input type="text" name="name" class="form-control" placeholder="" value="{{$product->name}}" >
        </div>
        
        <div class="form-group">
            <label for="">Mô Tả Chi tiết</label>
        <input type="text" name="description" class="form-control" placeholder="" value="{{$product->description}}">
        </div>
        
        
        
        <div class="form-group">
            <label for="">Mô Tả ngắn</label>
        <input type="text" name="short_description" class="form-control" placeholder="" value="{{$product->short_description}}">
        </div>
        
        
        <div class="form-group">
        
            <label for="">Giá</label>
        <input type="number" name="price" class="form-control" placeholder="" value="{{$product->price}}">
        
        </div>
        
        <div class="form-group">
        
            <label for="">Ảnh</label>
        <input type="file" name="thumbnail_url" class="form-control" placeholder="">
        @if ($product->thumbnail_url)
        <img src="{{asset($product->thumbnail_url)}}" alt="{{$product->thumbnail_url}}" width="100">
        @endif
        
        </div>

        <div class="form-group">
        
            <label for="">Số Lượng</label>
        <input type="number" name="quantity" class="form-control" placeholder="" value="{{$product->quantity}}">
        
        </div>
        
        <div class='form-group'>
            <label for="">Mã Danh Mục</label>
            <select name="category_id" class='form-control'>
                @foreach ($cate as $item)
                    <option
                        value="{{$item->id}}"
                        {{( $product->category_id === $item->id) ? 'selected' : ''}}
                    >{{$item->name}}</option>
                @endforeach
            </select>
        </div>
              
        
        <div class="form-group">
            <label for="">Kích thước</label>
            <input type="radio" name="size" value="0" {{( $product->size === 0) ? 'checked' : ''}}>Nhỏ
            <input type="radio" name="size" value="1" {{( $product->size === 1) ? 'checked' : ''}}>Lớn
           
        </div>
        
        <div class="form-group">
            <label for="">Trạng Thái</label>
            <input type="radio" name="status" value="1" {{( $product->status === 1) ? 'checked' : ''}}>Kích Hoạt
            <input type="radio" name="status" value="2" {{( $product->status === 2) ? 'checked' : ''}}>Không  Kích Hoạt
        </div>
        
        
        
        <div>
            <button class="btn btn-primary">Lưu</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
</div>

@endsection