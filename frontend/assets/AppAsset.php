<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '/css/bootstrap.min.css',
        '/css/style.css',
        '../css/versions.css',
        '/css/responsive.css',
        '/css/custom.css',
        '/css/animate.css',
        '/css/animate.min.css',
        '/css/bootstrap-touch-slider.css',
        '/css/flaticon.css',
        '/css/timeline.min.css',
        '/css/prettyPhoto.css',
        '/css/owl.carousel.css',
        '/css/font-awesome.min.css',
        '',
    ];
    public $js = [
        'js/modernizer.js',
        'js/all.js',
        'js/custom.js',
        'js/timeline.min.js',
        '',
        '',
        '',
        '',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
