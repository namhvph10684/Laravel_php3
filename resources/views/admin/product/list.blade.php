@extends('layout.masterad')

@section('title', 'Danh sách sản phẩm  ')

@section('content-title', 'Danh sách sản phẩm ')

@section('content')

<div class="content-wrapper">

     <form action="" class="form-inline" role="form">
        <div class="form-group">
            <input type="text" class="form-control" name="key" placeholder="tìm kiếm">
        </div>
    
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </form> 

 <div class='my-3'>
    <a href="{{route('products.create')}}">
    <button class="btn btn-success">Tạo mới</button> </a>
</div> 
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên SP</th>
            <th>Mô Tả</th>
            <th>Mô Tả Ngắn</th>
            <th>Giá</th>
            <th>Trạng Thái</th>
            <th>Ảnh</th>
            <th>Số lượng</th>
            {{-- <th>Mã Danh mục</th> --}}
            <th>Kích thước</th>
            <th>Thao tác</th>
           
            
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($product_list as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->short_description}}</td>
            <td>{{$product->price}}</td>
            {{-- <td>
                @if($product->status == 1)
                <span class="badge badge-danger">kích Hoạt</span>
                @else
                <span class="badge badge-success">Không kích hoạt</span>
                @endif
               </td> --}}

               <td>
                @if($product->status)
                <form action="{{route('products.updateStatus',$product->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="0">
                    <button type="submit" name="btn" class="btn btn-success">Kích hoạt</button>
                </form>
                @else
                <form action="{{route('products.updateStatus',$product->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="1">
                    <button type="submit" name="btn" class="btn btn-danger">Không Kích hoạt</button>
                </form>
                @endif
            </td>

            
            <td>
                <img src="{{asset($product->thumbnail_url)}}" width="70" alt="">
            </td>
           <td>{{$product->quantity}}</td>

           {{-- <td>{{isset($product->category) ? $product->category->name : ''}}</td> --}}
           
           {{-- <td>{{$product->category->name}}</td> --}}
          
            <td>
            @if($product->size == 0)
            <span class="badge badge-danger">Nhỏ</span>
            @else
            <span class="badge badge-success">Lớn</span>
            @endif
           </td> 
           
           


           
              <td>
                  <a href="{{route('products.edit',$product->id)}}">
                <button class="btn btn-warning">Sửa</button>
                 </a>  

                 <form action="{{route('products.delete',$product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger "  onclick ="return confirm('Bạn thực sự muốn xóa sản phẩm này chứ?')">Xóa</button>
               </form> 
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>
<div>
     {{$product_list->links()}} {{-- hiển thị phân trang --}}
</div>

</div>
@endsection

