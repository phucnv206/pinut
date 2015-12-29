<?php

use app\assets\AppAsset;
?>
<nav class="navbar navbar-dark bg-dark navbar-fixed-top" id="nav">
    <div class="container p-lang text-xs-right pull-xs-right pull-md-none">
        <a href="#">VN</a>
        <a href="#">EN</a>
    </div>
    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#p-nav">
        &#9776;
    </button>
    <div class="container">
        <div class="collapse navbar-toggleable-sm text-xs-center">
            <div class="row nav navbar-nav" id="scrollby-nav">
                <div class="nav-logo col-md-2 col-md-push-5">
                    <a class="nav-link" href="."><img src="/images/logo.png"></a>
                </div>
                <div class="p-nav-item col-md-5 col-md-pull-2">
                    <div class="row">
                        <div class="col-xs-4">
                            <a class="nav-link" href="#home"><?= \Yii::t('app', 'Home') ?></a>
                        </div>
                        <div class="col-xs-4">
                            <a class="nav-link" href="#about"><?= \Yii::t('app', 'About') ?></a>
                        </div>
                        <div class="col-xs-4">
                            <a class="nav-link" href="#product"><?= \Yii::t('app', 'Product') ?></a>
                        </div>
                    </div>
                </div>
                <div class="p-nav-item col-md-5">
                    <div class="row">
                        <div class="col-xs-4">
                            <a class="nav-link" href="#distribution"><?= \Yii::t('app', 'Distribution') ?></a>
                        </div>
                        <div class="col-xs-4">
                            <a class="nav-link" href="#"><?= \Yii::t('app', 'Design') ?></a>
                        </div>
                        <div class="col-xs-4">
                            <a class="nav-link" href="#contact"><?= \Yii::t('app', 'Contact') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div id="home" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="/images/slide.jpg" class="center-block">
        </div>
        <div class="carousel-item">
            <img src="/images/slide.jpg" class="center-block">
        </div>
    </div>
    <a class="left carousel-control" href="#p-slide" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#p-slide" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="bg-dark welcome" id="about">
    <div class="container text-xs-center">
        <h1>Xin Chào!</h1>
        <h4>
            "Phát triển cùng tự nhiên. Công ty TNHH Pinut được thành lập năm 2015
            với lĩnh vực hoạt động của công ty là sản xuất kinh doanh thực phẩm
            có nguồn gốc tự nhiên..."
        </h4>
        <a href="#" class="logo-btn"></a>
    </div>
</div>
<div class="product" id="product">
    <div class="container text-xs-center">
        <h1>Sản phẩm</h1>
        <h4>
            "Sản phẩm tiêu biểu của Pinut..."
        </h4>
        <div class="product-content">
            <div class="heading clearfix">
                <div class="pull-left">
                    <ul class="clearfix">
                        <li><a href="#">Tất cả</a></li>
                        <li><a href="#">Dòng gói</a></li>
                        <li><a href="#">Dòng hộp</a></li>
                        <li><a href="#">Dòng quà tặng</a></li>
                        <li><a href="#">Trái cây sấy</a></li>
                        <li><a href="#">Bánh kẹo</a></li>
                    </ul>
                </div>
                <div class="pull-right navigator">
                    <a href="#"><i class="fa fa-chevron-left"></i></a>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="product-item">
                        <img src="/images/product-1.jpg" class="img-fluid">
                        <div class="hover-content animated fadeIn">
                            <h4 class="title">Dòng gói</h4>
                            <div>
                                <span class="logo-btn"></span><br>
                                Xem thêm
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="product-item">
                        <img src="/images/product-1.jpg" class="img-fluid">
                        <div class="hover-content animated fadeIn">
                            <h4 class="title">Dòng gói</h4>
                            <div>
                                <span class="logo-btn"></span><br>
                                Xem thêm
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="product-item">
                        <img src="/images/product-1.jpg" class="img-fluid">
                        <div class="hover-content animated fadeIn">
                            <h4 class="title">Dòng gói</h4>
                            <div>
                                <span class="logo-btn"></span><br>
                                Xem thêm
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partners" id="distribution">
    <div class="container text-xs-center">
        <h1>Đối tác</h1>
        <p class="partners-content">
            "Phát triển cùng tự nhiên. Công ty TNHH Pinut được thành lập năm 2015
            với lĩnh vực hoạt động của công ty là sản xuất kinh doanh thực phẩm
            có nguồn gốc tự nhiên..."
        </p>
    </div>
</div>
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="news-content text-xs-center">
                    <h3>Tin tức - Hoạt động</h3>
                    <p>
                        "Phát triển cùng tự nhiên. Công ty TNHH Pinut được thành lập năm 2015
                        với lĩnh vực hoạt động của công ty..."
                    </p>
                    <a href="#" class="logo-btn"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact bg-dark" id="contact">
    <div class="container text-xs-center">
        <h1>Liên hệ</h1>
        <h4>
            Chúng tôi luôn sẵn sàng đón tiếp
        </h4>
    </div>
    <div class="container contact-content">
        <div class="row">
            <div class="col-sm-5">
                <div class="contact-info">
                    <h4>CÔNG TY TNHH PINUT</h4>
                    467/100 Lê Đức Thọ, p.16, q.Gò Vấp, Tp.HCM<br>
                    <b>Email:</b> sales@pinut.com.vn<br>
                    <b>Hotline:</b> (08) 22. 677 888 - 0944 157 157
                </div>
            </div>
            <div class="col-sm-7">
                <form class="contact-form">
                    <fieldset class="form-group">
                        <input type="email" class="form-control" placeholder="Tên Công Ty">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" placeholder="Điện Thoại">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Nội Dung"></textarea>
                    </fieldset>
                    <div class="text-xs-right"><button type="button" class="btn btn-link">Gửi</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <div id="googleMap" style="width: 100%; min-height: 320px"></div>
</div>
<footer class="bg-dark">
    <div class="logo-footer"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-xs-center text-sm-left">
                <div class="copyright-text">Pinut - Copyright 2015 Pinut Active</div>
            </div>
            <div class="col-sm-6 text-xs-center text-sm-right">
                <ul class="social-link">
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-linkedin fa-stack-1x"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-skype fa-stack-1x"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php
$this->registerJsFile('http://maps.googleapis.com/maps/api/js', ['depends' => AppAsset::className()]);
$this->registerJs("
    function initialize() {
        var myLatlng = new google.maps.LatLng(10.788690, 106.695579);
        var mapProp = {
            center: myLatlng,
            zoom: 18,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('googleMap'), mapProp);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Lavender'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    $('.product').waypoint(function(direction) {
        if (direction === 'down') {
            $('.product-item').each(function (index) {
                var elm = $(this);
                setTimeout(function () {
                    elm.addClass('animated flipInY');
                }, index * 100);
            });
        }
    }, {
        offset: 380
    });
    $('.news').waypoint(function(direction) {
        if (direction === 'down') {
            $('.news-content').addClass('animated slideInUp');
        }
    }, {
        offset: 380
    });
    $('.nav-link').click(function (e) {
        e.preventDefault();
        var elm = $(this).attr('href');
        var offset = $('#nav').height() + 8;
        var top = $(elm).offset().top - offset;
        $('html, body').animate({ scrollTop: top }, 600);
    });
");
