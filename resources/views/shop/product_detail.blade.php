@extends('layout.mastersite')
@section('title','Chi tiết sản phẩm')
@section('content')
<section class="product-details spad">
    <div class="container">
     
        <div class="row">
            

            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{asset($product->thumbnail_url)}}" alt="">
                    </div>
                    
                </div>
            </div>
           
            <div class="col-lg-6 col-md-6">                          
                <div class="product__details__text">
                    <h3>{{$product->name}}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">{{$product->price}} VNĐ</div>
                    <p>{{$product->short_description}}</p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>
                    <a href="{{route('home.cart',$product->id)}}" class="primary-btn">ADD TO CARD</a>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <ul>
                        <li><b>Số Lượng</b> <span>{{$product->quantity}} Sản Phẩm</span></li>
                        <li><b>Kích Thước</b> 
                            @if($product->size == 0)
                            <span class="badge badge-danger">Nhỏ</span>
                            @else
                            <span class="badge badge-success">Lớn</span>
                            @endif
                        </li>
                       
                        <li><b>Chia sẻ</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Mô tả</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                               
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                     
                </div>
               
            </div>
         
          
        </div>
       
    </div>
</section>
@endsection