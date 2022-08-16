@extends('layout.mastersite')
@section('title','Cửa Hàng')

@section('content')


<!-- Header Section End -->

<!-- Hero Section Begin -->


<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Danh Mục</h4>
                        <ul>
                            <li><a href="#">Sofa</a></li>
                            <li><a href="#">Bàn ăn</a></li>
                            <li><a href="#">Tủ quần áo</a></li>
                            <li><a href="#">Tủ giày</a></li>
                            <li><a href="#">Thảm</a></li>
                            
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Khoảng Giá</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                
                <div class="filter__item">
                    <div class="row">
                        <div class="section-title center">
                            <h2>Tất Cả Sản Phẩm</h2>
                        </div>
                        
                <div class="row">
                    @foreach($product_list as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="product__item">
                            <div class="product__item__pic set-bg" >
                                <img src="{{asset($product->thumbnail_url)}}" alt="">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{route('home.product',$product->id)}}">{{$product->name}}</a></h6>
                                <h5>{{$product->price}} VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                {{-- <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div> --}}

                <div>
                   {{$product_list->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection