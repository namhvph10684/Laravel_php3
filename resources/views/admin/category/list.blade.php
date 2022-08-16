@extends('layout.masterad')

@section('title', 'Danh sách danh mục ')

@section('content-title', 'Danh sách danh mục')

@section('content')
<div class="content-wrapper">
 <div class='my-3'>
    <a href="{{route('cate.create')}}">
    <button class="btn btn-success">Tạo mới</button> </a>
</div> 
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên Danh Mục</th>
            <th>Ảnh</th>
            <th>Thao Tác</th>
            
            
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($cate_list as $cate)
        <tr>
            <td>{{$cate->id}}</td>
            <td>{{$cate->name}}</td>
           <td>
            <img src="{{asset($cate->thumbnail_url)}}" width="70" alt="">
           </td>
            


              <td>
                <a href="{{route('cate.edit',$cate->id)}}">
                <button class="btn btn-warning">Sửa</button>
                 </a>  
                 
                 <form action="{{route('cate.delete',$cate->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger"  onclick ="return confirm('Bạn thực sự muốn xóa danh mục này chứ?')">Xóa</button>
               </form> 
            </td>  
        </tr>
        @endforeach
    </tbody>
</table>
<div>
     {{$cate_list->links()}} {{-- hiển thị phân trang --}}
</div>

</div>
@endsection