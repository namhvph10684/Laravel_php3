@extends('layout.masterad')

@section('title', 'Danh sách người dùng ')

@section('content-title', 'Danh sách người dùng ')

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
    <a href="{{route('users.create')}}">
    <button class="btn btn-success">Tạo mới</button> </a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ Tên</th>
            <th>Email</th>  
            <th>Ảnh Đại Diện</th>
            <th>Ngày Sinh</th>
            <th>Trạng Thái</th>
            <th>Chức vụ</th>
            <th>Thao tác</th>
           
            
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($user_list as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            
            <td>
                <img src="{{asset($user->avatar)}}" width="70" alt="">
            </td>
           <td>{{$user->birthday}}</td>
           <td>
            @if($user->status == 0)
            <span class="badge badge-danger">Chưa kích hoạt</span>
            @else
            <span class="badge badge-success">Đã kích hoạt</span>
            @endif
           </td>




           <td>
            @if($user->position == 1)
            <span class="badge badge-danger">Admin</span>
            @else
            <span class="badge badge-success">Khách Hàng</span>
            @endif
           </td> 
           

            {{-- <td>
            @if($user->position)
            <form action="{{route('users.updatePosition',$user->id)}}" method="post">
                @csrf
                @method("PUT")
                <input type="hidden" name="position" value="1">
                <button type="submit" name="btn" class="btn btn-success">Khách Hàng</button>
            </form>
            @else
            <form action="{{route('products.updatePosition',$user->id)}}" method="post">
                @csrf
               @method("PUT")
                <input type="hidden" name="position" value="2">
                <button type="submit" name="btn" class="btn btn-danger">Admin</button>
            </form>
            @endif
        </td>  --}}


           
              <td>
                  <a href="{{route('users.edit',$user->id)}}">
                <button class="btn btn-warning">Sửa</button>
                 </a>  

                 <form action="{{route('users.delete',$user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger"  onclick ="return confirm('Bạn thực sự muốn xóa tài khoản này chứ?')">Xóa</button>
               </form> 
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>
<div>
     {{$user_list->links()}} {{-- hiển thị phân trang --}}
</div>

</div>
@endsection