<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('/site/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/style.css')}}" type="text/css">
</head>

<body>
    

<!-- Header Section Begin -->
 <header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> nambavi2001@gmail.com</li>
                            <li>Miễn phí vận chuyển đơn hàng từ 99.000.000VNĐ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{asset('/site/img/language.jpg')}}" alt="" width="10" height="10">
                            <div>Tiếng Việt</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Tiếng Anh</a></li>
                                <li><a href="#">Tiếng Việt</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                           
                            <div class="header__top__right__language">
                              
                               
                                <div>Đăng Nhập</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="{{route('auth.getLogin')}}">Đăng Nhập</a></li>
                                    <li><a href="#">Đăng Xuất</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('home.')}}">Trang Chủ</a></li>
                        <li><a href="{{route('home.shop')}}">Sản Phẩm</a></li>                                               
                        <li><a href="{{route('home.contact')}}">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Tất Cả Danh Mục</span>
                    </div>
                    <ul>
                        <li><a href="#">Sofa</a></li>
                        <li><a href="#">Bàn ăn</a></li>
                        <li><a href="#">Tủ quần áo</a></li>
                        <li><a href="#">Tủ giày</a></li>
                        <li><a href="#">Thảm</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    {{-- <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Danh Mục
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="bạn muốn tìm ?">
                            <button type="submit" class="site-btn">Tìm kiếm</button>
                        </form> --}}
                    </div>
                    <div class="hero__search__phone">
                        {{-- <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0385537286</h5>
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div> --}}
                </div>
                <div class="hero__item set-bg" data-setbg="{{asset('/site/img/hero/banner.jpg')}}">
                    <div class="hero__text">
                        
                        <a href="#" class="primary-btn">Xem thêm...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Hero Section End -->
    <!-- Page Preloder -->
    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset('/site/img/logo_do_go.jpg')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa Chỉ :thôn Việt Long, xã Tản Lĩnh, huyện Ba Vì, thành phốHà Nội</li>
                            <li>Sđt: 0385537286</li>
                            <li>Email: nambavi2001@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Bạn muốn xem</h6>
                        <ul>
                            <li><a href="#">Cửa Hàng</a></li>
                            <li><a href="#">Danh Mục</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="#">Hỏi Đáp</a></li>
                           
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Liên hệ với chúng tôi</h6>
                        <p>Cập nhật email của bạn để nhận nhiều hơn ưu đãi.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bản quyền thuộc đồ gỗ Cường Nam <i class="fa fa-heart" aria-hidden="true"></i> <a href="" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('/site/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/site/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/site/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/site/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/site/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('/site/js/mixitup.min.js')}}"></script>
    <script src="{{asset('/site/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/site/js/main.js')}}"></script>



</body>

</html>