@extends('layout.mastersite')

@section('title', 'Nội Thất Nhà Đẹp')



@section('content')
<div id="preloder">
    <div class="loader"></div>
</div>



<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($category as $category)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{$category->thumbnail_url}}">
                        <h5><a href="#">{{$category->name}}</a></h5>
                    </div>
                </div>
                @endforeach               
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tất Cả Sản Phẩm</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">Tất cả</li>
                        <li data-filter=".oranges">Sofa</li>
                        <li data-filter=".fresh-meat">Tủ quần áo</li>
                        <li data-filter=".vegetables">Tủ để giày</li>
                        <li data-filter=".fastfood">Bàn ăn</li>
                        <li data-filter=".fastfood">Thảm</li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($product as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg">
                        <img src="{{$product->thumbnail_url}}" alt="">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('home.product',$product->id)}}">{{$product->name}}</a></h6>
                        <h5>{{$product->price}} VNĐ</h5>
                    </div>
                </div>
                
            </div>
            @endforeach
          
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->

<!-- Banner End -->



<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Đi tới bài viết</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('/site/img/blog/blog1.jpg')}}" height="250" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Chất liệu gỗ tự nhiên mang đến sự an tâm</a></h5>
                        <p>Các sản phẩm được tạo ra từ doanh nghiệp nội thất Cường Nam sử dụng cốt liệu gỗ tự nhiên.Chất liệu bền bỉ nhất mang sự an tâm cho mọi công trình</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('/site/img/blog/blog2.jpg')}}" height="250" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Đầu tư mới và hiện đại về máy móc</a></h5>
                        <p>Lựa chọn những công nghệ máy móc đến từ Châu Âu và Trung Quốc. Đảm bảo tiến độ công trình và chất lượng nhứng sản phẩm làm ra </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('/site/img/blog/blog3.jpg')}}" height="250" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Thiết kế không gian nội thất hiện đại theo yêu cầu</a></h5>
                        <p>Bên cạnh những sản phẩm có bán sẵn chúng tôi nhận làm các sản phẩm theo yêu cầu đúng với thiết kế.Những gì bạn cần chúng tôi đều có</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection