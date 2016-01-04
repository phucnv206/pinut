<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css',
        'css/app.css',
    ];
    public $js = [
        '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
        '//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js',
        '//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-sanitize.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js',
        'js/app.js'
    ];

}
