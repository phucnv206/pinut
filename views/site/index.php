<?php

use yii\helpers\Url;
use app\assets\AppAsset;
?>
<nav class="navbar navbar-dark bg-dark-opacity navbar-fixed-top" id="nav">
    <div class="container p-lang text-xs-right pull-xs-right pull-md-none">
        <a href="#" ng-click="main.changeLanguage('vi')">VN</a>
        <a href="#" ng-click="main.changeLanguage('en')">EN</a>
    </div>
    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#collapse-nav">
        &#9776;
    </button>
    <div class="container">
        <div class="collapse navbar-toggleable-sm text-xs-center" id="collapse-nav">
            <div class="row nav navbar-nav" id="scrollby-nav">
                <div class="nav-logo col-md-2 col-md-push-5">
                    <a class="nav-link" href="<?= Url::home(true) ?>"><img src="/images/logo.png"></a>
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
<div class="loader" ng-hide="main.loaded">
    <div class="wrapper">
        <i class="fa fa-spinner fa-pulse fa-2x"></i>
    </div>
</div>
<div id="home" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div ng-repeat="slide in main.slides" class="carousel-item" ng-class="{'active': $first}">
            <a ng-show="slide.url.length > 0" href="{{ slide.url }}" target="_blank"><img src="{{ slide.image }}" class="center-block"></a>
            <img src="{{ slide.image }}" class="center-block" ng-hide="slide.url.length > 0">
        </div>
    </div>
    <a class="left carousel-control" href="#home" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#home" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="bg-green welcome" id="about">
    <div class="container text-xs-center">
        <p class="text-44"><b>{{ main.pages[1].title }}</b></p>
        <p class="text-24">{{ main.pages[1].summary }}</p>
        <a href="#" ng-click="main.detailPage($event, 1)" class="logo-btn"></a>
    </div>
</div>
<div class="product" id="product">
    <div class="container text-xs-center">
        <p class="text-44"><b>{{ main.pages[2].title }}</b></p>
        <p class="text-18">{{ main.pages[2].summary }}</p>
        <div class="product-content">
            <div class="heading clearfix">
                <div class="pull-left">
                    <ul class="clearfix">
                        <li><a href="#" ng-click="main.setCategory($event)"><?= Yii::t('app', 'All') ?></a></li>
                        <li ng-repeat="category in main.categories">
                            <a href="#" ng-click="main.setCategory($event, category.id)">{{ category.title}}</a>
                        </li>
                    </ul>
                </div>
                <div class="pull-right navigator">
                    <a href="#" ng-click="main.prevPage($event)"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" ng-click="main.nextPage($event)"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4" ng-repeat="product in main.filtered = (main.products| filter:{category_id: main.selectedCategory})"
                     ng-if="$index >= main.pageIndex && $index < main.pageIndex + main.pageSize">
                    <a href="#" class="product-item" ng-click="main.detailProduct($event, $index)">
                        <img ng-src="{{ product.thumbnail}}" class="img-fluid">
                        <div class="hover-content animated fadeIn">
                            <div class="wrapper">
                                <h4 class="title">{{ product.title}}</h4>
                                <div>
                                    <span class="logo-btn"></span><br>
                                    <?= Yii::t('app', 'View more') ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partners" id="distribution" style="background-image: url('{{ main.pages[3].thumbnail }}')">
    <div class="container text-xs-center">
        <p class="text-44"><b>{{ main.pages[3].title }}</b></p>
        <p class="partners-content text-24">{{ main.pages[3].summary }}</p>
    </div>
</div>
<div class="news" style="background-image: url('{{ main.pages[4].thumbnail }}')">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="news-content text-xs-center">
                    <p class="heading">{{ main.pages[4].title }}</p>
                    <p>{{ main.pages[4].summary }}</p>
                    <a href="#" ng-click="main.detailPage($event, 4)" class="logo-btn"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact bg-dark" id="contact">
    <div class="container text-xs-center">
        <p class="text-44"><?= Yii::t('app', 'Contact') ?></p>
        <p class="text-24"><?= Yii::t('app', 'We are waiting to serving you') ?></p>
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
                <form class="contact-form" ng-submit="main.sendContact()">
                    <div class="error-message" ng-show="main.contactErrors.length > 0 || main.contactMessage.length > 0">
                        <div ng-repeat="error in main.contactErrors">{{ error }}</div>
                        {{ main.contactMessage }}
                    </div>
                    <fieldset class="form-group">
                        <input type="text" ng-model="main.contact.company" class="form-control" placeholder="<?= Yii::t('app', 'Your Company') ?>"
                               ng-disabled="main.contactSubmitting">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" ng-model="main.contact.email" class="form-control" placeholder="<?= Yii::t('app', 'Email') ?>"
                               ng-disabled="main.contactSubmitting">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="text" ng-model="main.contact.phone" class="form-control" placeholder="<?= Yii::t('app', 'Phone') ?>"
                               ng-disabled="main.contactSubmitting">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea ng-model="main.contact.message" class="form-control" rows="3" placeholder="<?= Yii::t('app', 'Message') ?>"
                                  ng-disabled="main.contactSubmitting"></textarea>
                    </fieldset>
                    <div class="text-xs-right">
                        <i class="fa fa-refresh fa-spin" ng-show="main.contactSubmitting"></i>
                        <button ng-disabled="main.contactSubmitting" type="submit" class="btn btn-link"><?= Yii::t('app', 'Submit') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <div id="googleMap" style="width: 100%; min-height: 350px"></div>
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
<div class="modal fade" id="product-detail" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">{{ main.products[main.selectedProduct].title}}</h4>
            </div>
            <div class="modal-body">
                <em>{{ main.products[main.selectedProduct].summary}}</em>
                <div ng-bind-html="main.products[main.selectedProduct].content"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="page-detail" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">{{ main.pages[main.selectedPage].title}}</h4>
            </div>
            <div class="modal-body">
                <em>{{ main.pages[main.selectedPage].summary}}</em>
                <div ng-bind-html="main.pages[main.selectedPage].content"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('http://maps.googleapis.com/maps/api/js', ['depends' => AppAsset::className()]);
$this->registerJs("
    function initialize() {
        var myLatlng = new google.maps.LatLng(10.8444856, 106.6722255);
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
            title: 'Pinut',
            icon: '/images/logo-map.png'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
    $('.news').waypoint(function(direction) {
        if (direction === 'down') {
            $('.news-content').addClass('animated slideInUp');
        }
    }, {
        offset: 380
    });
    $('.p-nav-item .nav-link').click(function (e) {
        e.preventDefault();
        var elm = $(this).attr('href');
        var offset = $('#nav').height() + 8;
        var top = $(elm).offset().top - offset;
        $('html, body').animate({ scrollTop: top }, 600);
    });
    $(window).scroll(function () {
        var top = $('#nav').offset().top;
        if (top > 150) {
            $('#nav').addClass('minimize');
        } else if (top === 0) {
            $('#nav').removeClass('minimize');
        }
    });
");
