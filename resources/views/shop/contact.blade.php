@extends('layout.mastersite')

@section('title','Liên Hệ')

@section('content')
 
 <!-- Contact Section Begin -->
 <section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Số điện thoại</h4>
                    <p>0385537286</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Địa Chỉ</h4>
                    <p>Thôn Việt Long-Tản Lĩnh-Ba Vì-Hà Nội</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Thời gian hoạt động</h4>
                    <p>7:00 - 22:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p>nambavi2001@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="map">
    <iframe
     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.0563128098947!2d105.39277984180372!3d21.125125078130285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313460137c55d4d7%3A0x4a71efa41152862b!2zVOG6o24gTMSpbmgsIEJhIFbDrCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1658910369781!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>Hà Nội</h4>
            <ul>
                <li>Phone:0385537286</li>
                <li>Địa chỉ: Thôn Việt Long-Tản Lĩnh-Ba Vì-Hà Nội</li>
            </ul>
        </div>
    </div>
</div>
<!-- Map End -->

<!-- Contact Form Begin -->
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Mọi Ý Kiến Đóng Góp</h2>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Họ tên">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Địa chỉ gmail">
                </div>
                <div class="col-lg-12 text-center">
                    <textarea placeholder="Ý kiến của bạn?"></textarea>
                    <button type="submit" class="site-btn">Gửi Đi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Form End -->

@endsection