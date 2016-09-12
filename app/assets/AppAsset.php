<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
//        'css/styles.css',
        'css/add_default.css',
        'css/default.css',
    ];
    public $fonts = [
//        'css/styles.css',
        'fonts/cuprumffu.ttf',
//        'css/default.css',
    ];
    public $js = [
//        'js/scripts.js',
        'js/jquery.scrollTo-min.js',
        'js/jquery.scrollUp.js',
        'js/jquery.timepicker.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
